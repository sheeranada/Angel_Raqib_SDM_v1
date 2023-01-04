{{-- @include('contents.penilaian.frm_penilaian.head') --}}
{{-- @include('contents.penilaian.frm_penilaian.navbar') --}}
{{-- @include('contents.penilaian.frm_penilaian.identity') --}}
{{-- @include('contents.penilaian.frm_penilaian.profesionalisme') --}}
{{-- @include('contents.penilaian.frm_penilaian.komunikasi') --}}
{{-- @include('contents.penilaian.frm_penilaian.manajemen') --}}
{{-- @include('contents.penilaian.frm_penilaian.footer') --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Form Penilaian | Unit SDM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="{{ asset('frm_skor/assets/css/styles.min.css?h=f41b09a63454b94013aa280d5da5e8d3') }}">

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js" integrity="sha512-qOBWNAMfkz+vXXgbh0Wz7qYSLZp6c14R0bZeVX2TdQxWpuKr6yHjBIM69fcF8Ve4GUX6B6AKRQJqiiAmwvmUmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <link rel="stylesheet" href="{{ asset('didit.js') }}">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}
</head>

<body class="container-fluid" style="background: var(--bs-gray);">

    <!-- Start: navbar -->
    <div class="container-fluid">
        <div class="row">
            <!-- Start: Black Navbar -->
            <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-fixed-top navigation-clean-button" style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;">
                <div class="container">
                    <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="border-color: var(--bs-white);">
                        <span class="visually-hidden">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div>
                        <a class="navbar-brand" href="/">
                            <span>App</span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                        <ul class="navbar-nav nav-right">
                            <li class="nav-item">
                                <a class="nav-link active" href="/" style="color: rgba(224,217,217,0.9);">home </a>
                            </li>
                        </ul><!-- Start: Actions -->
                        <p class="ms-auto navbar-text actions">
                            <a class="login text-uppercase" href="" style="color: rgba(224,217,217,0.9);">{{ auth()->user()->name }}</a> <a class="btn btn-light action-button" role="button" href="{{ route('logout') }}" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">SignOut</a>
                        </p><!-- End: Actions -->
                    </div>
                </div>
            </nav><!-- End: Black Navbar -->
        </div>
    </div><!-- End: navbar -->
    <div class="card mb-3">
        <form action="/penilaian/store" method="POST">
            @csrf
            <h3 class="text-center mt-5">FORM PENILAIAN KARYAWAN</h3>
            <hr style="color: var(--bs-body-bg);background: radial-gradient(black, #0000ff 100%), var(--bs-gray);height: 3px;">
            <!-- Start: IDENTITY -->
            <div class="card-group">
                <!-- Start: Identitas -->
                <div class="container mb-3">
                    <div class="row card-text">
                        @foreach($penilai as $p)
                        <!-- Start: NAMA JKEL -->
                        <div class="col-md-4">
                            <!-- Start: Input-text floating-labels -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control text-uppercase" placeholder="Nama Karyawan" value="{{ $p->karyawan->nama_karyawan }}" readonly>
                                <label class="form-label" for="floatingInput">NAMA KARYAWAN</label>
                            </div><!-- End: Input-text floating-labels -->
                            <!-- Start: Input-text floating-labels -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Jenis Kelamin" value="{{ $p->karyawan->jkel }}" readonly>
                                <label class="form-label text-capitalize" for="floatingInput">JENIS KELAMIN</label>
                            </div><!-- End: Input-text floating-labels -->
                        </div><!-- End: NAMA JKEL -->
                        <!-- Start: UNIT -->
                        <div class="col-md-4">
                            <!-- Start: Input-text floating-labels -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="HGsOFT" value="{{ $p->karyawan->unit->nama_unit }}" readonly>
                                <label class="form-label" for="floatingInput">UNIT / BAGIAN / INSTALASI</label>
                            </div>
                            <!-- End: Input-text floating-labels -->
                            <!-- Start: Input-text floating-labels -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="HGsOFT" value="{{ $p->karyawan->nik }}" readonly>
                                <label class="form-label" for="floatingInput">NIK</label>
                            </div>
                            <!-- End: Input-text floating-labels -->
                        </div><!-- End: UNIT -->
                        <!-- Start: PENILAI -->
                        <div class="col-md-4">
                            <!-- Start: Input-text floating-labels -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="HGsOFT" name="penilai_id" value="{{ $p->id }}" readonly>
                                <label class="form-label" for="floatingInput">ID PENILAI</label>
                            </div><!-- End: Input-text floating-labels -->
                            <!-- Start: Input-text floating-labels -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control text-uppercase" placeholder="HGsOFT" value="{{ $p->nama_penilai }}" readonly>
                                <label class="form-label" for="floatingInput">NAMA PENILAI</label>
                            </div><!-- End: Input-text floating-labels -->
                        </div><!-- End: PENILAI -->
                        @endforeach
                    </div>
                </div><!-- End: Identitas -->
            </div><!-- End: IDENTITY -->
            <!-- Start: PROFESIONALISME -->
            <div class="container" style="background: var(--bs-white);">
                <div class="card mt-3">
                    <div class="card-header">
                        <h5 class="mb-0">I. Profesionalisme (bobot nilai 40)<br></h5>
                    </div><!-- Start: A. Kehadiran -->
                    <div class="card-body mb-4">
                        <h5 class="text-center"><strong>A. Kehadiran</strong><br></h5>
                        <p class="text-center card-text text-muted">
                            Kemampuan untuk hadir dan bekerja dalam pekerjaan<br>
                        </p>
                        <hr>
                        <div class="card">
                            <div class="card-body">
                                <p class="text-center card-text">Keterlambatan diberi toleransi sampai dengan 5 menit
                                    Penilaian dilakukan dengan melihat daftar hadir karyawan<br></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-sm-10">
                                        <label class="col-form-label">Tidak hadir tanpa keterangan
                                            1 hari atau lebih dalam 1 tahun<br>
                                        </label>
                                    </div>
                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                            <input class="form-check-input" type="radio" id="40_1" name="skor1" value="40">
                                            <label class="form-check-label" for="40_1" style="font-size: 11px;">SKOR
                                                40
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-sm-10">
                                        <label class="col-form-label">
                                            Tidak hadir dengan ijin (bukan karena sakit) lebih dari 6 hari dalam 1 tahun<br>
                                        </label>
                                    </div>
                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                            <input class="form-check-input" type="radio" id="80_1" name="skor1" value="80">
                                            <label class="form-check-label" for="80_1" style="font-size: 11px;">SKOR
                                                80
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-sm-10">
                                        <label class="col-form-label">Terlambat datang lebih 12
                                            kali dalam 1 tahun<br>
                                        </label>
                                    </div>
                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                            <input class="form-check-input" type="radio" id="120_1" name="skor1" value="120">
                                            <label class="form-check-label" for="120_1" style="font-size: 11px;">
                                                SKOR 120
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-sm-10">
                                        <label class="col-form-label">Selalu hadir dalam pekerjaan
                                            &amp; tidak pernah datang terlambat<br></label>
                                    </div>
                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                            <input class="form-check-input" type="radio" id="160_1" name="skor1" value="160">
                                            <label class="form-check-label" for="160_1" style="font-size: 11px;">SKOR
                                                160
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- show skor JS --}}
                        <hr>
                    </div><!-- End: A. Kehadiran -->
                    <hr style="background: radial-gradient(black, #0000ff 100%), var(--bs-gray);">
                    <!-- Start: B. KEMAMPUAN BEKERJA -->
                    <div class="card-body mb-4">
                        <h5 class="text-center"><strong>B. KEMAMPUAN BEKERJA</strong><br></h5>
                        <p class="text-center card-text text-muted">
                            Memahami dan menguasai bidang pekerjaannya sesuai
                            prosedur tetap<br>
                        </p>
                        <hr>
                        <div class="card">
                            <div class="card-body">
                                <p class="text-center card-text">Penilaian dilakukan dengan melihat kemampuan karyawan
                                    dalam melaksanakan pekerjaan sesuai dengan protap<br>
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-sm-10">
                                        <label class="col-form-label">Tidak mampu melakukan
                                            tugasnya<br>
                                        </label>
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-sm-center align-items-sm-center col-sm-2">
                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                            <input class="form-check-input" type="radio" id="40_2" value="40" name="skor2">
                                            <label class="form-check-label" for="40_2" style="font-size: 11px;">SKOR
                                                40
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col col-sm-10">
                                            <label class="col-form-label">Kurang mampu melakukan
                                                tugasnya<br>
                                            </label>
                                        </div>
                                        <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                            <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                <input class="form-check-input" type="radio" id="80_2" value="80" name="skor2">
                                                <label class="form-check-label" for="80_2" style="font-size: 11px;">SKOR
                                                    80
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col col-sm-10">
                                                <label class="col-form-label">Cukup mampu melaksanakan
                                                    tugasnya<br>
                                                </label>
                                            </div>
                                            <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                    <input class="form-check-input" type="radio" id="120_2" value="120" name="skor2">
                                                    <label class="form-check-label" for="120_2" style="font-size: 11px;">SKOR
                                                        120
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col col-sm-10">
                                                    <label class="col-form-label">Mampu melaksanakan
                                                        tugasnya.dengan baik<br>
                                                    </label>
                                                </div>
                                                <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                    <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                        <input class="form-check-input" type="radio" id="160_2" value="160" name="skor2">
                                                        <label class="form-check-label" for="160_2" style="font-size: 11px;">SKOR
                                                            160
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End: B. KEMAMPUAN BEKERJA -->
                                    <hr>
                                    <hr style="background: radial-gradient(black, #0000ff 100%), var(--bs-gray);">
                                    <!-- Start: C. KEPATUHAN -->
                                    <div class="card-body mb-4">
                                        <h5 class="text-center"><strong>C. KEPATUHAN</strong><br></h5>
                                        <p class="text-center card-text text-muted">Sejauh mana karyawan mematuhi instruksi dan memenuhi
                                            tanggung jawabnya baik terhadap unit/seksi nya maupun terhadap peraturan rumah sakit.<br>
                                        </p>
                                        <hr>
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="text-center card-text">Penilaian dilakukan dengan mengamati kepatuhan karyawan
                                                    terhadap instruksi dan peraturan-peraturan baik di unit/seksi maupun rumah sakit<br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Tidak pernah mematuhi
                                                            peraturan dan memenuhi tanggung jawabnya di unit maupun rumah sakit<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor3_1" name="skor3" value="40">
                                                            <label class="form-check-label" for="skor3_1" style="font-size: 11px;">SKOR
                                                                40
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Sering tidak
                                                            mematuhi<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor3_2" name="skor3" value="80">
                                                            <label class="form-check-label" for="skor3_2" style="font-size: 11px;">SKOR
                                                                80<br>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Kadang-kadang tidak
                                                            mematuhi<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor3_3" name="skor3" value="120">
                                                            <label class="form-check-label" for="skor3_3" style="font-size: 11px;">SKOR
                                                                120
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">
                                                            Selalu mematuhi<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor3_4" name="skor3" value="160">
                                                            <label class="form-check-label" for="skor3_4" style="font-size: 11px;">SKOR
                                                                160
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End: C. KEPATUHAN -->
                                    <hr style="background: radial-gradient(black, #0000ff 100%), var(--bs-gray);">
                                    <!-- Start: D. INISIATIF -->
                                    <div class="card-body mb-4">
                                        <h5 class="text-center"><strong>D. INISIATIF</strong><br></h5>
                                        <p class="text-center card-text text-muted">Kemampuan melakukan tindakan tanpa supervisi, secara
                                            benar dan penuh tanggung jawab<br>
                                        </p>
                                        <hr>
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="text-center card-text">Penilaian dilakukan dengan mengamati reaksi karyawan untuk
                                                    bertindak dalam mengatasi masalah yang timbul dalam pekerjannya.<br></p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Tidak peka terhadap masalah
                                                            yang timbul yang seharusnya menjadi perhatian dan tanggung jawabnya.<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor4_1" name="skor4" value="40">
                                                            <label class="form-check-label" for="skor4_1" style="font-size: 11px;">SKOR
                                                                40
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Sering tidak peka untuk
                                                            bertindak dalam mengatasi masalah yang timbul<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor4_2" name="skor4" value="80">
                                                            <label class="form-check-label" for="skor4_2" style="font-size: 11px;">SKOR
                                                                80<br>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Kadang-kadang kurang peka
                                                            untuk mengatasi masalah yang timbul<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor4_3" name="skor4" value="120">
                                                            <label class="form-check-label" for="skor4_3" style="font-size: 11px;">SKOR
                                                                120
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Peka dan cepat bertindak
                                                            untuk mengatasi masalah<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor4_4" name="skor4" value="160">
                                                            <label class="form-check-label" for="skor4_4" style="font-size: 11px;">SKOR
                                                                160
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End: D. INISIATIF -->
                                </div>
                            </div><!-- End: PROFESIONALISME -->

                            {{-- <script>
                                let show = document.querySelector('#show1');
                                document.body.addEventListener('change', function(e) {
                                    let target = e.target;
                                    let display_msg;
                                    switch (target.id) {
                                        case '40_1':
                                            display_msg = 'NILAI PROFESIONALISME 40';
                                            break;
                                        case '80_1':
                                            display_msg = 'NILAI PROFESIONALISME 80';
                                            break;
                                        case '120_1':
                                            display_msg = 'NILAI PROFESIONALISME 120';
                                            break;
                                        case '160_1':
                                            display_msg = 'NILAI PROFESIONALISME 160';
                                            break;
                                        case 'none':
                                            display_msg = 'none';
                                            break;
                                    }
                                    show.textContent = display_msg;
                                });
                            </script> --}}
                            <!-- Start: KOMUNIKASI -->
                            <div class="container mt-5" style="background: var(--bs-white);">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">II. KOMUNIKASI (bobot nilai 30)<br></h5>
                                    </div><!-- Start: A. HUBUNGAN ANTAR MANUSIA -->
                                    <div class="card-body mb-4">
                                        <h5 class="text-center"><strong>A. HUBUNGAN ANTAR MANUSIA</strong><br></h5>
                                        <p class="text-center card-text text-muted">Sikap bersahabat dan memahami orang lain serta mengerti
                                            pentingnya konsep tim.<br>
                                        </p>
                                        <hr>
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="text-center card-text">Penilaian dilakukan dengan mengamati perilaku karyawan
                                                    dalam berhubungan dengan orang lain (atasan, teman dan pasien/keluarganya)<br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Acuh terhadap orang lain
                                                            (atasan, teman atau pasien/keluarganya)<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor5_1" name="skor5" value="30">
                                                            <label class="form-check-label" for="skor5_1" style="font-size: 11px;">SKOR
                                                                30
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">
                                                            Sering acuh terhadap orang
                                                            lain.<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor5_2" name="skor5" value="60">
                                                            <label class="form-check-label" for="skor5_2" style="font-size: 11px;">SKOR
                                                                60<br>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">
                                                            Kadang-kadang kurang
                                                            memperhatikan orang lain<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor5_3" name="skor5" value="90">
                                                            <label class="form-check-label" for="skor5_3" style="font-size: 11px;">SKOR
                                                                90
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Mempunyai perhatian yang baik
                                                            kepada orang lain<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor5_4" name="skor5" value="120">
                                                            <label class="form-check-label" for="skor5_4" style="font-size: 11px;">SKOR
                                                                120
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End: A. HUBUNGAN ANTAR MANUSIA -->
                                    <hr style="background: radial-gradient(black, #0000ff 100%), var(--bs-gray);">
                                    <!-- Start: B. KERJASAMA -->
                                    <div class="card-body mb-4">
                                        <h5 class="text-center"><strong>B. KERJASAMA</strong><br></h5>
                                        <p class="text-center card-text text-muted">
                                            Kemampuan dan kemauan untuk bekerja sama secara harmoni
                                            dengan yang lain dalam mempertahankan dan meningkatkan keberhasilan.<br>
                                        </p>
                                        <hr>
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="text-center card-text">
                                                    Penilaian dilakukan dengan mengamati perilaku karyawan
                                                    dalan bekerja sama dengan karyawan yang lain<br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">
                                                            Tidak mampu bekerja
                                                            sama<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex align-items-center justify-content-sm-center align-items-sm-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor6_1" name="skor6" value="30">
                                                            <label class="form-check-label" for="skor6_1" style="font-size: 11px;">SKOR
                                                                30
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10"><label class="col-form-label">
                                                            Hanya mampu bekerja sama
                                                            dengan orang tertentu<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor6_2" value="60" name="skor6" value="60">
                                                            <label class="form-check-label" for="skor6_2" style="font-size: 11px;">SKOR
                                                                60
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">
                                                            Cukup baik dalam bekerja sama
                                                            dengan yang lain<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor6_3" name="skor6" value="90">
                                                            <label class="form-check-label" for="skor6_3" style="font-size: 11px;">SKOR
                                                                90
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">
                                                            Mampu bekerja sama dengan
                                                            baik<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor6_4" name="skor6" value="120">
                                                            <label class="form-check-label" for="skor6_4" style="font-size: 11px;">SKOR
                                                                120</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End: B. KERJASAMA -->
                                    <hr style="background: radial-gradient(black, #0000ff 100%), var(--bs-gray);">
                                </div>
                            </div><!-- End: KOMUNIKASI -->
                            <!-- Start: MANAJEMEN -->
                            <div class="container mt-5" style="background: var(--bs-white);">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">III. MANAJEMEN (bobot nilai 30)<br></h5>
                                    </div><!-- Start: A. FLEKSIBILITAS -->
                                    <div class="card-body mb-4">
                                        <h5 class="text-center"><strong>A. FLEKSIBILITAS</strong><br></h5>
                                        <p class="text-center card-text text-muted">
                                            Kemauan dan kemampuan karyawan untuk menyesuaikan
                                            dengan perubahan tugas dalam pekerjaan<br>
                                        </p>
                                        <hr>
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="text-center card-text"><strong>Keterangan :</strong><br>Bila pekerjaan sedemikian
                                                    banyak atau karena sesuatu hal tidak dapat hadir dibutuhkan seseorang untuk
                                                    menyelesaikan tugasnya<br><strong>Penilaian :</strong><br>Melalui pengamatan<br></p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">
                                                            Tidak mau
                                                            membantu<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor7_1" name="skor7" value="30">
                                                            <label class="form-check-label" for="skor7_1" style="font-size: 11px;">SKOR
                                                                30
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Sering tidak mau
                                                            membantu<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor7_2" name="skor7" value="60">
                                                            <label class="form-check-label" for="skor7_2" style="font-size: 11px;">SKOR
                                                                60<br>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Mau membantu bila
                                                            diminta<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor7_3" name="skor7" value="90">
                                                            <label class="form-check-label" for="skor7_3" style="font-size: 11px;">SKOR
                                                                90
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Secara spontan mau
                                                            membantu<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor7_4" name="skor7" value="120">
                                                            <label class="form-check-label" for="skor7_4" style="font-size: 11px;">SKOR
                                                                120
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End: A. FLEKSIBILITAS -->
                                    <hr style="background: radial-gradient(black, #0000ff 100%), var(--bs-gray);">
                                    <!-- Start: B. ORGANISASI -->
                                    <div class="card-body mb-4">
                                        <h5 class="text-center"><strong>B. ORGANISASI</strong><br></h5>
                                        <p class="text-center card-text text-muted">Kemampuan untuk mengelola dan mengatur tugas dan waktu
                                            sehingga tanggung jawab dalam pekerjaan dapat diselesaikan dengan baik<br></p>
                                        <hr>
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="text-center card-text"><strong>Penilaian :</strong><br>Melalui pengamatan apakah
                                                    seorang karyawan dapat mengatur dan menyelesaikan tugasnya tepat waktu.<br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Tidak mampu mengatur waktu
                                                            dan tugas (selalu tidak mampu menyelesaikan pekerjaan)<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex align-items-center justify-content-sm-center align-items-sm-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor8_1" name="skor8" value="30">
                                                            <label class="form-check-label" for="skor8_1" style="font-size: 11px;">SKOR
                                                                30
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Kurang mampu mengatur waktu
                                                            dan tugas<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor8_2" name="skor8" value="60">
                                                            <label class="form-check-label" for="skor8_2" style="font-size: 11px;">SKOR
                                                                60
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Cukup mampu mengatur waktu
                                                            dan tugas<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor8_3" name="skor8" value="90">
                                                            <label class="form-check-label" for="skor8_3" style="font-size: 11px;">SKOR
                                                                90
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col col-sm-10">
                                                        <label class="col-form-label">Mampu mengatur waktu dan
                                                            tugas<br>
                                                        </label>
                                                    </div>
                                                    <div class="col d-flex justify-content-center align-items-center col-sm-2">
                                                        <div class="form-check form-check-inline text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                                                            <input class="form-check-input" type="radio" id="skor8_4" name="skor8" value="120">
                                                            <label class="form-check-label" for="skor8_4" style="font-size: 11px;">SKOR
                                                                120
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End: B. ORGANISASI -->
                                </div>
                            </div><!-- End: MANAJEMEN -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12 d-xxl-flex justify-content-xxl-center align-items-xxl-center mt-3">
                                        <textarea name="catatan_khusus" id="catatan_khusus" cols="30" rows="10" style="width: 100%" placeholder="Catatan Khusus"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="card d-xxl-flex justify-content-xxl-end align-items-xxl-center" style="height: 214.8px;">
                                            <div class="card-body">
                                                <h4 class="card-title mb-5">Dinilai Oleh</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-5 mb-5 d-grid">
                                {{-- <input type="submit" name="submit" value="submit"> --}}
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
                        <script src="{{ asset('frm_skor/assets/js/script.min.js?h=8575bd7ce4476bbf8d8dcfddeb6bea58') }}"></script>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
