@extends('frontend.layouts.frontend')

@section('meta_title', 'Checkout Success')

@section('meta_description', 'Success Page')

@section('content')


    <div id="checkout-success" class="default-section">

        <div class="container">

            <h1 class="default-title">Terima kasih telah booking di Vacay Pals</h1>

            <hr>

            <div class="info-content">

                <img class="icon" src="{!! url('/') !!}/assets/frontend/images/icon-plane.png" alt="Icon Thank You">

                <div class="mb-30">
                    <h2 class="highlight">BOOKINGAN ANDA TELAH KAMI TERIMA</h2>
                    <h2 class="orderNumber">#{!! @$booking->bookingNumber !!}</h2>
                    <h2 class="highlight">TOTAL AUD {!! getPriceNumber(@$order->grandTotal) !!}</h2>
                </div>


                <p>Jika ada pertanyaan mengenai bookingan Anda, hubungi customer service kami.</p>

            </div>


        </div>

    </div>


@endsection

