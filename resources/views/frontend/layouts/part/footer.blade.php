<footer id="footer">

    <div class="container">


        <div class="col-wrapper">

            <div class="item">
                <p>Contact Us</p>
                <p><span class="font-bold">{!! getAboutAttribute('address') !!}</span></p>
                <p class="mb-15"><span class="font-bold">{!! getAboutAttribute('email') !!}</span></p>

                <p>Social Media</p>

                <ul class="socmed-wrapper list-unstyled">
                    <li class="item">
                        <a class="link" href="{!! getAboutAttribute('facebookLink') !!}">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a class="link" href="{!! getAboutAttribute('instagramLink') !!}">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a class="link" href="{!! getAboutAttribute('googlePlusLink') !!}">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a class="link" href="{!! getAboutAttribute('youtubeLink') !!}">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="item">
                <div class="info-wrapper">
                    <p>Information</p>

                    <ul>
                        <li>
                            <a href="{!! route('about') !!}">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{!! route('how-it-works') !!}">
                                How it Works
                            </a>
                        </li>
                        <li>
                            <a href="{!! route('contact') !!}">
                                Contact us
                            </a>
                        </li>
                        <li>
                            <a href="{!! route('terms') !!}">
                                Terms and Conditions
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="item">
                <div class="info-wrapper">
                    <p>Products</p>

                    <ul>
                        <li>
                            <a href="{!! route('services') !!}">
                                Vacay Experience
                            </a>
                        </li>
                        <li>
                            <a href="{!! route('services') !!}">
                                Vacay Essentials
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="item">
                <div class="info-wrapper">
                    <p>Destination</p>

                    <ul>
                        <li>
                            <a href="#">
                                Asia
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Australia
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Europe
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Africa
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                America
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="item">
                <div class="info-wrapper">
                    <p>Join Us</p>

                    <ul>
                        <li>
                            <a href="{!! route('vacaypals-join') !!}">
                                As a local Guide
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>


    <div class="copyright">
        WEBSITE BY JSWORKS © COPYRIGHT 2018 VACAY!
    </div>

</footer>