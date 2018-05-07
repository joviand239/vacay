@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="vacaypals">

        <div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">

                <div class="inline-wrapper">

                    <h1 class="title">{!! @$page->bannerTitle !!}</h1>

                </div>


            </div>
        </div>


        <div class="default-section">

            <div class="container">

                <h1 class="default-title">{!! @$page->title !!}</h1>

                <p class="default-summary mb-50">
                    {!! @$page->description !!}
                </p>


                <div class="row">

                    @for($i = 1 ; $i < 10 ; $i++)
                        <div class="col-md-4 col-12 mb-30">
                            <div class="default-card pals-card">
                                <div class="image-wrapper">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/personal-character-preferences-image.png" alt="Featured Product Image">

                                </div>

                                <div class="info-wrapper">
                                    <h3 class="title">Gisela Angelica</h3>
                                    <p class="subtitle">Sydney - Australia</p>

                                    <a href="{!! route('vacaypals-detail') !!}" class="btn-text">
                                        <label>Explore More</label>
                                        <span class="btn simple-btn">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endfor


                </div>

            </div>

        </div>



    </section>


@endsection

