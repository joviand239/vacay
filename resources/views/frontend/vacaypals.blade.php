@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="vacaypals">

        {{--@include('frontend.section.default-banner')--}}


        <div class="default-section">

            <div class="container">

                <h1 class="default-title">{!! @$page->title !!}</h1>

                <p class="default-summary mb-50">
                    {!! @$page->description !!}
                </p>


                <div class="row">

                    @foreach(@$list as $item)
                        <div class="col-md-4 col-12 mb-30">
                            <div class="default-card pals-card">
                                <div class="image-wrapper">
                                    <img class="image" src="{!! getImageUrlSizeForPicture(@$item->featuredImage[0], 'full') !!}" alt="{!! @$item->name !!}">

                                </div>

                                <div class="info-wrapper">
                                    <h3 class="title">{!! @$item->name !!}</h3>
                                    <p class="subtitle">{!! @$item->city->name !!} - {!! @$item->city->country->name !!}</p>

                                    <a href="{!! route('vacaypals-detail', ['url' => @$item->url]) !!}" class="btn-text">
                                        <label>Explore More</label>
                                        <span class="btn simple-btn">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>

        </div>



    </section>


@endsection

