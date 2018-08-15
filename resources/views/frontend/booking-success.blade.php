@extends('frontend.layouts.frontend')

@section('meta_title', 'Checkout Success')

@section('meta_description', 'Success Page')

@section('content')


    <div id="checkout-success" class="default-section active">

        <div class="container">

            <div class="success">
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



        </div>

    </div>


@endsection

