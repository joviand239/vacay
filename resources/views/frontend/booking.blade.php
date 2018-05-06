@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="booking">

        <div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">

                <div class="inline-wrapper">

                    <h1 class="title">BOOKING FORM - SYDNEY</h1>

                </div>

            </div>
        </div>


        <div class="default-section">
            <div class="container small">


                <div class="form-section">
                    <form>

                        <h1 class="form-title">1. Personal Details</h1>

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

                        <h1 class="form-title">2. Booking Details</h1>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label-form" for="intention">PEOPLE</label>

                                    <input type="number" class="form-control custom-control" id="quantity" name="quantity" placeholder="Number of people" min="1">
                                </div>
                            </div>
                        </div>


                        <div class="pick-category-wrapper">

                            <div class="pick-list">
                                <div class="row pick-item" data-index="1">
                                    <div class="col">
                                        <div class="form-group">
                                            <select class="form-control custom-select custom-control" name="category[]">
                                                <option value="" disabled selected>Choose your Category</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">

                                            <div class="input-group mb-2">
                                                <input id="datepicker" type='text' name="date[]" class='form-control custom-control custom-datepicker' placeholder="Pick the Date"/>

                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center">

                                <span id="add-category-picker">ADD ANOTHER CATEGORY</span>

                            </div>




                        </div>


                        <h1 class="form-title">3. Iteneraries Graphic</h1>


                        <div class="form-group">

                            <p class="mb-20">Want you bring an exxtraordinary maps to complete your travel guide, worth for $35 AUD?</p>


                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="withItenerary1" name="withItenerary" class="custom-control-input" value="1">
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


                        <div class="text-center">
                            <a href="#" class="btn main-btn" data-toggle="modal" data-target="#bookingResultModal" data-backdrop="static">BOOK NOW! <i class="fa fa-angle-right"></i></a>
                        </div>



                    </form>
                </div>



            </div>

        </div>



    </section>


    @include('frontend.section.pick-category')


@endsection


@section('jsCustom')
    <script>
        $(document).ready(function () {

            var indexCategoryPicker = 1;

            var datePickerOptions = {
                language: 'en',
                dateFormat: 'yyyy-mm-dd',
                minDate: new Date()
            }

            $('.custom-datepicker').datepicker(datePickerOptions);


            $('#add-category-picker').click(function (e) {
                e.preventDefault();

                var list = $('.pick-list');

                var clonedSection = $('#default-pick-category .pick-item');
                var clone = clonedSection.clone(true);

                indexCategoryPicker++;

                clone.attr('data-index', indexCategoryPicker);

                clone.find('[name="date[]"]').addClass('custom-datepicker');

                clone.find('[name="category[]"]').addClass('custom-select');

                list.append(clone);

                initializeCategoryPicker(indexCategoryPicker);


                if (indexCategoryPicker == 12){
                    $(this).fadeOut();
                }


            });

            function initializeCategoryPicker(index) {

                $('.pick-item[data-index="'+index+'"] .custom-datepicker').datepicker(datePickerOptions);

                $('.pick-item[data-index="'+index+'"] .custom-select').select2();

            }

        })
    </script>
@endsection
