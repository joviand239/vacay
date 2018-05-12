@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="how">


        @include('frontend.section.default-banner')


        <div class="default-section">

            <div class="container">


                @foreach(@$page->stepList as $key => $item)
                    <div class="row step-wrapper">

                        @if(@$key%2 == 1)
                        <div class="col-md-3">
                            <img class="step-icon" src="{!! getImageUrlSize(@$item->image[0], 'full') !!}" alt="{!! @$item->title !!}">
                        </div>

                        <div class="col-md-9">
                            <label class="num-label">0{!! @$key+1 !!}</label>
                            <h3 class="step-name">{!! @$item->title !!}</h3>
                            <div class="step-detail">
                                <p>
                                    {!! @$item->description !!}
                                </p>
                            </div>
                        </div>
                        @else
                            <div class="col-md-3 order-md-9 order-3">
                                <img class="step-icon" src="{!! getImageUrlSize(@$item->image[0], 'full') !!}" alt="{!! @$item->title !!}">
                            </div>

                            <div class="col-md-9 order-md-3 order-9">
                                <label class="num-label">0{!! @$key+1 !!}</label>
                                <h3 class="step-name">{!! @$item->title !!}</h3>
                                <div class="step-detail">
                                    <p>
                                        {!! @$item->description !!}
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach


            </div>




        </div>



    </section>


@endsection

