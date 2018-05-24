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

                            <h3 class="name">{!! @$page->name !!}</h3>
                            <h5 class="location mb-20">{!! @$page->city->name !!} - {!! @$page->city->country->name !!}</h5>

                            <h1 class="default-title">{!! @$page->tagline !!} </h1>

                            <p class="summary mb-30">
                                {!! @$page->description !!}
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

                    @foreach(@$page->reviews as $review)
                        <div class="box">
                            <div class="reviewer">
                                <img class="pic" src="{!! getImageUrlSize(@$review->profilePic[0], 'full') !!}" alt="{!! @$review->name !!}">
                                <div class="info">
                                    <ul class="rating">
                                        @for($i = 1 ; $i <= @$review->rating ; $i++)
                                            <li>
                                                <i class="fa fa-heart"></i>
                                            </li>
                                        @endfor
                                    </ul>
                                    <p class="name">{!! @$review->name !!}</p>
                                    <p class="date">{!! getDateOnly(@$review->reviewDate) !!}</p>

                                </div>
                            </div>
                            <div class="review-content">
                                {!! @$review->review !!}
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>



    </section>


@endsection

