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
                    <div class="title">Halaman Informasi</div>
                </a>
            </li>

            <li class="dropdown {!! isActiveRoute(['admin.chefs', 'admin.courses', 'admin.courseplaces']) !!}">
                <a href="#">
                    <div class="icon">
                        <i class="fa fa-object-ungroup" aria-hidden="true"></i>
                    </div>
                    <div class="title">Course</div>
                </a>


                <div class="dropdown-menu">
                    <ul>
                        <li class="dropdown">
                            <a href="{!! route('admin.courses') !!}">Courses</a>
                        </li>
                        <li class="dropdown">
                            <a href="{!! route('admin.chefs') !!}">Chef</a>
                        </li>
                        <li class="dropdown">
                            <a href="{!! route('admin.courseplaces') !!}">Place</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="dropdown {!! isActiveRoute(['admin.productcategories', 'admin.products']) !!}">
                <a href="#">
                    <div class="icon">
                        <i class="fa fa-object-ungroup" aria-hidden="true"></i>
                    </div>
                    <div class="title">Product</div>
                </a>


                <div class="dropdown-menu">
                    <ul>
                        <li class="dropdown">
                            <a href="{!! route('admin.productcategories') !!}">Category</a>
                        </li>
                        <li class="dropdown">
                            <a href="{!! route('admin.products') !!}">Product</a>
                        </li>
                    </ul>
                </div>
            </li>


            {{--<li class="dropdown" >
                <a>
                    <div class="icon">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="title">Pesanan GerayPrint</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="dropdown">
                            <a href="{{ url('/admin/orders/all/CUSTOMER') }}">Pending</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('/admin/orders/completed/CUSTOMER') }}">Selesai</a>
                        </li>
                    </ul>
                </div>
            </li>--}}
        </ul>
    </div>
</aside>

