@extends('frontend.layouts.frontend')

@section('meta_title', 'Booking Payment')

@section('meta_description', 'Payment Page')

@section('content')


    <div id="checkout-success" class="default-section">

        <div class="container">

            <div class="success section">
                <h1 class="default-title">Thank you for booking at Vacay Pals</h1>

                <hr>

                <div class="info-content">

                    <img class="icon" src="{!! url('/') !!}/assets/frontend/images/icon-plane.png" alt="Icon Thank You">

                    <div class="mb-30">
                        <h2 class="highlight">YOUR BOOKS HAVE WE ACCEPTED</h2>
                        <h2 class="orderNumber">#{!! @$booking->bookingNumber !!}</h2>
                        <h2 class="highlight">TOTAL USD {!! getPriceNumber(@$booking->grandTotal) !!}</h2>
                    </div>


                    <p class="mb-30">If you have any questions about your bookings, contact our customer service.</p>

                    <a href="{!! route('home') !!}" class="btn main-btn" tabindex="0">CLICK HERE <i class="fa fa-angle-right"></i></a>

                </div>
            </div>

            <div class="error section">
                <h1 class="default-title">Your booking payment has not been completed</h1>

                <hr>

                <div class="info-content">

                    <img class="icon" src="{!! url('/') !!}/assets/frontend/images/icon-plane.png" alt="Icon Thank You">

                    <div class="mb-30">
                        <h2 class="highlight">please repeat the ordering and payment process correctly</h2>
                    </div>

                    <a href="{!! route('home') !!}" class="btn main-btn" tabindex="0">CLICK HERE <i class="fa fa-angle-right"></i></a>

                </div>
            </div>



        </div>

    </div>




    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">

                    <div class="body-wrapper">
                        <div class="choose-payment-method method-section active">
                            <h1 class="default-title mb-30">Pay With:</h1>

                            <div class="method-box">
                                <div class="left">
                                    <i class="fa fa-credit-card icon"></i>
                                    <span class="name">Credit Card</span>
                                </div>
                                <div class="right">
                                    <i class="fa fa-angle-right icon"></i>
                                </div>
                            </div>


                        </div>


                        <div class="cc-method-section method-section form-section">
                            <h1 class="default-title mb-30">Enter your card details</h1>

                            <form id="creditCardForm" method="POST" action="{!! route('submit.payment', ['number' => $number, 'type' => @$type]) !!}" class="form" role="form" data-validate="true">

                                <div class="form-group">
                                    <label class="label-form active" for="firstName">CARD HOLDER FIRST NAME</label>
                                    <input type="text" class="form-control custom-control" id="firstName" name="firstName" placeholder="First Name" data-validation="required">
                                </div>

                                <div class="form-group">
                                    <label class="label-form active" for="lastName">CARD HOLDER LAST NAME</label>
                                    <input type="text" class="form-control custom-control" id="lastName" name="lastName" placeholder="Last Name" data-validation="required">
                                </div>

                                <div class="form-group">
                                    <label class="label-form active" for="creditCard">CREDIT CARD</label>

                                    <select class="form-control custom-select custom-control" id="creditCard" name="creditCard" data-validation="required">
                                        <option value="visa">VISA</option>
                                        <option value="mastercard">Mastercard</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="label-form active" for="cardNumber">CARD NUMBER</label>
                                    <input type="text" class="form-control custom-control" id="cardNumber" name="cardNumber" placeholder="0000 0000 0000 0000" data-validation="required creditcard" data-validation-allowing="visa">
                                </div>

                                <div class="form-group">
                                    <label class="label-form active" for="expiredDate">VALID TILL</label>
                                    <div class="input-group mb-2">
                                        <input type="text" name="expiredDate" class="form-control custom-control datepicker-here" data-language='en'
                                               data-min-view="months"
                                               data-view="months"
                                               data-date-format="mm/yyyy" placeholder="Pick the Date"/>

                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="label-form active" for="cvv">CVV NUMBER</label>
                                    <input type="text" class="form-control custom-control" id="cvv" name="cvv" placeholder="123" data-validation="required cvv">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn main-btn">CONTINUE PAYMENT <i class="fa fa-angle-right"></i></button>
                                </div>
                            </form>




                        </div>



                    </div>



                </div>

            </div>
        </div>
    </div>

@endsection


@section('jsCustom')

    <script>
        var submitPaymentURL = '{!! route('submit.payment', ['number' => @$number, 'type' => @$type]) !!}';
    </script>

    <script src="{{ url('/') }}/assets/frontend/js/script.booking-success.js"></script>
@endsection

