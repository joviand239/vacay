@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="about">

        <div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">

                <div class="inline-wrapper">

                    <h1 class="title">ABOUT US</h1>


                    <ul class="anchor-list">
                        <li><a class="anchor" href="#a-message-from-vacay">A message from VACAY!</a></li>
                        <li><a class="anchor" href="#vision-and-mission">Vision & Mission</a></li>
                        <li><a class="anchor" href="#our-values">Our Values</a></li>
                        <li><a class="anchor" href="#our-local-pals">Our Local Pals</a></li>
                        <li><a class="anchor" href="#our-services">Our Services</a></li>
                    </ul>

                </div>


            </div>
        </div>


        <div class="full-section">

            <div id="a-message-from-vacay" class="row no-gutters">
                <div class="col-md-6">
                    <img src="{!! getImageUrlSize(@$page->messageSectionImage[0], 'full') !!}" alt="About Image Featured">
                </div>

                <div class="col-md-6">
                    <div class="center-wrapper">
                        <div class="info-wrapper">
                            <h1 class="default-title">{!! @$page->messageSectionTitle !!}</h1>
                            <p class="italic">{!! @$page->messageSectionSubtitle !!}</p>
                            <div class="content-section">
                                {!! @$page->messageSectionDescription !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="vision-and-mission" class="row no-gutters">
                <div class="col-md-6 order-md-6 order-1">
                    <img src="{!! getImageUrlSize(@$page->visionAndMissionSectionImage[0], 'full') !!}" alt="About Image Featured">
                </div>

                <div class="col-md-6 order-md-1 order-6">
                    <div class="center-wrapper">
                        <div class="info-wrapper">
                            <h1 class="default-title">{!! @$page->visionAndMissionSectionTitle !!}</h1>
                            <p class="italic">{!! @$page->visionAndMissionSectionSubtitle !!}</p>
                            <div class="content-section">
                                {!! @$page->visionAndMissionSectionDescription !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div id="our-values" class="row no-gutters">
                <div class="col-md-6">
                    <img src="{!! getImageUrlSize(@$page->valueSectionImage[0], 'full') !!}" alt="About Image Featured">
                </div>

                <div class="col-md-6">
                    <div class="center-wrapper">
                        <div class="info-wrapper">
                            <h1 class="default-title">{!! @$page->valueSectionTitle !!}</h1>
                            <p class="italic">{!! @$page->valueSectionSubtitle !!}</p>
                            <div class="content-section">

                                <table class="table">
                                    @foreach(@$page->valueList as $item)
                                        <tr>
                                            <td class="title">{!! @$item->value !!}</td>
                                            <td>:</td>
                                            <td>{!! @$item->description !!}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div id="our-local-pals" class="row no-gutters">
                <div class="col-md-6 order-md-6 order-1">
                    <img src="{!! getImageUrlSize(@$page->palsSectionImage[0], 'full') !!}" alt="About Image Featured">
                </div>

                <div class="col-md-6 order-md-1 order-6">
                    <div class="center-wrapper">
                        <div class="info-wrapper">
                            <h1 class="default-title">{!! @$page->palsSectionTitle !!}</h1>
                            <p class="italic">{!! @$page->palsSectionSubtitle !!}</p>
                            <div class="content-section">
                                {!! @$page->palsSectionDescription !!}

                                <table class="table">
                                    @foreach(@$page->palsList as $item)
                                        <tr>
                                            <td class="title">{!! @$item->title !!}</td>
                                            <td>:</td>
                                            <td>{!! @$item->detail !!}</td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="our-services" class="default-section text-center">
            <div class="container">
                <h1 class="default-subtitle">OUR SERVICES</h1>
                <h2 class="default-title">LET’S GO ON VACAY</h2>
                <p class="default-summary mb-50">
                    We bestow authentic connection with stories with the locals through personalised
                    travelling. We connect travellers with our native guides who know their localities
                    more than anyone else.
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
                                <h3 class="title">THEMATIC Experience</h3>

                                <a href="#" class="btn-text">
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
                                <h3 class="title">Itineraries-GRAPHICS</h3>

                                <a href="#" class="btn-text">
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



    </section>


@endsection

