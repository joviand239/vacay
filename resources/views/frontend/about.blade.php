@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="about">

        <div class="default-banner" style="background: url({!! url('/') !!}/assets/frontend/images/default-banner.jpg)">
            <div class="container">

                <div class="inline-wrapper">

                    <h1 class="title">ABOUT US</h1>


                    <ul class="anchor-list">
                        <li><a class="anchor" href="#a-message-from-vacay">A message from VACAY!</a></li>
                        <li><a class="anchor" href="#vision-and-mission">Vision & Mission</a></li>
                        <li><a class="anchor" href="#our-values">Our Values</a></li>
                        <li><a class="anchor" href="#our-local-pals">Our Local Pals</a></li>
                        <li><a class="anchor" href="#our-services">Our Services</a></li>
                    </ul>

                </div>


            </div>
        </div>


        <div class="full-section">

            <div id="a-message-from-vacay" class="row no-gutters">
                <div class="col-md-6">
                    <img src="{!! url('/') !!}/assets/frontend/images/image-about-section-1.jpg" alt="About Image Featured">
                </div>

                <div class="col-md-6">
                    <div class="center-wrapper">
                        <div class="info-wrapper">
                            <h1 class="default-title">A MESSAGE FROM VACAY!</h1>
                            <p class="italic">VACAY! are travel connectors.</p>
                            <div class="content-section">
                                <p>
                                    <b>Be full-time professional, be full-time traveller!</b> We connect people through the shared passion for travelling. Reviving the good, traditional penpal days, VACAY! are taking travellers through indispensable insight and connection with the locals for unique experiences. Learning more about other countries and their lifestyles, and making friendships, we connect you with your local VACAY! Pals.
                                </p>
                                <p>
                                    <b>Share your travelling passion with us. VACAY!</b> was born as the hobbyhorse of the two co-founders who believe travelling will make our life worthwhile regardless how demanding our grown-up life is. Travelling flourish our values, things we are good at, and things we like to do in personal and professional life. We bestow the travellers an authentic connection with the locals and their abundant allures of native nature, culture, and adventure.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="vision-and-mission" class="row no-gutters">
                <div class="col-md-6 order-md-6 order-1">
                    <img src="{!! url('/') !!}/assets/frontend/images/image-about-section-2.jpg" alt="About Image Featured">
                </div>

                <div class="col-md-6 order-md-1 order-6">
                    <div class="center-wrapper">
                        <div class="info-wrapper">
                            <h1 class="default-title">VISION & MISSION</h1>
                            <p class="italic">VACAY! are travel connectors.</p>
                            <div class="content-section">
                                <p class="italic">Vision</p>
                                <p>
                                    VACAY! have a dream to be the ever-evolving leader in realising everyone’s personalised travelling bucket list. A bucket list should not only remain a story tale, but a lifetime history.
                                </p>
                                <p class="italic">Mission</p>
                                <p>
                                    VACAY! have a dream to be the ever-evolving leader in realising everyone’s personalised travelling bucket list. A bucket list should not only remain a story tale, but a lifetime history.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div id="our-values" class="row no-gutters">
                <div class="col-md-6">
                    <img src="{!! url('/') !!}/assets/frontend/images/image-about-section-3.jpg" alt="About Image Featured">
                </div>

                <div class="col-md-6">
                    <div class="center-wrapper">
                        <div class="info-wrapper">
                            <h1 class="default-title">OUR VALUES</h1>
                            <p class="italic">VACAY for everyone</p>
                            <div class="content-section">

                                <table class="table">
                                    <tr>
                                        <td class="title">Be Vibrant</td>
                                        <td>:</td>
                                        <td>Progressing always with innovation</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Be Accountable</td>
                                        <td>:</td>
                                        <td>Leading in what we do with professionalism</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Be Customer</td>
                                        <td>:</td>
                                        <td>Putting ourselves in customer shoes with care</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Be A-Team	</td>
                                        <td>:</td>
                                        <td>Team Working with shared passion and fun</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Be You</td>
                                        <td>:</td>
                                        <td>Staying unique with the real you</td>
                                    </tr>
                                </table>



                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div id="our-local-pals" class="row no-gutters">
                <div class="col-md-6 order-md-6 order-1">
                    <img src="{!! url('/') !!}/assets/frontend/images/image-about-section-4.jpg" alt="About Image Featured">
                </div>

                <div class="col-md-6 order-md-1 order-6">
                    <div class="center-wrapper">
                        <div class="info-wrapper">
                            <h1 class="default-title">OUR LOCAL PALS</h1>
                            <p class="italic">Join as VACAY! Pals</p>
                            <div class="content-section">
                                <p>
                                    Our VACAY! Pals® are our growing group of hand-picked local guides in the selected destinations in 5 countries around the world.
                                </p>

                                <table class="table">
                                    <tr>
                                        <td class="title">The Natives</td>
                                        <td>:</td>
                                        <td>Who are a big fan of their city to take travellers to the places they will call home</td>
                                    </tr>
                                    <tr>
                                        <td class="title">The Narrators</td>
                                        <td>:</td>
                                        <td>Who are really, really (really) love what you’re talking about</td>
                                    </tr>
                                    <tr>
                                        <td class="title">The Concierge</td>
                                        <td>:</td>
                                        <td>Who are exceptionally-resourceful caretaker and know the “bucket-list” spots better than anyone else. </td>
                                    </tr>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="our-services" class="default-section text-center">
            <div class="container">
                <h1 class="default-subtitle">OUR SERVICES</h1>
                <h2 class="default-title">LET’S GO ON VACAY</h2>
                <p class="default-summary mb-50">
                    We bestow authentic connection with stories with the locals through personalised
                    travelling. We connect travellers with our native guides who know their localities
                    more than anyone else.
                </p>



                <div class="row">
                    <div class="col-md-4 col-12">

                        <div class="default-card">

                            <a href="#">
                                <div class="image-wrapper">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/general-tour-image.png" alt="Featured Product Image">
                                    <div class="hoverlay">
                                        <img class="icon" src="{!! url('/') !!}/assets/frontend/images/general-tour-icon.png" alt="Featured Product Icon">
                                    </div>

                                </div>


                                <h3 class="title">AUTHENTIC Experience</h3>
                            </a>
                        </div>

                    </div>

                    <div class="col-md-4 col-12">

                        <div class="default-card">

                            <a href="#">
                                <div class="image-wrapper">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/personal-character-preferences-image.png" alt="Featured Product Image">
                                    <div class="hoverlay">
                                        <img class="icon" src="{!! url('/') !!}/assets/frontend/images/personal-character-preferences-icon.png" alt="Featured Product Icon">
                                    </div>

                                </div>


                                <h3 class="title">THEMATIC Experience</h3>
                            </a>
                        </div>

                    </div>

                    <div class="col-md-4 col-12">

                        <div class="default-card">

                            <a href="#">
                                <div class="image-wrapper">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/itenary-graphic-image.png" alt="Featured Product Image">
                                    <div class="hoverlay">
                                        <img class="icon" src="{!! url('/') !!}/assets/frontend/images/itenary-graphic-icon.png" alt="Featured Product Icon">
                                    </div>

                                </div>


                                <h3 class="title">Itineraries-GRAPHICS</h3>
                            </a>
                        </div>

                    </div>
                </div>


            </div>
        </div>



    </section>


@endsection

