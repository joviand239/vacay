@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="destination">

        <div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">
                <div class="inline-wrapper">
                    <h1 class="title">Sydney</h1>
                </div>
            </div>
        </div>



        <div class="default-section">
            <div class="container">

                <h1 class="default-title">About Sydney</h1>

                <p class="default-summary mb-50">
                    We bestow authentic connection with stories with the locals through personalised travelling, We connect travellers with our native guides who know their localities more than anyone else.We bestow authentic connection with stories with the locals through personalised travelling, We connect travellers with our native guides who know their localities more than anyone else.We bestow authentic connection with stories with the locals through personalised travelling, We connect travellers with our native guides who know their localities more than anyone else. We connect travellers with our native guides who know their localities more than anyone else.We bestow authentic connection with stories with the locals through personalised travelling, We connect travellers with our native guides who know their localities more than anyone else.
                    anyone else.We bestow authentic connection with stories with the locals through personalised travelling, We connect travellers with our native guides who know their localities more than anyone else.We bestow authentic connection with stories with the locals through personalised travelling, We connect travellers with our native guides who know their localities more than anyone else. We connect travellers with our native guides who know their localities more than anyone else.We bestow authentic connection with stories with the locals through personalised travelling, We connect travellers with our native guides who know their localities more than anyone else.
                </p>


                <h1 class="default-title mb-30">Categories</h1>


                <div class="row mb-50">

                    @for($i = 0 ; $i < 6 ; $i++)
                        <div class="col-md-2 mb-30">
                            <div class="category-box">
                                <img class="icon" src="{!! url('/') !!}/assets/frontend/images/category/natureexcapist-icon.png">
                                <h3 class="name">NATURE EXCAPIST</h3>
                            </div>
                        </div>

                        <div class="col-md-2 mb-30">
                            <div class="category-box">
                                <img class="icon" src="{!! url('/') !!}/assets/frontend/images/category/bushwalker-icon.png">
                                <h3 class="name">BUSHWALKER</h3>
                            </div>
                        </div>
                    @endfor

                </div>

                <h1 class="default-title mb-30">Gallery</h1>

                <ul class="photo-slider">
                    @for($i = 0 ; $i < 4 ; $i++)
                        <li data-thumb="{!! url('/') !!}/assets/frontend/images/gallery-image-1.jpg" data-src="{!! url('/') !!}/assets/frontend/images/gallery-image-1.jpg">
                            <img src="{!! url('/') !!}/assets/frontend/images/gallery-image-1.jpg">
                        </li>
                        <li data-thumb="{!! url('/') !!}/assets/frontend/images/gallery-image-2.jpg" data-src="{!! url('/') !!}/assets/frontend/images/gallery-image-2.jpg">
                            <img src="{!! url('/') !!}/assets/frontend/images/gallery-image-2.jpg">
                        </li>
                        <li data-thumb="{!! url('/') !!}/assets/frontend/images/gallery-image-3.jpg" data-src="{!! url('/') !!}/assets/frontend/images/gallery-image-3.jpg">
                            <img src="{!! url('/') !!}/assets/frontend/images/gallery-image-3.jpg">
                        </li>
                        <li data-thumb="{!! url('/') !!}/assets/frontend/images/gallery-image-4.jpg" data-src="{!! url('/') !!}/assets/frontend/images/gallery-image-4.jpg">
                            <img src="{!! url('/') !!}/assets/frontend/images/gallery-image-4.jpg">
                        </li>
                        <li data-thumb="{!! url('/') !!}/assets/frontend/images/gallery-image-5.jpg" data-src="{!! url('/') !!}/assets/frontend/images/gallery-image-5.jpg">
                            <img src="{!! url('/') !!}/assets/frontend/images/gallery-image-5.jpg">
                        </li>
                    @endfor
                </ul>


            </div>
        </div>

        <div class="testimonial-section default-section">

            <div class="container">

                <h1 class="default-title mb-30">Experience</h1>



                <ul id="testimonial-slider">
                    @for($i = 0 ; $i < 3 ; $i++)
                        <li class="item">
                            <p class="testi">
                                We've used your firm for several years, with tours in a number of international cities. We recently completed a trip that included 13 tours in 5 different countries. WITHOUT EXCEPTION, the tours were excellent and the guides thoroughly helpful, interesting, kind, and professional (and we tend to be picky). What a great record! Congratulations and keep up the good work
                            </p>

                            <p class="owner">
                                Chicco Jerikho - Solo Traveller
                            </p>
                        </li>
                    @endfor
                </ul>


            </div>

        </div>


        <div class="default-section with-bg" style="background: url({!! url('/') !!}/assets/frontend/images/essentials-banner.jpg)">
            <div class="container">

                <div class="row">
                    <div class="col-md-7">

                        <h2 class="default-title white mb-30">Go on your own VACAY!</h2>

                        <p class="default-summary white mb-30">
                            No need to waste your time to read and research all the travel tips out there. We make things easier for you with our VACAY ESSENTIAL, infographics and data visualizations contain interesting and useful facts, tips and bucket-list spots for your next Vacay! We bring to you light, useful information on planning your own travel.
                        </p>

                        <a href="#" class="btn main-btn white mb-15">BOOK NOW <i class="fa fa-angle-right"></i></a>

                    </div>
                </div>


            </div>
        </div>


        <div class="default-section">

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

        </div>



    </section>


@endsection

