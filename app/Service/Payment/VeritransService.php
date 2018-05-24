<?php
namespace App\Service\Payment;

use App\Entity\ApiLog;
use App\Entity\Invoice;
use App\Entity\Order;
use App\Service\BookingService;
use App\Service\MailerService;
use App\Service\InvoiceService;
use App\Service\OrderService;
use App\Service\PPOB\SepulsaService;
use App\Util\Constant;
use Veritrans_Config;
use Veritrans_Snap;
use Veritrans_Notification;
use Veritrans_Transaction;

class VeritransService {
	private static function Config(){
		Veritrans_Config::$isProduction = env('VERITRANS_IS_PRODUCTION');
		Veritrans_Config::$serverKey = env('VERITRANS_SERVER_KEY');
		Veritrans_Config::$isSanitized = true;
	}


	public static function GetSnapToken($booking){
		static::Config();



        $vendorTrxNumber = $booking->bookingNumber.'.'.time();
        $booking->bookingNumber = $vendorTrxNumber;
        $booking->save();



        $customer_details = array(
            'first_name'    => @$booking->customerDetail->firstName,
            'last_name'     => @$booking->customerDetail->lastName,
            'email'         => @$booking->customerDetail->email,
            'phone'         => @$booking->customerDetail->phoneNumber,
            'billing_address'  => [],
            'shipping_address' => []
        );

		$transaction = array(
			'transaction_details' => array(
				'order_id' => @$booking->bookingNumber,
				'gross_amount' => (int)$booking->grandTotalIdr, // no decimal allowed
			),
            'customer_details' => $customer_details,
			'enabled_payments' => ['credit_card'],
			"expiry" => [
				"start_time" => \Carbon::now()->format("Y-m-d H:i:s +0700"),
				"unit" => "minutes",
				"duration" => 60 * 24
			],
		);


		$snapToken = Veritrans_Snap::getSnapToken($transaction);
		return $snapToken;
	}

	public static function SettlementNotification(){
		static::Config();

		$notif = new Veritrans_Notification();

        ApiLog::create([
            'vendor' => 'MIDTRANS',
            'request' => '',
            'response' => json_encode($notif),
            'url' => ''
        ]);

		$transaction_status = $notif->transaction_status;
		$type = $notif->payment_type;
		$orderId = $notif->order_id;
        $fraud = $notif->fraud_status;

		$orderNumber = $orderId;


		if ($transaction_status == 'capture' || $transaction_status == 'settlement'){
			BookingService::UpdateStatusByOrderNumber($orderNumber, Constant::STATUS_PAID);
		}

		else if($transaction_status == 'pending'){
            BookingService::UpdateStatusByOrderNumber($orderNumber, Constant::STATUS_UNPAID);
		}
	}

	public static function GetVeritransTransaction($veritransTransactionId){
		static::Config();
		return Veritrans_Transaction::status($veritransTransactionId);
	}

	public static function CancelTransaction($mtTransactionId){
	    static::Config();
        return Veritrans_Transaction::cancel($mtTransactionId);
    }
}
