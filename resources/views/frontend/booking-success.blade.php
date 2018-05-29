@extends('frontend.layouts.frontend')

@section('meta_title', 'Checkout Success')

@section('meta_description', 'Success Page')

@section('content')


    <div id="checkout-success" class="default-section">

        <div class="container">

            <h1 class="default-title">Thank you for booking at Vacay Pals</h1>

            <hr>

            <div class="info-content">

                <img class="icon" src="{!! url('/') !!}/assets/frontend/images/icon-plane.png" alt="Icon Thank You">

                <div class="mb-30">
                    <h2 class="highlight">YOUR BOOKS HAVE WE ACCEPTED</h2>
                    <h2 class="orderNumber">#{!! @$booking->bookingNumber !!}</h2>
                    <h2 class="highlight">TOTAL USD {!! getPriceNumber(@$booking->grandTotal) !!}</h2>
                </div>


                <p>If you have any questions about your bookings, contact our customer service.</p>

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
                    },
                    onPending: function(result){
                        populateInfoPage();
                    },
                    onError: function(result){
                        populateInfoPage();
                    },
                    onClose: function(){
                        populateInfoPage();
                    }
                });


                function populateInfoPage() {

                    $('#checkout-success').addClass('active');
                }
            })




        </script>

@endsection

