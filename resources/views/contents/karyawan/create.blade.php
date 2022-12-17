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
        <a href="/karyawan" class="btn btn-outline-dark mb-3">KEMBALI</a>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Karyawan</h3>
            </div>
            <div class="card-body">
                <form action="/karyawan/store" method="POST" class="was-validated">
                    <div class="container">
                        <div class="row">
                            @csrf
                            <div class="mb-3 col-lg-12 col-sm-12">
                                <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                                <input type="text" class="form-control" id="validationCustom01" name="nama_karyawan" placeholder="input nama karyawan..." required>
                                <div class="valid-feedback">OK..</div>
                                <div class="invalid-feedback">Nama tidak boleh kosong.</div>
                            </div>
                            <div class="mb-3 col-sm-12 col-md-4">
                                <label for="unit_id" class="form-label">Unit / Bagian</label><br>
                                <select class="form-select form-select-lg-7 mb-3" name="unit_id" id="unit_id" required>
                                    <option selected disabled value="">-- pilih unit / bagian --</option>
                                    @foreach ($unit as $u)
                                    <option value="{{ $u->id }}">{{ $u->nama_unit }}</option>
                                    @endforeach
                                </select>
                                <div class="valid-feedback">OK..</div>
                                <div class="invalid-feedback">Unit tidak boleh kosong.</div>
                            </div>
                            <div class="mb-3 col-sm-12 col-md-4">
                                <label for="jkel" class="form-label">Jenis Kelamin</label>
                                <select class="form-select form-select-lg-7 mb-3" name="jkel" id="jkel" required>
                                    <option selected disabled value="">-- pilih jenis kelamin --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <div class="valid-feedback">OK..</div>
                                <div class="invalid-feedback">Jenis kelamin tidak boleh kosong.</div>
                            </div>
                            <div class="mb-3 col-lg-4 col-sm-12">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="number" class="form-control" id="nik" name="nik" rows="3" min="0" step="1" data-bind="value:replyNumber" required>
                            </div>
                            <div class="valid-feedback">OK..</div>
                            <div class="invalid-feedback">NIK tidak boleh kosong.</div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" name="submit" value="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>
@include('components.footer')
