@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="how">

        <div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">

                <div class="inline-wrapper">

                    <h1 class="title">HOW IT WORKS</h1>


                    <h2 class="subtitle">Treat yourself a stroll into the native and enjoy how the locals live!</h2>


                    <a href="#" class="btn main-btn">BOOK NOW! <i class="fa fa-angle-right"></i></a>
                </div>


            </div>
        </div>



        <div class="default-section">

            <div class="container">

                <div class="row step-wrapper">

                    <div class="col-md-3">
                        <img class="step-icon" src="{!! url('/') !!}/assets/frontend/images/step-icon-1.png" alt="Step Icon">
                    </div>

                    <div class="col-md-9">
                        <label class="num-label">01</label>
                        <h3 class="step-name">Search, Sign up & Seal</h3>
                        <div class="step-detail">
                            <p>
                                Explore the local destination you are interested in and briefly get familiar about where and what to explore there on our informative website.
                                Click “Book Now” and fill in the booking form with your details and your chosen destination. Then, you might proceed to the payment once all details filled correctly.
                            </p>
                        </div>
                    </div>

                </div>


                <div class="row step-wrapper">

                    <div class="col-md-3 order-md-9 order-3">
                        <img class="step-icon" src="{!! url('/') !!}/assets/frontend/images/step-icon-2.png" alt="Step Icon">
                    </div>

                    <div class="col-md-9 order-md-3 order-9">
                        <label class="num-label">02</label>
                        <h3 class="step-name">Sit Tight!</h3>
                        <div class="step-detail">
                            <p>
                                Once your booking confirmed and payment completed, our team will get in touch with you to arrange your VACAY! Prepare anything you want to ask us to make you more well-informed prior your VACAY! Afterwards, your VACAY! Pal will get in touch with you. Don’t hesitate to chat and ask with them anything about the destination, things to bring along, the itinerary, bucket-list places and activities to do, and most importantly to set up a meeting point.
                            </p>
                        </div>
                    </div>

                </div>


                <div class="row step-wrapper">

                    <div class="col-md-3">
                        <img class="step-icon" src="{!! url('/') !!}/assets/frontend/images/step-icon-3.png" alt="Step Icon">
                    </div>

                    <div class="col-md-9">
                        <label class="num-label">03</label>
                        <h3 class="step-name">Prepare your documentations</h3>
                        <div class="step-detail">
                            <p>
                                Searching and get to know more about where you want to explore and what experience that you want to get. Searching and get to know more about
                            </p>
                            <p>
                                where you want to explore and what experience that you want to get.
                            </p>

                        </div>
                    </div>

                </div>


                <div class="row step-wrapper">

                    <div class="col-md-3 order-md-9 order-3">
                        <img class="step-icon" src="{!! url('/') !!}/assets/frontend/images/step-icon-4.png" alt="Step Icon">
                    </div>

                    <div class="col-md-9 order-md-3 order-9">
                        <label class="num-label">04</label>
                        <h3 class="step-name">Pick a time and book your ticket</h3>
                        <div class="step-detail">
                            <p>
                                Searching and get to know more about where you want to explore and what experience that you want to get. Searching and get to know more about
                            </p>
                            <p>
                                where you want to explore and what experience that you want to get.
                            </p>
                        </div>
                    </div>

                </div>


                <div class="row step-wrapper">

                    <div class="col-md-3">
                        <img class="step-icon" src="{!! url('/') !!}/assets/frontend/images/step-icon-5.png" alt="Step Icon">
                    </div>

                    <div class="col-md-9">
                        <label class="num-label">05</label>
                        <h3 class="step-name">Set to go!</h3>
                        <div class="step-detail">
                            <p>
                                Let’s go on VACAY! and make stories. Get connected with the locals and feel like one. Enjoy how the locals live through indispensable insight and authentic connection with the abundant allures of native nature, culture, and adventure.
                            </p>
                        </div>
                    </div>

                </div>


                <div class="row step-wrapper">

                    <div class="col-md-3 order-md-9 order-3">
                        <img class="step-icon" src="{!! url('/') !!}/assets/frontend/images/step-icon-6.png" alt="Step Icon">
                    </div>

                    <div class="col-md-9 order-md-3 order-9">
                        <label class="num-label">06</label>
                        <h3 class="step-name">Enjoy making experience</h3>
                        <div class="step-detail">
                            <p>
                                Searching and get to know more about where you want to explore and what experience that you want to get. Searching and get to know more about
                            </p>
                            <p>
                                where you want to explore and what experience that you want to get.
                            </p>
                        </div>
                    </div>

                </div>



            </div>




        </div>



    </section>


@endsection

