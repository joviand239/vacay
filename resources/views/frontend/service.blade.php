@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="service">


        @include('frontend.section.default-banner')



        <div class="default-section">
            <div class="container">
                <nav id="service-tab">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-experience-tab" data-toggle="tab" href="#nav-experience" role="tab" aria-controls="nav-experience" aria-selected="true">
                            <img class="icon" src="{!! getImageUrlSize(@$experience->logo[0], 'full') !!}" alt="{!! @$experience->tabTitle !!}">
                            <img class="iconblue" src="{!! getImageUrlSize(@$experience->logoHover[0], 'full') !!}" alt="{!! @$experience->tabTitle !!}">


                            <h3>{!! @$experience->tabTitle !!}</h3>
                        </a>

                        <a class="nav-item nav-link" id="nav-essentials-tab" data-toggle="tab" href="#nav-essentials" role="tab" aria-controls="nav-essentials" aria-selected="false">
                            <img class="icon" src="{!! getImageUrlSize(@$essentials->logo[0], 'full') !!}" alt="{!! @$essentials->tabTitle !!}">
                            <img class="iconblue" src="{!! getImageUrlSize(@$essentials->logoHover[0], 'full') !!}" alt="{!! @$essentials->tabTitle !!}">
                            <h3>{!! @$essentials->tabTitle !!}</h3>
                        </a>
                    </div>
                </nav>
            </div>

        </div>




        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-experience" role="tabpanel" aria-labelledby="nav-experience-tab">

                <div class="default-section">
                    <div class="container">

                        <h1 class="default-title">{!! @$experience->title !!}</h1>

                        <p class="default-summary">
                            {!! @$experience->description !!}
                        </p>

                    </div>
                </div>

                <div class="default-section secondary">

                    <div class="container">

                        <h1 class="default-title mb-30">What to get</h1>


                        <div class="row">
                            @foreach(@$categories as $item)
                                <div class="col-md-6 col-12">
                                    <div class="media gift-card">
                                        <img class="icon" src="{!! getImageUrlSize(@$item->icon[0], 'full') !!}" alt="{!! @$item->name !!}">
                                        <div class="media-body">
                                            <h5 class="mt-0">{!! @$item->name !!}</h5>
                                            <p>
                                                {!! @$item->summary !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="default-section">
                    <div class="container">

                        <h1 class="default-title mb-30">Inclusions & Exclusions</h1>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <ul class="icon-list inclusion">
                                    @foreach(@$experience->inclusionList as $item)
                                        <li>{!! @$item->textName !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-6 col-12">
                                <ul class="icon-list exclusion">
                                    @foreach(@$experience->exclusionList as $item)
                                        <li>{!! @$item->textName !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="default-section with-bg" style="background: url({!! url('/') !!}/assets/frontend/images/experience-bg.jpg)">
                    <div class="container">
                        <h1 class="default-title white">{!! @$experience->experienceTitle !!}</h1>
                        <p class="default-summary white">
                            {!! @$experience->experienceDescription !!}
                        </p>


                        <div class="experience-testimoni">

                            <blockquote>
                                <h3 class="detail">
                                    {!! @$experience->experienceQuote !!}
                                </h3>
                            </blockquote>

                            <p class="author">- {!! @$experience->experienceAuthor !!}</p>


                        </div>


                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-essentials" role="tabpanel" aria-labelledby="nav-essentials-tab">
                <div class="default-section">
                    <div class="container">

                        <h1 class="default-title">{!! @$essentials->title !!}</h1>

                        <p class="default-summary">
                            {!! @$essentials->description !!}
                        </p>

                    </div>
                </div>

                <div class="default-section secondary">

                    <div class="container">

                        <h1 class="default-title mb-30">What will you get</h1>


                        @foreach(@$essentials->serviceList as $item)
                            <div class="media gift-card">
                                <img class="icon" src="{!!getImageUrlSize( @$item->icon[0], 'full') !!}" alt="{!! @$item->title !!}">
                                <div class="media-body">
                                    <h5 class="mt-0">{!! @$item->title !!}</h5>
                                    <p>
                                        {!! @$item->description !!}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="testimonial-section default-section">

                    <div class="container">

                        <h1 class="default-title mb-30">EXPERIENCE</h1>



                        <ul class="testimonial-slider">
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

            </div>
        </div>








        <div class="cta-section" style="background: url({!! url('/') !!}/assets/frontend/images/cta-bg.jpg)">
            <div class="container">

                <img class="icon" src="{!! url('/') !!}/assets/frontend/images/icon-plane.png" alt="CTA Icon">

                <h2>So, what are you waiting for? go get yours now!</h2>

                <div class="btn-wrapper">

                    <a href="{!! route('vacaypals') !!}" class="btn main-btn white">SEE OUR LOCALS <i class="fa fa-angle-right"></i></a>

                    <a href="{!! route('contact') !!}" class="btn main-btn">CONACT USS! <i class="fa fa-angle-right"></i></a>

                </div>

            </div>


        </div>



    </section>


@endsection



@section('jsCustom')
    <script>

        $(document).ready(function () {


            var testimonialSlider = $(".testimonial-slider").lightSlider({
                item: 1,
                loop: true,
                adaptiveHeight: true,
                auto: true,
                pause: 5000,
                controls: false,
            });


            var hash = window.location.hash;

            hash && $('a[href="' + hash + '"]').tab('show');

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                e.preventDefault();

                window.location.hash = this.hash;

                var target = $(e.target).attr("href"); // activated tab

                if (target == '#nav-essentials') {
                    testimonialSlider.destroy();

                    testimonialSlider = $(".testimonial-slider").lightSlider({
                        item: 1,
                        loop: true,
                        adaptiveHeight: true,
                        auto: true,
                        pause: 5000,
                        controls: false,
                    });
                }

            })


        });




    </script>
@endsection

