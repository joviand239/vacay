@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="contact">

        @include('frontend.section.default-banner')

        <div class="default-section">

            <div class="container small">


                <div class="form-section">

                    <h2 class="header">{!! @$page->title !!}</h2>


                    <div id="contact-form" class="form" role="form" data-validate="true">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="firstName">FIRST NAME</label>
                                    <input type="text" class="form-control custom-control" id="firstName" name="firstName" placeholder="First Name" data-validation="required">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="lastName">LAST NAME</label>
                                    <input type="text" class="form-control custom-control" id="lastName" name="lastName" placeholder="Last Name" data-validation="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="email">EMAIL</label>
                                    <input type="text" class="form-control custom-control" id="email" name="email" placeholder="Insert your email here" data-validation="required email">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="phoneNumber">PHONE NUMBER</label>
                                    <input type="text" class="form-control custom-control" id="phoneNumber" name="phoneNumber" placeholder="Your phone number" data-validation="required number">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form active" for="enquiry">ENQUIRY</label>

                                    <select class="form-control custom-select custom-control" id="enquiry" name="enquiry" data-validation="required">
                                        <option value="" disabled selected>I would like to</option>
                                        @foreach(getEnquiryOption() as $key => $value)
                                            <option value="{!! @$key !!}">{!! @$value !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form active" for="cityId">DESTINATION</label>

                                    <select class="form-control custom-select custom-control" id="cityId" name="cityId" data-validation="required">
                                        <option value="" disabled selected>Your chosen local destination</option>
                                        @foreach(GetCityList() as $key => $value)
                                            <option value="{!! @$key !!}">{!! @$value !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="label-form" for="message">MESSAGE</label>

                                    <textarea class="form-control custom-control" rows="5" placeholder="Your message" id="message" name="message" data-validation="required"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="button" id="btn-submit-contact" class="btn main-btn">GET IN TOUCH <i class="fa fa-angle-right"></i></button>
                        </div>

                    </div>



                </div>




            </div>

        </div>



    </section>


@endsection


@section('jsCustom')
    <script>
        $(document).ready(function () {

            $('#btn-submit-contact').click(function (e) {

                var form = $('#contact-form');

                form.trigger('submit');

                if (form.find('[name=enquiry]').val()){
                    form.find('[name=enquiry]').parent('.form-group').removeClass('has-error');
                    form.find('[name=enquiry]').parent('.form-group').find('.form-error').remove();
                }

                if (form.find('[name=cityId]').val()){
                    form.find('[name=cityId]').parent('.form-group').removeClass('has-error');
                    form.find('[name=cityId]').parent('.form-group').find('.form-error').remove();
                }

                var countError = form.find('.has-error').length;

                var data = {
                    firstName: form.find('[name=firstName]').val(),
                    lastName: form.find('[name=lastName]').val(),
                    email: form.find('[name=email]').val(),
                    phoneNumber: form.find('[name=phoneNumber]').val(),
                    enquiry: form.find('[name=enquiry]').val(),
                    cityId: form.find('[name=cityId]').val(),
                    message: form.find('[name=message]').val(),
                };

                console.log(data);

                if (countError == 0) {
                    $.ajax({
                        url: mainUrl+'/contact-us/submit',
                        type: 'POST',
                        data: data,
                        dataType: 'JSON',
                        beforeSend: function() {

                        },
                        success: function(response){
                            console.log(response.data);

                            initSuccessFormModal(response.data);

                            resetForm('#contact-form');
                        },
                        error: function(error){
                            console.log(error);
                        }
                    });
                }

            });

            function resetForm(wrapperId) {
                var form = $(wrapperId);

                form.find('input').val('');
                form.find('textarea').val('');
                form.find('select').val('');
            }

            function initSuccessFormModal(message) {

                var wrapper = $('#successFormModal');

                wrapper.find('.title').html(message.title);
                wrapper.find('.summary').html(message.summary);

                wrapper.modal({
                    show: true,
                    backdrop: 'static'
                });
            }


        });
    </script>
@endsection

