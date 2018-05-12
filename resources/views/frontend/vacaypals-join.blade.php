@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="vacaypals">

        @include('frontend.section.default-banner')


        <div class="default-section normal">

            <div class="container">


                <div class="row">

                    <div class="col-md-6 col-12">

                        <h1 class="default-title small mb-40">What we need :</h1>

                        <div class="default-content-wrapper">
                            {!! @$page->requirementDescription !!}
                        </div>

                    </div>

                    <div class="col-md-6 col-12">
                        <h1 class="default-title small">{!! @$page->title !!}</h1>

                        <div class="form-section">
                            <form>
                                <div class="form-group">
                                    <label class="label-form" for="firstName">FIRST NAME</label>
                                    <input type="text" class="form-control custom-control" id="firstName" name="firstName" placeholder="First Name">
                                </div>


                                <div class="form-group">
                                    <label class="label-form" for="lastName">LAST NAME</label>
                                    <input type="text" class="form-control custom-control" id="lastName" name="lastName" placeholder="Last Name">
                                </div>

                                <div class="form-group">
                                    <label class="label-form" for="phoneNumber">PHONE NUMBER</label>
                                    <input type="text" class="form-control custom-control" id="phoneNumber" name="phoneNumber" placeholder="Your phone number">
                                </div>

                                <div class="form-group">
                                    <label class="label-form" for="email">EMAIL</label>
                                    <input type="email" class="form-control custom-control" id="email" name="email" placeholder="Insert your email here">
                                </div>


                                <div class="form-group">
                                    <label class="label-form" for="email">CITY</label>
                                    <input type="text" class="form-control custom-control" id="city" name="city" placeholder="Your City ex. Sydney, Kyoto, Bali">
                                </div>


                                <div class="form-group">
                                    <label class="label-form" for="message">ABOUT ME</label>

                                    <textarea class="form-control custom-control" rows="5" placeholder="Tell us a bit about you..." id="aboutDescription" name="aboutDescription"></textarea>
                                </div>


                                <div class="form-group">
                                    <label class="label-form" for="email">LINK</label>
                                    <input type="text" class="form-control custom-control" id="link" name="link" placeholder="Your website/ Portfolio link">
                                </div>

                                <div class="text-center">
                                    <a href="#" class="btn main-btn" data-toggle="modal" data-target="#contactFormModal" data-backdrop="static">SEND REQUEST <i class="fa fa-angle-right"></i></a>
                                </div>

                            </form>
                        </div>




                    </div>

                </div>


            </div>

        </div>



    </section>


@endsection

