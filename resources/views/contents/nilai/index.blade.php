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
                            <a href="{{ route('nilai.index') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rekap Nilai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if(auth()->user()->level=="superadmin")
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
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


@include('components.content')
@include('components.footer')
