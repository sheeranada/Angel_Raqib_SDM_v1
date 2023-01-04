@include('components.head')
@include('components.navbar')
{{-- sidebar --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
        <span class="brand-text font-weight-light">RSRW - UNIT SDM</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
                <img src="{{ asset('adminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
            <a href="#" class="d-block"><sup>login as</sup> {{ auth()->user()->name }}</a>
        </div>
    </div>

    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Dasboard
                        {{-- <span class="right badge badge-success">AngelRaqib.app</span> --}}
                    </p>
                </a>
            </li>
            {{-- penilaian --}}
            <li class="nav-item">
                <a href="{{ route('penilaian.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Nilai Sekarang !!
                        <span class="right badge badge-danger">click</span>
                    </p>
                </a>
            </li>
            {{-- data karyawan --}}
            <li class="nav-item menu">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Data Karyawan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('karyawan.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List Karyawan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('unit.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List Unit</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('penilai.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List Penilai</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('penilaian.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Rekap Nilai</p>
                        </a>
                    </li>
                </ul>
            </li>
            @if(auth()->user()->level=="superadmin")
            <li class="nav-item menu-open">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        User Account
                        <span class="right badge badge-primary">superuser</span>
                    </p>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Log Out
                        {{-- <span class="right badge badge-danger">click</span> --}}
                    </p>
                </a>
            </li>
        </ul>
    </nav>

    </div>

</aside>
{{-- content --}}
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DATA USER</h1>
                </div>
                <div class="col-sm-6">
                    {{-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User Edit</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="/user/{{ $user->id }}" method="POST" class="was-validated">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-lg-6 col-sm-12">
                            <label for="name" class="form-label">Nama</label>
                            <input name="name" type="text" class="form-control mb-3" id="name" value="{{ $user->name }}" required>
                            <div class="valid-feedback">OK..</div>
                            <div class="invalid-feedback">Nama tidak boleh kosong.</div>
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" value="{{ $user->email }}" required>
                            <div class="valid-feedback">OK..</div>
                            <div class="invalid-feedback">Email tidak boleh kosong.</div>
                        </div>
                        <div class="mb-3 col-lg-6 col-sm-12">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control mb-3" id="password" value="{{ $user->password }}" bcrypt required>
                            <div class="valid-feedback">OK..</div>
                            <div class="invalid-feedback">Password tidak boleh kosong.</div>
                            <label for="level" class="form-label">Level</label>
                            <select name="level" id="level" class="form-select" required>
                                <option selected disabled value="">{{ $user->level }}</option>
                                <option value="user">user</option>
                                <option value="admin">admin</option>
                                <option value="superadmin">superadmin</option>
                            </select>
                            <div class="valid-feedback">OK..</div>
                            <div class="invalid-feedback">Level tidak boleh kosong.</div>
                        </div>
                        <div class="d-flex gap-2 justify-content-end">
                            <a class="btn btn-info" href="/user"><i class="fas fa-arrow-alt-circle-left"></i> BATAL</a>
                            <input type="submit" name="submit" value="UPDATE" class="btn btn-warning">
                        </div>
                    </div>
                </form>
            </div>
    </section>

</div>
@include('components.footer')
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true
            , "lengthChange": false
            , "autoWidth": false,

        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true
            , "lengthChange": false
            , "searching": false
            , "ordering": true
            , "info": true
            , "autoWidth": false
            , "responsive": true
        , });
    });

</script>
