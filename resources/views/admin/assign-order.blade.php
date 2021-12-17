<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi Subscribers</title>

    <link rel="shortcut icon" href="{{url('assets/images/logo-pelaris-01.png')}}" type="image/png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/style/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/style/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/e-vote/admin')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/e-vote/admin/user')}}" class="nav-link active">Subscribers</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->


                <!-- Messages Dropdown Menu -->

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            {{-- <a href="/e-vote/admin/" class="brand-link">
                <img src="{{ url('/style/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">CAN CREATIVE</span>
            </a> --}}

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ url('/style/dist/img/user1-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{url('/e-vote/admin/')}}" class="d-block">CAN CREATIVE</a>
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
                            <a href="{{url('/kasirin-toko/subscriptions')}}" class="nav-link">

                                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <p>
                                    Subscriptions
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/kasirin-toko/subscriptions')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Subscriptions</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/kasirin-toko/subscriptions/add')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Subscriptions</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/kasirin-toko/subscriptions')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edit Subscriptions</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{url('/kasirin-toko/subscribers')}}" class="nav-link active">
                                <i class="nav-icon far fa-address-book"></i>
                                <p>
                                    Subscribers
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/kasirin-toko/subscribers')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Subscribers</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Confirmation Subscribers</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('logout')}}" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                        <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Confirmation Subscribers</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Konfirmasi Langganan<li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            Konfirmasi Langganan
                        </div>
                        <div class="card-body">
                            <a href="{{url('/kasirin-toko/subscribers')}}" class="btn btn-primary">Back</a>
                            <br />
                            <br />

                            <form method="post" action="{{url('/kasirin-toko/subscribers/update/'.$subscribers->id)}}">

                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="form-group">
                                    <label>Nama </label>
                                    <select name="user_id" class="form-control" id="" readonly>
                                        <option value="{{ $subscribers->user->id }}">{{ $subscribers->user->name }}</option>
                                    </select>
                                    @if($errors->has('user_id'))
                                    <div class="text-danger">
                                        {{ $errors->first('user_id')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Jenis Paket</label>
                                    <select name="subscription_id" class="form-control" id="" readonly>
                                        <option value="{{ $subscribers->subscription->id }}">{{ $subscribers->subscription->name }}</option>
                                    </select>
                                    @if($errors->has('subscription_id'))
                                    <div class="text-danger">
                                        {{ $errors->first('subscription_id')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Status Pembayaran</label> <br>
                                    <select class="js-example-basic-single" name="status_pembayaran" >
                                        <option value="On Proccess">On Proccess</option>
                                        <option value="Success">Success</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                    @if($errors->has('status_pembayaran'))
                                    <div class="text-danger">
                                        {{ $errors->first('status_pembayaran')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Start At</label>
                                    <select name="start_at" class="form-control" id="" readonly>
                                        <option value="{{ $subscribers->start_at }}">{{ $subscribers->start_at }}</option>
                                    </select>
                                    @if($errors->has('start_at'))
                                    <div class="text-danger">
                                        {{ $errors->first('start_at')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Stopped At</label>
                                    <select name="stopped_at" class="form-control" id="" readonly>
                                        <option value="{{ $subscribers->stopped_at }}">{{ $subscribers->stopped_at }}</option>
                                    </select>
                                    @if($errors->has('stopped_at'))
                                    <div class="text-danger">
                                        {{ $errors->first('stopped_at')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /.card-footer-->
        </div>
        <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="https://can.co.id/">CAN Creative</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/style/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Select 2 -->
        <script src="{{asset('/style/plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/style/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/style/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/style/dist/js/demo.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

    </script>
</body>

</html>
