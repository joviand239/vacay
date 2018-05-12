@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="terms">

        @include('frontend.section.default-banner')

        <div class="default-section normal">

            <div class="container">


                <div class="default-content-wrapper">
                    {!! @$page->description !!}
                </div>


                <p>
                    {!! @$page->agreementText !!}
                </p>

            </div>

        </div>



    </section>


@endsection

