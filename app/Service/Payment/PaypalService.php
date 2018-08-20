<?php
namespace App\Service\Payment;

use Anouar\Paypalpayment\Facades\PaypalPayment;

class PaypalService {

    /*
    * Process payment using credit card
    */
    public static function paywithCreditCard ($model, $dataPayment, $type) {
        // ### Address
        // Base Address object used as shipping or billing
        // address in a payment. [Optional]
        $shippingAddress = Paypalpayment::shippingAddress();
        $shippingAddress->setLine1("3909 Witmer Road")
            ->setLine2("Niagara Falls")
            ->setCity("Niagara Falls")
            ->setState("NY")
            ->setPostalCode("14305")
            ->setCountryCode("US")
            ->setPhone("716-298-1822")
            ->setRecipientName(@$model->customerDetail->firstName.' '.@$model->customerDetail->lastName);

        // ### CreditCard
        $card = Paypalpayment::creditCard();
        $card->setType(@$dataPayment->creditCard)
            ->setNumber(@$dataPayment->cardNumber)
            ->setExpireMonth(@$dataPayment->month)
            ->setExpireYear(@$dataPayment->year)
            ->setCvv2(@$dataPayment->cvv)
            ->setFirstName(@$dataPayment->firstName)
            ->setLastName(@$dataPayment->lastName);

        // ### FundingInstrument
        // A resource representing a Payer's funding instrument.
        // Use a Payer ID (A unique identifier of the payer generated
        // and provided by the facilitator. This is required when
        // creating or using a tokenized funding instrument)
        // and the `CreditCardDetails`
        $fi = Paypalpayment::fundingInstrument();
        $fi->setCreditCard($card);

        // ### Payer
        // A resource representing a Payer that funds a payment
        // Use the List of `FundingInstrument` and the Payment Method
        // as 'credit_card'
        $payer = Paypalpayment::payer();
        $payer->setPaymentMethod("credit_card")
            ->setFundingInstruments([$fi]);

        $arrayItem = [];

        if ($type == 'BOOKING') {
            foreach (@$model->bookingItems as $data) {
                $item = Paypalpayment::item();
                $item->setName(@$data->cityCategory->city->name.' - '.@$data->cityCategory->category->name)
                    ->setDescription(@$data->cityCategory->city->tagline)
                    ->setCurrency('USD')
                    ->setQuantity((int)@$data->quantity)
                    ->setPrice((int)@$data->price);

                $arrayItem[] = $item;
            }
        }elseif ($type == 'ORDER'){
            $item = Paypalpayment::item();
            $item->setName(@$model->city->name.' - Essential')
                ->setDescription(@$model->city->tagline)
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setPrice(@$model->grandTotal);

            $arrayItem[] = $item;
        }


        $itemList = Paypalpayment::itemList();
        $itemList->setItems($arrayItem)
            ->setShippingAddress($shippingAddress);


        $details = Paypalpayment::details();
        $details->setSubtotal((int)@$model->grandTotal);

        //Payment Amount
        $amount = Paypalpayment::amount();
        $amount->setCurrency("USD")
            // the total is $17.8 = (16 + 0.6) * 1 ( of quantity) + 1.2 ( of Shipping).
            ->setTotal((int)@$model->grandTotal)
            ->setDetails($details);

        // ### Transaction
        // A transaction defines the contract of a
        // payment - what is the payment for and who
        // is fulfilling it. Transaction is created with
        // a `Payee` and `Amount` types

        $transaction = Paypalpayment::transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        // ### Payment
        // A Payment Resource; create one using
        // the above types and intent as 'sale'

        $payment = Paypalpayment::payment();

        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setTransactions([$transaction]);

        try {
            // ### Create Payment
            // Create a payment by posting to the APIService
            // using a valid ApiContext
            // The return object contains the status;
            $payment->create(Paypalpayment::apiContext());
        } catch (\PPConnectionException $ex) {
            return response()->json(["error" => $ex->getMessage()], 400);
        }

        return response()->json([$payment->toArray()], 200);
    }

}