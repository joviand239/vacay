@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="service">

        <div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">

                <div class="inline-wrapper">

                    <h1 class="title">OUR SERVICES</h1>


                    {{--<ul class="anchor-list">
                        <li><a class="anchor" href="#a-message-from-vacay">A message from VACAY!</a></li>
                        <li><a class="anchor" href="#vision-and-mission">Vision & Mission</a></li>
                        <li><a class="anchor" href="#our-values">Our Values</a></li>
                        <li><a class="anchor" href="#our-local-pals">Our Local Pals</a></li>
                        <li><a class="anchor" href="#our-services">Our Services</a></li>
                    </ul>--}}

                </div>


            </div>
        </div>



    </section>


@endsection

