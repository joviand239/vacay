<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
        <img class="img-responsive logo-admin" style="padding-top:20px;" src="{{ url('/') }}/assets/admin/image/logo.png"/>
        <button type="button" class="sidebar-toggle">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <div class="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="dropdown">
                <a href="{{ url('/admin/cms/Page') }}">
                    <div class="icon">
                        <i class="fa fa-info" aria-hidden="true"></i>
                    </div>
                    <div class="title">Konten</div>
                </a>
            </li>


            <li class="dropdown {!! isActiveRoute(['admin.categories']) !!}">
                <a href="{{ route('admin.categories') }}">
                    <div class="icon">
                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                    </div>
                    <div class="title">Category</div>
                </a>
            </li>

            <li class="dropdown {!! isActiveRoute(['admin.vacaypals']) !!}">
                <a href="{!! route('admin.vacaypals') !!}">
                    <div class="icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="title">Vacay Pals</div>
                </a>
            </li>

            <li class="dropdown {!! isActiveRoute(['admin.vouchers']) !!}">
                <a href="{!! route('admin.vouchers') !!}">
                    <div class="icon">
                        <i class="fa fa-percent" aria-hidden="true"></i>
                    </div>
                    <div class="title">Voucher</div>
                </a>
            </li>

            <li class="dropdown {!! isActiveRoute(['admin.continents', 'admin.countries', 'admin.cities']) !!}">
                <a href="#">
                    <div class="icon">
                        <i class="fa fa-map-o" aria-hidden="true"></i>
                    </div>
                    <div class="title">Destination</div>
                </a>

                <div class="dropdown-menu">
                    <ul>
                        <li class="dropdown">
                            <a href="{{ route('admin.continents') }}">Continent</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('admin.countries') }}">Country</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('admin.cities') }}">City</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="dropdown {!! isActiveRoute(['admin.contactforms']) !!}">
                <a href="#">
                    <div class="icon">
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                    </div>
                    <div class="title"> Form</div>
                </a>

                <div class="dropdown-menu">
                    <ul>
                        <li class="dropdown">
                            <a href="{{ route('admin.contactforms') }}">Contact</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('admin.palforms') }}">Join as Vacay Pals</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="dropdown {!! isActiveRoute(['admin.bookings']) !!}">
                <a href="{!! route('admin.bookings') !!}">
                    <div class="icon">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>
                    </div>
                    <div class="title">Booking</div>
                </a>
            </li>


            <li class="dropdown">
                <a href="{{ url('/admin/cms/details/Page/FeaturedTestimonial') }}">
                    <div class="icon">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                    </div>
                    <div class="title"> Featured Testimonial</div>
                </a>
            </li>


            <li class="dropdown">
                <a href="{{ URL::route('admin.settings') }}">
                <span class="icon">
                    <i class="fa fa-wrench" aria-hidden="true"></i>
                </span>
                    <span class="title"> Setting</span>
                </a>
            </li>

        </ul>
    </div>
</aside>

