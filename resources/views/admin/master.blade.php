<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="/e-vote/admin" class="brand-link">
        <img src="{{ url('/style/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CAN CREATIVE</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('/style/dist/img/pertamina.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{url('/pertamina/list-order')}}" class="d-block">{{$user->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('/pertamina/list-pertamina')}}" class="nav-link">
                        <i class="nav-icon fas fa-landmark"></i>
                        <p>
                            Pertamina
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/pertamina/list-pertamina')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Pertamina</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/pertamina/pertamina/add')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Pertamina</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{url('/pertamina/list-spbu')}}" class="nav-link">
                        <i class="nav-icon fas fa-gas-pump"></i>
                        <p>
                            SPBU
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/pertamina/list-spbu')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List SPBU</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/pertamina/spbu/add')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add SPBU</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{url('/pertamina/list-region')}}" class="nav-link">
                        <i class="nav-icon fas fa-map-marker-alt"></i>
                        <p>
                            Region
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/pertamina/list-region')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Region</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/pertamina/region/add')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Region</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{url('/pertamina/list-staff')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Staff
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/pertamina/list-staff')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Staff</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/pertamina/staff/add')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Staff</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{url('/pertamina/list-order')}}" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>
                            Order
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/pertamina/list-order')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Order</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{url('/pertamina/list-assign-order')}}" class="nav-link ">
                        <i class="nav-icon far fa-address-book"></i>
                        <p>
                           Order Assigned
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/pertamina/list-assign-order')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Assigned Order</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/pertamina/assign-order/add')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Assigned Order</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{url('/pertamina/riwayat')}}" class="nav-link">
                        <i class="nav-icon fas fa-history"></i>
                        <p>
                            Riwayat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i style="color:red;" class="nav-icon fas fa-sign-out-alt"></i>
                        <p style="color:red;">
                            Logout
                        </p>
                    </a>
                </li>
                <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
