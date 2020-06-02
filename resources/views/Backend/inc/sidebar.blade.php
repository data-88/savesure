<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/adminPanel" class="brand-link">
        {{--<img src="img/footers_logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
        <span class="brand-text font-weight-light">Quotes</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../dist/img/{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('profile')}}" class="d-block"> {{ Auth::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/adminPanel" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>About</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-motorcycle"></i>
                        <p>
                            Bike
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('brands') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Brand</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('model') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Model</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('variant') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Variant</p>
                            </a>
                        </li>
                    </ul>
                </li><li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Car
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('car-brands') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Brand</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('car-model') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Model</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('car-variant') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Variant</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('company') }}" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>Companies</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('premium') }}" class="nav-link">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>Premiums</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
