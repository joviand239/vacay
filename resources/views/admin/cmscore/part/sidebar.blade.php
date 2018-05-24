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

            <li class="dropdown {!! isActiveRoute(['admin.bookings']) !!}">
                <a href="{!! route('admin.bookings') !!}">
                    <div class="icon">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>
                    </div>
                    <div class="title">Booking</div>
                </a>
            </li>

        </ul>
    </div>
</aside>

