@extends('frontend.layouts.frontend')

@section('meta_title', 'Checkout Success')

@section('meta_description', 'Success Page')

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


@endsection



@section('jsCustom')
        <script type="text/javascript" src="{{ env('VERITRANS_SNAP_URL') }}" data-client-key="{{ env('VERITRANS_CLIENT_KEY') }}"></script>
        <script type="text/javascript">
            $(document).ready(function () {


                snap.pay('{{ @$snapToken }}',{
                    onSuccess: function(result){
                        populateInfoPage();

                        $('.success').addClass('active');

                        console.log('success');console.log(result);
                    },
                    onPending: function(result){
                        populateInfoPage();

                        $('.error').addClass('active');

                        console.log('pending');console.log(result);
                    },
                    onError: function(result){
                        populateInfoPage();
                        $('.error').addClass('active');
                        console.log('error');console.log(result);
                    },
                    onClose: function(){
                        populateInfoPage();
                        $('.error').addClass('active');
                        console.log('customer closed the popup without finishing the payment');
                    }
                });


                function populateInfoPage() {

                    $('#checkout-success').addClass('active');
                }
            })




        </script>

@endsection

