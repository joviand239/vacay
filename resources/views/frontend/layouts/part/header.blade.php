<nav id="main-navbar" class="navbar navbar-expand-lg {!! (@$headerTransparent) ? 'transparent' : '' !!}">
    <div class="container">
        <a class="navbar-brand" href="{!! route('home') !!}">
            <img class="logo" src="{!! url('/') !!}/assets/frontend/images/logo.png" alt="Logo {!! env('PROJECT_NAME') !!}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {!! isActiveRoute(['about']) !!}" href="{!! route('about') !!}">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! isActiveRoute(['services']) !!}" href="{!! route('services') !!}">OUR SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DESTINATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! isActiveRoute(['how-it-works']) !!}" href="{!! route('how-it-works') !!}">HOW IT WORKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">VACAY PALS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-btn btn main-btn transparent" href="{!! route('contact') !!}">CONTACT US!</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-md-0">
                <a href="#" class="btn main-btn white">JOIN AS VACAY PALS <i class="fa fa-angle-right"></i></a>
            </form>
        </div>
    </div>
</nav>