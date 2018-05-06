@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="contact">

        <div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">

                <div class="inline-wrapper">

                    <h1 class="title">CONTACT US</h1>

                </div>


            </div>
        </div>


        <div class="default-section">

            <div class="container small">


                <div class="form-section">

                    <h2 class="header">Ask further, we will get back in touch with you shortly!</h2>


                    <form>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="firstName">FIRST NAME</label>
                                    <input type="text" class="form-control custom-control" id="firstName" name="firstName" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="lastName">LAST NAME</label>
                                    <input type="text" class="form-control custom-control" id="lastName" name="lastName" placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="email">EMAIL</label>
                                    <input type="email" class="form-control custom-control" id="email" name="email" placeholder="Insert your email here">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="phoneNumber">PHONE NUMBER</label>
                                    <input type="text" class="form-control custom-control" id="phoneNumber" name="phoneNumber" placeholder="Your phone number">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="intention">MY INTENTION</label>

                                    <select class="form-control custom-select custom-control" id="intention" name="intention">
                                        <option value="" disabled selected>I would like to</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="destination">DESTINATION</label>

                                    <select class="form-control custom-select custom-control" id="destination" name="destination">
                                        <option value="" disabled selected>Your chosen local destination</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="message">MESSAGE</label>

                                    <textarea class="form-control custom-control" rows="5" placeholder="Your message" id="message" name="message"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="text-center">
                            <a href="#" class="btn main-btn" data-toggle="modal" data-target="#contactFormModal" data-backdrop="static">GET IN TOUCH <i class="fa fa-angle-right"></i></a>
                        </div>




                    </form>



                </div>




            </div>

        </div>



    </section>


@endsection

