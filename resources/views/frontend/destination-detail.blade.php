@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="destination">

        <div class="default-banner" style="background: url({!! getImageUrlSize(@$page->bannerImage[0], 'full') !!})">
            <div class="container">
                <div class="inline-wrapper">
                    <h1 class="title">{!! @$page->bannerTitle !!}</h1>
                </div>
            </div>
        </div>



        <div class="default-section">
            <div class="container">

                <h1 class="default-title">About {!! @$page->name !!}</h1>

                <p class="default-summary mb-50">
                    {!! @$page->description !!}
                </p>


                <h1 class="default-title mb-30">Categories</h1>


                <div class="row mb-50">

                    @foreach(@$page->categories as $category)
                        <div class="col-md-2 col-6 mb-30">
                            <div class="category-box">
                                <img class="icon" src="{!! getImageUrlSize(@$category->category->icon[0], 'full') !!}" alt="{!! @$category->category->name !!}">
                                <h3 class="name">{!! @$category->category->name !!}</h3>


                                <div class="hoverlay">
                                    <a class="btn main-btn white btn-quick-view" data-id="{!! @$category->id !!}">QUICK VIEW <i class="fa fa-angle-right"></i></a>

                                    <a href="{!! route('booking', ['url' => @$page->url, 'categoryData' => @$category->id]) !!}" class="btn main-btn white">BOOK NOW <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <h1 class="default-title mb-30">Gallery</h1>

                <ul class="photo-slider">
                    @foreach(@$page->gallery as $item)
                        <li data-thumb="{!! getImageUrlSize(@$item, 'sm') !!}" data-src="{!! getImageUrlSize(@$item, 'full') !!}">
                            <img src="{!! getImageUrlSize(@$item, 'full') !!}">
                        </li>
                    @endforeach
                </ul>


            </div>
        </div>

        <div class="testimonial-section default-section">

            <div class="container">

                <h1 class="default-title mb-30">Experience</h1>



                <ul id="testimonial-slider">
                    @foreach(@$page->testimonials as $item)
                        <li class="item">
                            <p class="testi">
                                {!! @$item->details !!}
                            </p>

                            <p class="owner">
                                {!! @$item->name !!} - {!! @$item->designation !!}
                            </p>
                        </li>
                    @endforeach
                </ul>


            </div>

        </div>


        @if(@$page->hasIteneraryGraphics == \App\Util\Constant::YES)
            <div class="default-section with-bg" style="background: url({!! getImageUrlSize(@$page->itenerarySectionBackground[0], 'full') !!})">
                <div class="container">

                    <div class="row">
                        <div class="col-md-7">

                            <h2 class="default-title white mb-30">{!! @$page->itenerarySectionTitle !!}</h2>

                            <p class="default-summary white mb-30">
                                {!! @$page->itenerarySectionDescription !!}
                            </p>

                            <a href="#" class="btn main-btn white mb-15">BUY NOW <i class="fa fa-angle-right"></i></a>

                        </div>
                    </div>


                </div>
            </div>
        @endif


        {{--<div class="default-section">

            <div class="container">

                <h2 class="default-title mb-30">Next Destination</h2>


                <div class="row">
                    <div class="col-md-4 col-12">
                        <a href="#" class="destination-card">
                            <div class="image-wrapper">

                                <img src="{!! url('/') !!}/assets/frontend/images/destination-image-1.jpg" alt="Destination Image">
                            </div>


                            <div class="text-wrapper">

                                <img class="icon" src="{!! url('/') !!}/assets/frontend/images/general-tour-icon.png" alt="Featured Product Icon">
                                <p class="name">General Tour - beautiful city in many lights</p>

                                <p class="country">Kyoto - JAPAN</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-12">
                        <a href="#" class="destination-card">
                            <div class="image-wrapper">

                                <img src="{!! url('/') !!}/assets/frontend/images/destination-image-1.jpg" alt="Destination Image">
                            </div>


                            <div class="text-wrapper">

                                <img class="icon" src="{!! url('/') !!}/assets/frontend/images/general-tour-icon.png" alt="Featured Product Icon">
                                <p class="name">General Tour - beautiful city in many lights</p>

                                <p class="country">Kyoto - JAPAN</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-12">
                        <a href="#" class="destination-card">
                            <div class="image-wrapper">

                                <img src="{!! url('/') !!}/assets/frontend/images/destination-image-1.jpg" alt="Destination Image">
                            </div>


                            <div class="text-wrapper">

                                <img class="icon" src="{!! url('/') !!}/assets/frontend/images/general-tour-icon.png" alt="Featured Product Icon">
                                <p class="name">General Tour - beautiful city in many lights</p>

                                <p class="country">Kyoto - JAPAN</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>--}}

    </section>
@endsection


@section('jsCustom')
    <script>
        var getCityCategoryDetailUrl = '{!! route('ajax.detailCityCategory') !!}'
    </script>

    <script>
        $(document).ready(function () {

            $('.btn-quick-view').click(function (e) {
                e.preventDefault();

                var cityCategoryId = $(this).attr('data-id');
                
                var data = {
                    cityCategoryId: cityCategoryId,
                };

                $.ajax({
                    url: getCityCategoryDetailUrl,
                    type: 'POST',
                    data: data,
                    dataType: 'JSON',
                    beforeSend: function() {

                    },
                    success: function(response){
                        populateQuickViewModal(response.data.data);
                    },
                    error: function(error){

                    }
                });
            })

            function populateQuickViewModal(data) {
                var wrapper = $('#quickViewModal');

                wrapper.find('#categoryName').html(data.category.name);
                if (data.description){
                    wrapper.find('#categoryDescription').html(data.description);
                }else {
                    wrapper.find('#categoryDescription').html(data.category.summary);
                }

                wrapper.find('#categoryPrice').html('USD '+parseInt(data.price));

                $('#quickViewModal').modal({
                    show: true,
                    backdrop: 'static'
                });
            }

        });
    </script>
@endsection

