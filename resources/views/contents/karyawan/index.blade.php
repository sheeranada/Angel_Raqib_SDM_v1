@include('components.head')
@include('components.navbar')

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
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Data Karyawan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('karyawan.index') }}" class="nav-link active">
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
                            <a href="{{ route('nilai.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rekap Nilai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if(auth()->user()->level=="superadmin")
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
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
                    <h1>DATA KARYAWAN</h1>
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
        <a href="/karyawan/create" class="btn btn-primary mb-3">TAMBAH DATA</a>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Karyawan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA KARYAWAN</th>
                            <th>UNIT</th>
                            <th>JENIS KELAMIN</th>
                            <th>NIK</th>
                            <th>PILIHAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $no=>$k)
                        <tr>
                            <td align="center">{{ ++$no }}</td>
                            <td>{{ $k->nama_karyawan }}</td>
                            <td>{{ $k->unit->nama_unit }}</td>
                            <td>{{ $k->jkel }}</td>
                            <td>{{ $k->nik }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="/karyawan/edit/{{ $k->id }}" class="btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i> EDIT</a>
                                    <a href="/karyawan/destroy/{{ $k->id }}" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i> HAPUS</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

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
