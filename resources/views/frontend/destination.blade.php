@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="destination">

        <div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">
                <div class="inline-wrapper">
                    <h1 class="title">DESTINATION</h1>
                </div>
            </div>
        </div>



        <div class="default-section">
            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-12">
                        <div class="list-wrapper">

                            <a href="#" class="inline-link active">
                                <span>All</span>
                                <span>26</span>
                            </a>

                            <ul id="main-collapse" class="main-list">
                                <li class="item">
                                    <a href="#collapse-asia" class="inline-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse-asia">
                                        <span>Asia</span>
                                        <span class="show-icon"></span>
                                    </a>
                                    <ul id="collapse-asia" class="sub-list collapse" data-parent="#main-collapse">
                                        <li>
                                            <a href="#">
                                                Indoensia
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Japan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Korea
                                            </a>
                                        </li>
                                    </ul>
                                </li>



                                <li class="item">
                                    <a href="#collapse-america" class="inline-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse-america">
                                        <span>America</span>
                                        <span class="show-icon"></span>
                                    </a>
                                    <ul id="collapse-america" class="sub-list collapse" data-parent="#main-collapse">
                                        <li>
                                            <a href="#">
                                                Canada
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Mexio
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                USA
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="item">
                                    <a href="#collapse-australia" class="inline-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse-australia">
                                        <span>Australia</span>
                                        <span class="show-icon"></span>
                                    </a>
                                    <ul id="collapse-australia" class="sub-list collapse" data-parent="#main-collapse">
                                        <li>
                                            <a href="#">
                                                Australia
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Selandia Baru
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="item">
                                    <a href="#collapse-europe" class="inline-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse-europe">
                                        <span>Europe</span>
                                        <span class="show-icon"></span>
                                    </a>
                                    <ul id="collapse-europe" class="sub-list collapse" data-parent="#main-collapse">
                                        <li>
                                            <a href="#">
                                                Swedia
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Swiss
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="item">
                                    <a href="#collapse-afrika" class="inline-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse-afrika">
                                        <span>Afrika</span>
                                        <span class="show-icon"></span>
                                    </a>
                                    <ul id="collapse-afrika" class="sub-list collapse" data-parent="#main-collapse">
                                        <li>
                                            <a href="#">
                                                Ghana
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Mesir
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Nigeria
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8 col-12">

                        <h1 class="default-title">All Journeys</h1>



                        <div class="row">
                            @for($i = 0 ; $i < 8 ; $i++)
                                <div class="col-md-6">
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
                            @endfor
                        </div>

                    </div>

                </div>

            </div>
        </div>



    </section>


@endsection

