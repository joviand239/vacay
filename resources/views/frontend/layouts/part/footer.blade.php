<footer id="footer">

    <div class="container">


        <div class="col-wrapper">

            <div class="item">
                <p>Contact Us</p>
                <p><span class="font-bold">{!! getSettingAttribute('companyAddress') !!}</span></p>
                <p class="mb-15"><span class="font-bold">{!! getSettingAttribute('companyEmail') !!}</span></p>

                <p>Social Media</p>

                <ul class="socmed-wrapper list-unstyled">
                    <li class="item">
                        <a class="link" href="{!! getSettingAttribute('facebookLink') !!}">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a class="link" href="{!! getSettingAttribute('instagramLink') !!}">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a class="link" href="{!! getSettingAttribute('googlePlusLink') !!}">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a class="link" href="{!! getSettingAttribute('youtubeLink') !!}">
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
                            <a href="{!! route('services') !!}#nav-experience">
                                Vacay Experience
                            </a>
                        </li>
                        <li>
                            <a href="{!! route('services') !!}#nav-essentials">
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
                        @foreach(getAllContinent() as $continent)
                        <li>
                            <a href="{!! route('destinations', ['type' => \App\Util\Constant::SEARCH_TYPE_CONTINENT, 'url' => @$continent->url]) !!}">
                                {!! @$continent->name !!}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="item">
                <div class="info-wrapper">
                    <p>Join Us</p>

                    <ul>
                        <li>
                            <a href="{!! route('vacaypals-join') !!}">
                                As a Vacay Pals
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>


    <div class="copyright">
       © COPYRIGHT 2019 VACAY!
    </div>

</footer>