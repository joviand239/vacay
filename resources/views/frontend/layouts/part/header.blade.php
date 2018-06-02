<nav id="main-navbar" class="navbar navbar-expand-lg {!! (@$headerTransparent) ? 'transparent' : '' !!}">
    <div class="container">
        <div class="brand-wrapper">
            <a class="navbar-brand" href="{!! route('home') !!}">
                <img class="logo" src="{!! url('/') !!}/assets/frontend/images/logo.png" alt="Logo {!! env('PROJECT_NAME') !!}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <div id="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>


        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {!! isActiveRoute(['about']) !!}" href="{!! route('about') !!}">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! isActiveRoute(['services']) !!}" href="{!! route('services') !!}">OUR SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! route('destinations', ['type' => \App\Util\Constant::SEARCH_TYPE_ALL]) !!}">DESTINATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! isActiveRoute(['how-it-works']) !!}" href="{!! route('how-it-works') !!}">HOW IT WORKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! isActiveRoute(['vacaypals']) !!}" href="{!! route('vacaypals') !!}">VACAY PALS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-block d-sm-none {!! isActiveRoute(['contact']) !!}" href="{!! route('contact') !!}">CONTACT US</a>
                    <a class="nav-btn btn main-btn transparent d-none d-sm-block" href="{!! route('contact') !!}">CONTACT US!</a>
                </li>
                <li class="nav-item d-block d-sm-none">
                    <a class="nav-link {!! isActiveRoute(['vacaypals-join']) !!}" href="{!! route('vacaypals-join') !!}">JOIN AS VACAY PALS</a>
                </li>
            </ul>

            <div class="form-inline my-2 my-md-0 d-none d-sm-block">
                <a href="{!! route('vacaypals-join') !!}" class="btn main-btn white">JOIN AS VACAY PALS <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</nav>

<div class="nav-spacer">

</div>