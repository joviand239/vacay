@extends('frontend.layouts.frontend')

@section('meta_title', $name)

@section('meta_description', $name)

@section('content')

    <section id="destination">

        {{--<div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">
                <div class="inline-wrapper">
                    <h1 class="title">DESTINATION</h1>
                </div>
            </div>
        </div>--}}



        <div class="default-section">
            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-12">
                        <div class="list-wrapper">

                            {{--<div class="inline-link active">
                                <span>{!! getReadableDestination(@$name) !!}</span>
                                <span>{!! count(@$list) !!}</span>
                            </div>--}}

                            <ul id="main-collapse" class="main-list">

                                @foreach(@$continents as $key => $continent)

                                    <li class="item">
                                        <a href="#collapse-{!! @$continent->name !!}" class="inline-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse-{!! @$continent->name !!}">
                                            <span>
                                                {!! @$continent->name !!}
                                            </span>
                                            <span class="show-icon"></span>
                                        </a>
                                        @if(count(@$continent->countries))
                                            <ul id="collapse-{!! @$continent->name !!}" class="sub-list collapse" data-parent="#main-collapse">
                                                @foreach(@$continent->countries as $country)
                                                    <li>
                                                        <a href="{!! route('destinations', ['type' => \App\Util\Constant::SEARCH_TYPE_COUNTRY, 'url' => @$country->url]) !!}">
                                                            {!! @$country->name !!}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8 col-12">

                        <h1 class="default-title">Destinations</h1>



                        <div class="row">
                            @foreach(@$list as $item)
                                <div class="col-md-6">
                                    <a href="{!! route('destination-detail', ['url' => @$item->url]) !!}" class="destination-card">
                                        <div class="image-wrapper">

                                            <img src="{!! getImageUrlSize(imageStringToArray(@$item->featuredImage)[0], 'full') !!}" alt="{!! @$item->name !!}">
                                        </div>


                                        <div class="text-wrapper">

                                            <img class="icon" src="{!! url('/') !!}/assets/frontend/images/general-tour-icon.png" alt="Featured Product Icon">
                                            <p class="name">{!! @$item->type !!} - {!! @$item->tagline !!}</p>

                                            <p class="country">{!! @$item->cityName !!} - {!! @$item->countryName !!}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>

            </div>
        </div>



    </section>


@endsection

