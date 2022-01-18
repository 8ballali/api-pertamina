<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPBU</title>

    <link rel="shortcut icon" href="{{url('assets/images/site-removebg.png')}}" type="image/png">
    <!-- Select2: Source -->
    <script src="https://kit.fontawesome.com/1dd0cacffc.js" crossorigin="anonymous"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/style/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="icon" href={{ url('/style/dist/img/pertamina.png')}}>
    <!-- Font Awesome kit -->
    <script src="https://kit.fontawesome.com/1dd0cacffc.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
                    <a href="{{url('/pertamina/list-order')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('#')}}" class="nav-link active">Create Data SPBU</a>
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
        @extends('admin.master')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Create Data SPBU</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Create Data SPBU</li>
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
                            Create Data SPBU
                        </div>
                        <div class="card-body">
                            <br />
                            <br />

                            <form method="post" action="{{ url('/pertamina/spbu/create')}}">

                                {{ csrf_field() }}
                                <div id="dynamic_field">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nama SPBU">

                                        @if($errors->has('name'))
                                        <div class="text-danger">
                                            {{ $errors->first('name')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Code</label>
                                        <input type="text" name="code" class="form-control" placeholder="Kode SPBU">

                                        @if($errors->has('code'))
                                        <div class="text-danger">
                                            {{ $errors->first('code')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Alamat SPBU">

                                        @if($errors->has('address'))
                                        <div class="text-danger">
                                            {{ $errors->first('address')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Region</label>
                                        <select name="region_id" class="select2" style="width: 100%">
                                            @foreach ($region as $r)
                                            <option value='{{ $r->id }}'>
                                                {{ $r->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
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

    @extends('admin.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(function () {
            $('.select2').select2()
        });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $("#single").select2({
            allowClear: true
        });

    </script>
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
        $(function () {
            $('.select2').select2()
        });

    </script>
</body>

</html>
