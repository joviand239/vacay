@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="home">
        <div class="banner" style="background: url({!! url('/') !!}/assets/frontend/images/home-banner.jpg)">
            <div class="container">
                <h1 class="title">NO MORE Old-School Vacation!</h1>
                <h2 class="subtitle">Traveling with stories for a lifetime history</h2>
            </div>
        </div>


        <div class="blue-line">
            <div class="container search-section">
                <div class="search-wrapper">
                    <span class="text">Let’s get started on VACAY! : </span>


                    <div class="select-wrapper">
                        <div class="item">
                            <select class="custom-select" name="location">
                                <option value="" disabled selected>Where do you want to go?</option>
                                <optgroup label="Asia">
                                    <option>Japan</option>
                                    <option>Indonesia</option>
                                </optgroup>
                                <optgroup label="Australia">
                                    <option>Melbourne</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="item">
                            <select class="custom-select" name="location">
                                <option value="" disabled selected>No. of Travelers</option>
                                @for($i = 1 ; $i <= 10 ; $i++)
                                    <option value="{!! @$i !!}">{!! @$i !!}</option>
                                @endfor
                            </select>
                        </div>
                    </div>



                    <button type="submit" class="btn simple-btn"><i class="fa fa-angle-right"></i></button>

                </div>
            </div>

            <div class="default-section">
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

            <div class="video-section default-section" style="background: url({!! url('/') !!}/assets/frontend/images/video-bg.jpg)">
                <div class="container">

                    <h1 class="default-subtitle white">WHAT DIFFERENTIATE VACAY!</h1>
                    <h2 class="default-title white">TREAT YOURSELF A STROLL INTO THE NATIVE!</h2>

                    <p class="default-summary white mb-40">
                        Travelling is about connecting to the places you are visiting and feel like the locals. With our
                        local knowledge and personalised local service, we are turning your travel bucket list into
                        reality. Travel to our 5 selected authentic destinations with our VACAY Pals and see them
                        from a local's perspective. Let’s go on VACAY! and make stories.
                    </p>

                    <img class="video-image" src="{!! url('/') !!}/assets/frontend/images/video-image.jpg">
                </div>
            </div>

            <div class="default-section secondary pt-100">
                <div class="container">

                    <div class="inline-button-wrapper">
                        <h1 class="default-title">OUR TOP DESTINATION</h1>

                        <a href="#" class="btn-text">
                            <label>Check it All</label>
                            <span class="btn simple-btn">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        </a>
                    </div>
                    <p class="default-summary mb-50">
                        We bestow authentic connection with stories with the locatls through personalised travelling, We connect travellers with our native guides who know their localities more than anyone else.
                    </p>



                    <div class="row">
                        <div class="col-md-4 col-12">

                            <div class="destination-card">
                                <div class="image-wrapper">

                                    <img src="{!! url('/') !!}/assets/frontend/images/destination-image-1.jpg" alt="Destination Image">

                                    <div class="image-hover">
                                        <img src="{!! url('/') !!}/assets/frontend/images/destination-hover-1.jpg" alt="Destination Hover">
                                    </div>

                                </div>


                                <div class="text-wrapper">

                                    <p class="place">Sydney</p>

                                    <p class="country">AUSTRALIA</p>

                                    <a href="#" class="link-caret">Explore more <i class="fa fa-angle-right"></i></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12">

                            <div class="destination-card">
                                <div class="image-wrapper">

                                    <img src="{!! url('/') !!}/assets/frontend/images/destination-image-2.jpg" alt="Destination Image">

                                    <div class="image-hover">
                                        <img src="{!! url('/') !!}/assets/frontend/images/destination-hover-1.jpg" alt="Destination Hover">
                                    </div>

                                </div>


                                <div class="text-wrapper">

                                    <p class="place">Tokyo</p>

                                    <p class="country">JAPAN</p>

                                    <a href="#" class="link-caret">Explore more <i class="fa fa-angle-right"></i></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12">

                            <div class="destination-card">
                                <div class="image-wrapper">

                                    <img src="{!! url('/') !!}/assets/frontend/images/destination-image-3.jpg" alt="Destination Image">

                                    <div class="image-hover">
                                        <img src="{!! url('/') !!}/assets/frontend/images/destination-hover-1.jpg" alt="Destination Hover">
                                    </div>

                                </div>


                                <div class="text-wrapper">

                                    <p class="place">Bali</p>

                                    <p class="country">INDONESIA</p>

                                    <a href="#" class="link-caret">Explore more <i class="fa fa-angle-right"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="default-section">
                <div class="container">

                    <div class="inline-button-wrapper">
                        <h1 class="default-title">HOW IT WORKS</h1>

                        <a href="#" class="btn-text">
                            <label>Discover How it works</label>
                            <span class="btn simple-btn">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        </a>
                    </div>

                    <p class="default-summary mb-50">
                        Treat yourself a stroll into the native and enjoy how the locals live!
                    </p>


                    <div class="row">
                        <div class="col-md-4 col-12">

                            <div class="default-card">
                                <div class="image-wrapper">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/book-illustration.png" alt="How it Works Illustration">
                                </div>

                                <h3 class="title">SEARCH, SIGN UP & SEAL!</h3>

                                <p class="summary">
                                    Explore the local destination you are interested in. Click “Book Now” and fill
                                    in the booking form with your details and your chosen destination.
                                </p>
                            </div>

                        </div>

                        <div class="col-md-4 col-12">

                            <div class="default-card">
                                <div class="image-wrapper">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/arange-illustration.png" alt="How it Works Illustration">
                                </div>

                                <h3 class="title">SIT TIGHT!</h3>

                                <p class="summary">
                                    Once your booking confirmed and payment completed, our team will get in
                                    touch with you to arrange your VACAY! Afterwards, your VACAY! Pal will
                                    get in touch with you.
                                </p>
                            </div>

                        </div>

                        <div class="col-md-4 col-12">

                            <div class="default-card">
                                <div class="image-wrapper">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/experience-illustration.png" alt="How it Works Illustration">
                                </div>

                                <h3 class="title">SET TO GO!</h3>

                                <p class="summary">
                                    Let’s go on VACAY! and make stories. Get connected with the locals and feel like
                                    one.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="default-section third">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 col-12">

                            <h1 class="default-title mb-30">MEET OUR LOCAL GUIDE</h1>

                            <div class="info-guide-slider">
                                @for($i = 1 ; $i <= 5 ; $i++)
                                    <div class="info-guide-section">

                                        <h3 class="name">Jennifer Lawrence {!! @$i !!}</h3>
                                        <h5 class="location mb-20">Sydney - Australia</h5>

                                        <p class="summary mb-30">
                                            Driven by a passion for the outdoors, 'Active Adventurers' want to push themselves physically and mentally while exploring the natural world with a well-rounded multi-sport experience. Open-minded, eager, and personable, 'Cultural Travellers' are fueled by their passion for discovery of people and places.
                                        </p>
                                    </div>
                                @endfor
                            </div>

                            <h6>Social Media</h6>

                            <ul class="socmed-wrapper list-unstyled mb-20">
                                <li class="item">
                                    <a class="link light" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a class="link light" href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a class="link light" href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a class="link light" href="#">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>

                            <a href="#" class="btn main-btn">SEE ALL LOCALS <i class="fa fa-angle-right"></i></a>



                        </div>



                        <div class="col-md-6 col-12">


                            <div id="gallery-wrapper" class="pals-gallery">
                                <div class="gallery">
                                    @for($i = 0 ; $i < 5 ; $i++)
                                        <div>
                                            <div class="img-wrapper">
                                                <img src="{!! url('/') !!}/assets/frontend/images/local-guide-image.jpg">
                                            </div>
                                        </div>
                                    @endfor
                                </div>

                                <div class="total-slider">

                                    <p><span class="index">1</span> / <span class="total">5</span></p>

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
        </div>



    </section>


@endsection

