@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="home">
        <div class="banner" style="background: url({!! getImageUrlSize(@$page->bannerImage[0], 'full') !!})">
            <div class="container">
                <h1 class="title">{!! @$page->bannerTitle !!}</h1>
                <h2 class="subtitle">{!! @$page->bannerSubtitle !!}</h2>
            </div>
        </div>


        <div class="container search-section">
            <form action="{!! route('select-destination') !!}" method="POST">
                <div class="search-wrapper">
                    <span class="text">{!! @$page->searchText !!}</span>


                    <div class="adjust-wrapper">
                        <div class="select-wrapper">
                            <div class="item">
                                <select class="custom-select" name="countryId">
                                    <option value="" disabled selected>Where do you want to go?</option>
                                    @foreach(GetCountryList() as $key => $value)
                                        <option value="{!! @$key !!}">{!! @$value !!}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn simple-btn"><i class="fa fa-angle-right"></i></button>
                    </div>


                </div>
            </form>
        </div>

        <div class="default-section">
            <div class="container">
                <h1 class="default-subtitle">{!! @$page->serviceSectionTitle !!}</h1>
                <h2 class="default-title">{!! @$page->serviceSectionSubtitle !!}</h2>
                <p class="default-summary mb-50">
                    {!! @$page->serviceSectionDescription !!}
                </p>



                <div class="row">
                    <div class="col-md-6 col-12">

                        <div class="default-card service-card">


                            <div class="image-wrapper">
                                <img class="image" src="{!! url('/') !!}/assets/frontend/images/personal-character-preferences-image.png" alt="Featured Product Image">
                                <div class="hoverlay">
                                    <img class="icon" src="{!! url('/') !!}/assets/frontend/images/personal-character-preferences-icon.png" alt="Featured Product Icon">
                                </div>

                            </div>


                            <div class="info-wrapper">
                                <h3 class="title">Vacay EXPERIENCE</h3>

                                <a href="{!! route('services') !!}#nav-experience" class="btn-text">
                                    <label>Explore More</label>
                                    <span class="btn simple-btn">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>



                        </div>

                    </div>

                    <div class="col-md-6 col-12">

                        <div class="default-card service-card">

                            <div class="image-wrapper">
                                <img class="image" src="{!! url('/') !!}/assets/frontend/images/itenary-graphic-image.png" alt="Featured Product Image">
                                <div class="hoverlay">
                                    <img class="icon" src="{!! url('/') !!}/assets/frontend/images/itenary-graphic-icon.png" alt="Featured Product Icon">
                                </div>

                            </div>

                            <div class="info-wrapper">
                                <h3 class="title">Vacay ESSENTIALS</h3>

                                <a href="{!! route('services') !!}#nav-essentials" class="btn-text">
                                    <label>Explore More</label>
                                    <span class="btn simple-btn">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <div class="video-section default-section" style="background: url({!! url('/') !!}/assets/frontend/images/video-bg.jpg)">
            <div class="container">

                <h1 class="default-subtitle white">{!! @$page->differentSectionTitle !!}</h1>
                <h2 class="default-title white">{!! @$page->differentSectionSubtitle !!}</h2>

                <p class="default-summary white mb-40">
                    {!! @$page->differentSectionDescription !!}
                </p>

                <div id="video-gallery">
                    <a href="{!! @$page->differentSectionVideoLink !!}" data-poster="{!! getImageUrlSize(@$page->differentSectionThumbImage[0], 'sm') !!}" >
                        <img class="video-image" src="{!! getImageUrlSize(@$page->differentSectionThumbImage[0], 'full') !!}">
                    </a>
                </div>


            </div>
        </div>

        <div class="default-section secondary pt-100">
            <div class="container">

                <div class="inline-button-wrapper">
                    <h1 class="default-title">{!! @$page->destinationSectionTitle !!}</h1>

                    <a href="{!! route('destinations', ['type' => \App\Util\Constant::SEARCH_TYPE_ALL]) !!}" class="btn-text">
                        <label>Check it All</label>
                        <span class="btn simple-btn">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
                <p class="default-summary mb-50">
                    {!! @$page->destinationSectionDescription !!}
                </p>



                <div class="row">
                    @foreach(getSettingAttribute('cities') as $item)
                        <div class="col-md-4 col-12">

                            <a href="{!! route('destination-detail', ['url' => @$item->url]) !!}" class="destination-card">
                                <div class="image-wrapper">

                                    <img src="{!! getImageUrlSize(@$item->featuredImage[0], 'full') !!}" alt="{!! @$item->name !!}">

                                </div>


                                <div class="text-wrapper">

                                    <img class="icon" src="{!! url('/') !!}/assets/frontend/images/general-tour-icon.png" alt="Featured Product Icon">

                                    <p class="name">{!! @$item->type !!} - {!! @$item->tagline !!}</p>

                                    <p class="country">{!! @$item->name !!} - {!! @$item->country->name !!}</p>

                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="default-section">
            <div class="container">

                <div class="inline-button-wrapper">
                    <h1 class="default-title">{!! @$page->howSectionTitle !!}</h1>

                    <a href="{!! route('how-it-works') !!}" class="btn-text">
                        <label>Discover How it works</label>
                        <span class="btn simple-btn">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>

                <p class="default-summary mb-50">
                    {!! @$page->destinationSectionDescription !!}
                </p>


                <div class="row">
                    @foreach(@$page->stepHowItWorks as $step)
                        <div class="col-md-4 col-12">

                            <div class="default-card">
                                <div class="image-wrapper">
                                    <img class="image" src="{!! getImageUrlSize(@$step->picture[0], 'full') !!}" alt="{!! @$step->title !!}">
                                </div>

                                <h3 class="title">{!! @$step->title !!}</h3>

                                <p class="summary">
                                    {!! @$step->detail !!}
                                </p>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="default-section third">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-12 mb-xs-30">

                        <h1 class="default-title mb-30">{!! @$page->vacayPalsSectionTitle !!}</h1>

                        <div class="info-guide-slider">
                            @foreach(getSettingAttribute('vacayPals') as $key => $item)
                                <div class="info-guide-section">

                                    <h3 class="name">{!! @$item->name !!}</h3>
                                    <h5 class="location mb-20">{!! @$item->city->name !!} - {!! @$item->city->country->name !!}</h5>

                                    <p class="summary mb-30">
                                        {!! @$item->description !!}
                                    </p>

                                    <a href="{!! route('vacaypals-detail', ['url' => @$item->url]) !!}" class="btn main-btn">EXPLORE MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            @endforeach
                        </div>
                    </div>



                    <div class="col-md-6 col-12">


                        <div id="gallery-wrapper" class="pals-gallery">
                            <div class="gallery">
                                @foreach(getSettingAttribute('vacayPals') as $key => $item)
                                    <div>
                                        <div class="img-wrapper">
                                            <img src="{!! getImageUrlSize(@$item->featuredImage[0], 'full') !!}" alt="{!! @$item->name !!}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="total-slider">

                                <p><span class="index">1</span> / <span class="total">{!! count(getSettingAttribute('vacayPals')) !!}</span></p>

                            </div>
                        </div>



                    </div>



                </div>

            </div>

        </div>

        <div class="testimonial-section default-section text-center">

            <div class="container">

                <h1 class="default-title mb-30">TESTIMONIALS</h1>



                <ul id="testimonial-slider">
                    @foreach(getFeaturedTestimonials() as $item)
                        <li class="item">
                            <p class="testi">
                                {!! @$item->details !!}
                            </p>

                            <p class="owner">
                                {!! @$item->sourceName !!} - {!! @$item->designation !!}
                            </p>
                        </li>
                    @endforeach
                </ul>


            </div>

        </div>



    </section>


@endsection

