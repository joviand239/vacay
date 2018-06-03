@extends('frontend.layouts.frontend')

@section('meta_title', 'Booking '.@$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="booking">

        <div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">

                <div class="inline-wrapper">

                    <h1 class="title">BOOKING FORM - {!! @$page->name !!}</h1>

                </div>

            </div>
        </div>


        <div class="default-section">
            <div class="container small">


                <div class="form-section">
                    <div id="booking-form" role="form" data-validate="true">

                        <h1 class="form-title">1. Personal Details</h1>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="label-form" for="firstName">FIRST NAME</label>
                                    <input type="text" class="form-control custom-control" id="firstName" name="firstName" placeholder="First Name" data-validation="required">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="label-form" for="lastName">LAST NAME</label>
                                    <input type="text" class="form-control custom-control" id="lastName" name="lastName" placeholder="Last Name" data-validation="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="label-form" for="email">EMAIL</label>
                                    <input type="text" class="form-control custom-control" id="email" name="email" placeholder="Insert your email here" data-validation="required email">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="label-form" for="phoneNumber">PHONE NUMBER</label>
                                    <input type="text" class="form-control custom-control" id="phoneNumber" name="phoneNumber" placeholder="Your phone number" data-validation="required number">
                                </div>
                            </div>
                        </div>

                        <h1 class="form-title">2. Booking Details</h1>


                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="label-form" for="intention">PEOPLE</label>

                                    <input type="text" class="form-control custom-control" id="quantity" name="quantity" placeholder="Number of people" min="1" value="1" data-validation="required number" data-validation-allowing="range[1;8]">
                                </div>
                            </div>
                        </div>


                        <div class="pick-category-wrapper">

                            <div class="pick-list">



                            </div>


                            <div class="text-center">

                                <span id="add-category-picker">ADD ANOTHER CATEGORY</span>

                            </div>




                        </div>


                        <h1 class="form-title">3. Iteneraries Graphic</h1>


                        <div class="form-group">

                            <p class="mb-20">Want you bring an exxtraordinary maps to complete your travel guide, worth for ${!! getPriceNumber(@$page->iteneraryPrice) !!} AUD?</p>
                            <input type="hidden" id="iteneraryPrice" name="iteneraryPrice" value="{!! @$page->iteneraryPrice !!}">


                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="withItenerary1" name="withItenerary" class="custom-control-input" value="1" checked>
                                <label class="custom-control-label" for="withItenerary1">Absolutely, YES</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="withItenerary2" name="withItenerary" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="withItenerary2">Hmm. I don't think I need it</label>
                            </div>

                        </div>

                        <h1 class="form-title">4. Additional Info</h1>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="message">MESSAGE</label>

                                    <textarea class="form-control custom-control" rows="5" placeholder="You can tell a propose why you need this holiday, a litte story behind etc" id="message" name="message"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agreed" name="agreed" data-validation="required">
                                        <label class="custom-control-label" for="agreed">I agree with <a href="{!! route('terms') !!}">Terms & Conditions</a></label>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="text-center">
                            <a id="btn-book" href="#" class="btn main-btn">BOOK NOW! <i class="fa fa-angle-right"></i></a>
                        </div>



                    </div>
                </div>



            </div>

        </div>



    </section>


    @include('frontend.section.pick-category')


@endsection


@section('jsCustom')
    <script>
        var cityId = {!! @$page->id !!};
        var cityCategories = {!! @$page->categories !!};
        var selectedCityCategory = {!! json_encode(@$selectedCityCategory) !!};
    </script>
    <script src="{{ url('/') }}/assets/frontend/js/script.booking.js"></script>
@endsection
