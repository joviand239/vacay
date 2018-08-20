@extends('frontend.layouts.frontend')

@section('meta_title', 'Booking Error')

@section('meta_description', 'Booking Error Page')

@section('content')


    <div id="checkout-success" class="default-section active">

        <div class="container">

            <div class="error">
                <h1 class="default-title">There was an error during the {!! ($type == 'BOOKING') ? 'booking' : 'order' !!} process</h1>

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

