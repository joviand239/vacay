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
                            <div id="pal-form" class="form" role="form" data-validate="true">
                                <div class="form-group">
                                    <label class="label-form" for="firstName">FIRST NAME</label>
                                    <input type="text" class="form-control custom-control" id="firstName" name="firstName" placeholder="First Name" data-validation="required">
                                </div>


                                <div class="form-group">
                                    <label class="label-form" for="lastName">LAST NAME</label>
                                    <input type="text" class="form-control custom-control" id="lastName" name="lastName" placeholder="Last Name" data-validation="required">
                                </div>

                                <div class="form-group">
                                    <label class="label-form" for="phoneNumber">PHONE NUMBER</label>
                                    <input type="text" class="form-control custom-control" id="phoneNumber" name="phoneNumber" placeholder="Your phone number" data-validation="required number">
                                </div>

                                <div class="form-group">
                                    <label class="label-form" for="email">EMAIL</label>
                                    <input type="text" class="form-control custom-control" id="email" name="email" placeholder="Insert your email here" data-validation="required email">
                                </div>


                                <div class="form-group">
                                    <label class="label-form" for="city">CITY</label>
                                    <input type="text" class="form-control custom-control" id="city" name="city" placeholder="Your City ex. Sydney, Kyoto, Bali" data-validation="required">
                                </div>


                                <div class="form-group">
                                    <label class="label-form" for="description">ABOUT ME</label>

                                    <textarea class="form-control custom-control" rows="5" placeholder="Tell us a bit about you..." id="description" name="description" data-validation="required"></textarea>
                                </div>


                                <div class="form-group">
                                    <label class="label-form active" for="resumeFile">RESUME FILE</label>
                                    <span class="resume-name"></span>
                                    <input type="file" class="form-control custom-control" id="resumeFile" name="resumeFile" data-validation="required mime size" data-validation-allowing="pdf" data-validation-max-size="2M" data-validation-error-msg-size="You can not upload images larger than 2M" data-validation-error-msg-mime="You can only upload PDF File">
                                </div>

                                <div class="text-center">
                                    <button type="button" class="btn main-btn" id="btn-submit-request">SEND REQUEST <i class="fa fa-angle-right"></i></button>
                                </div>

                            </div>
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

            $('#btn-submit-request').click(function (e) {

                var form = $('#pal-form');

                form.trigger('submit');

                var countError = form.find('.has-error').length;

                var file = form.find('[name=resumeFile]').prop('files')[0];
                var data = new FormData();

                data.append('firstName', form.find('[name=firstName]').val());
                data.append('lastName', form.find('[name=lastName]').val());
                data.append('email', form.find('[name=email]').val());
                data.append('phoneNumber', form.find('[name=phoneNumber]').val());
                data.append('city', form.find('[name=city]').val());
                data.append('description', form.find('[name=description]').val());
                data.append('resumeFile', file);

                console.log(data);

                if (countError == 0) {
                    $.ajax({
                        url: mainUrl+'/vacay-pals/submit',
                        type: 'POST',
                        data: data,
                        dataType: 'JSON',
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {

                        },
                        success: function(response){
                            console.log(response.data);

                            initSuccessFormModal(response.data);

                            resetForm('#pal-form');
                        },
                        error: function(error){
                            console.log(error);
                        }
                    });
                }

            });




        });
    </script>
@endsection


