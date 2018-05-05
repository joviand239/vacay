@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="vacaypals">



        <div class="default-section">
            <div class="container">

                <div class="row mb-50">

                    <div class="col-md-4 col-12">
                        <img src="{!! url('/') !!}/assets/frontend/images/pals-image.jpg" alt="Pals Featured Image">
                    </div>

                    <div class="col-md-8 col-12">
                        <div class="info-guide-section">

                            <h3 class="name">Jennifer Lawrence</h3>
                            <h5 class="location mb-20">Sydney - Australia</h5>

                            <h1 class="default-title">Lovable . Energetic . Love to Explore </h1>

                            <p class="summary mb-30">
                                We bestow authentic connection with stories with the locals through personalised travelling. We connect travellers with our native guides who know their localities more than anyone else.
                                We bestow authentic connection with stories with the locals through personalised travelling. We connect travellers with our native guides who know their localities more than anyone else.
                                We bestow authentic connection with stories with the locals through personalised travelling. We connect travellers with our native guides who know their localities more than anyone else.
                            </p>



                            <h6>Let’s keep in touch!</h6>

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


                        </div>
                    </div>


                </div>



                <h1 class="default-title">Reviews</h1>


                <div class="review-wrapper">

                    @for($i = 1 ; $i < 6 ; $i++)
                        <div class="box">
                            <div class="reviewer">
                                <img class="pic" src="{!! url('/') !!}/assets/frontend/images/review-image.jpg" alt="Reviewer Picture">
                                <div class="info">
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-heart"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i>
                                        </li>
                                    </ul>
                                    <p class="name">Karla</p>
                                    <p class="date">August 2018</p>

                                </div>
                            </div>
                            <div class="review-content">
                                Gisel is the best! we had such a great experience and could not have asked for better service in such a beautiful place. A wonderful place to explore and guide by the expert, a very well spent holiday i ever had! thankyou VACAY for give us this different experience and a very nice friends for life, see you in the next holiday! XOXO ;*
                            </div>
                        </div>
                    @endfor


                </div>
            </div>
        </div>



    </section>


@endsection

