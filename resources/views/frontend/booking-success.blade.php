@extends('frontend.layouts.frontend')

@section('meta_title', 'Checkout Success')

@section('meta_description', 'Success Page')

@section('content')


    <div id="checkout-success" class="default-section active">

        <div class="container">

            <div class="success">
                <h1 class="default-title">Thank you for {!! ($type == 'BOOKING') ? 'booking' : 'order' !!} at Vacay Pals</h1>

                <hr>

                <div class="info-content">

                    <img class="icon" src="{!! url('/') !!}/assets/frontend/images/icon-plane.png" alt="Icon Thank You">

                    <div class="mb-30">
                        <h2 class="highlight">YOUR {!! ($type == 'BOOKING') ? 'BOOKING' : 'ORDER' !!} HAS BEEN ACCEPTED</h2>
                        <h2 class="orderNumber">#{!! ($type == 'BOOKING') ? @$model->bookingNumber : @$model->orderNumber !!}</h2>
                        <h2 class="highlight">TOTAL USD {!! getPriceNumber(@$model->grandTotal) !!}</h2>
                    </div>


                    <p class="mb-30">If you have any questions about your {!! ($type == 'BOOKING') ? 'booking' : 'order' !!}, contact our customer service.</p>

                    <a href="{!! route('home') !!}" class="btn main-btn" tabindex="0">CLICK HERE <i class="fa fa-angle-right"></i></a>

                </div>
            </div>



        </div>

    </div>


@endsection

