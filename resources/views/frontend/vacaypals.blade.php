@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="about">

        <div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">

                <div class="inline-wrapper">

                    <h1 class="title">ABOUT US</h1>

                </div>


            </div>
        </div>


        <div class="default-section">

            <div class="container">
                
            </div>

        </div>



    </section>


@endsection

