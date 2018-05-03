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

                            <ul>
                                <li>
                                    <a href="#" class="inline-link">
                                        <span>Bali</span>
                                        <span>6</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="inline-link">
                                        <span>Bangkok</span>
                                        <span>2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="inline-link">
                                        <span>Jerman</span>
                                        <span>1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="inline-link">
                                        <span>Kyoto</span>
                                        <span>4</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="inline-link">
                                        <span>Macau</span>
                                        <span>2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="inline-link">
                                        <span>Melbourne</span>
                                        <span>3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="inline-link">
                                        <span>New York</span>
                                        <span>5</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="inline-link">
                                        <span>New Zealand</span>
                                        <span>7</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="inline-link">
                                        <span>Spain</span>
                                        <span>1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="inline-link">
                                        <span>Sydney</span>
                                        <span>2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8 col-12">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <h1 class="default-title">All Journeys</h1>
                            </div>

                            <div class="col-md-4 col-12">

                                <div class="form-group">
                                    <select class="form-control" name="productType">
                                        <option value="" selected>Type of Products</option>
                                        <option value="" selected>Itinene</option>
                                        <option value="" selected>Type of Products</option>
                                    </select>
                                </div>


                            </div>
                        </div>



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

