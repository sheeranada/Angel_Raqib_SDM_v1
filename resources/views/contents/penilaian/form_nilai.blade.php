<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Daevanion.app | Form Penilaian</title>
    <meta property="og:type" content="website">
    <meta name="description" content="www.warnabiru.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('main/css/styles.min.css?h=966915b6f1387f1c7be22239bcc60e54') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body style="background: var(--bs-gray-200);">
    <!-- Start: Black Navbar -->
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-fixed-top navigation-clean-button" style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;">
        <div class="container">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <a class="navbar-brand" href="/">
                    <span>Daevanion.app</span> </a>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                <ul class="navbar-nav nav-right">
                    <li class="nav-item">
                        <a class="nav-link active" href="/" style="color: rgba(224,217,217,0.9);">home </a>
                    </li>
                </ul><!-- Start: Actions -->
                <p class="ms-auto navbar-text actions">
                    <a class="login text-capitalize" href="" style="color: rgba(224,217,217,0.9);"><span class="text-uppercase text-muted">Login sebagai |</span> {{ auth()->user()->name }}</a>
                    <a class="btn btn-light action-button" role="button" href="{{ route('logout') }}" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;"><small><i class="ionicons ion-log-out"></i> LOGOUT</small> </a>
                </p><!-- End: Actions -->
            </div>
        </div>
    </nav><!-- End: Black Navbar -->
    <div class="container-sm" style="background: var(--bs-white);">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-uppercase text-center mt-3">FORM PENILAIAN KARYAWAN</h4>
                        <hr>
                    </div>
                </div>
                @foreach($penilai as $p)
                <form action="/penilaian/store" method="POST" class="was-validated">
                    @csrf
                    <div class="row">
                        {{-- tanggal --}}
                        <div class="col-sm-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input class="form-control-sm form-control" type="datetime-local" name="tanggal_penilaian" id="tanggal_penilaian" required>
                                <div class="valid-feedback">OK..</div>
                                <div class="invalid-feedback">Tanggal tidak boleh kosong.</div>
                                <label for="tanggal_penilaian" class="form-label" style="font-family: Alice, serif;font-size: 14px;">Tanggal Penilaian</label>
                            </div>
                        </div>
                        {{-- end tanggal --}}
                        <!-- Start: KODE PENILAI -->
                        <div class="col-sm-12 col-md-4">
                            <!-- Start: kode penilai -->
                            <div class="mb-3">
                                <small style="font-size: 12px;">KODE PENILAI</small>
                                <div class="input-group">
                                    <span class="bg-white input-group-text InputBorder"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-bounding-box">
                                            <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z">
                                            </path>
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input class="form-control form-control-sm InputBorder" type="email" placeholder="Your e-mail" style="/*border: 0;*//*border-width: 0 0 1px 0;*//*border-color: black;*//*border-radius: 0;*/background: var(--bs-white);" readonly="" value="{{ $p->kode_penilai }}">
                                </div>
                            </div><!-- End: kode penilai -->
                        </div>
                        <!-- End: KODE PENILAI -->



                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Start: nama karyawan -->
                            <div class="form-floating mb-3">
                                <input class="form-control-sm form-control" type="text" placeholder="HGsOFT" readonly="" style="background: var(--bs-white);" value="{{ $p->karyawan->nama_karyawan }}">
                                <label class="form-label" for="floatingInput" style="font-family: Alice, serif;font-size: 14px;">
                                    Nama Karyawan
                                </label>
                            </div><!-- End: nama karyawan -->
                            <!-- Start: jkel -->
                            <div class="form-floating mb-3"><input class="form-control-sm form-control" type="text" placeholder="HGsOFT" readonly="" style="background: var(--bs-white);" value="{{ $p->karyawan->jkel }}"><label class="form-label" for="floatingInput" style="font-family: Alice, serif;font-size: 14px;">Jenis Kelamin</label></div>
                            <!-- End: jkel -->
                        </div>
                        <div class="col-md-4">
                            <!-- Start: unit / bagian -->
                            <div class="form-floating mb-3"><input class="form-control-sm form-control" type="text" placeholder="HGsOFT" readonly="" style="background: var(--bs-white);" value="{{ $p->karyawan->unit->nama_unit }}"><label class="form-label" for="floatingInput" style="font-family: Alice, serif;font-size: 14px;">Unit / Bagian
                                    / Instalasi</label></div><!-- End: unit / bagian -->
                            <!-- Start: nik -->
                            <div class="form-floating mb-3"><input class="form-control-sm form-control" type="text" placeholder="HGsOFT" readonly="" style="background: var(--bs-white);" value="{{ $p->karyawan->nik }}"><label class="form-label" for="floatingInput" style="font-family: Alice, serif;font-size: 14px;">NIK</label></div>
                            <!-- End: nik -->
                        </div>
                        <div class="col-md-4">
                            <!-- Start: id penilai -->
                            <div class="form-floating mb-3">
                                <input name="penilai_id" class="form-control-sm form-control" type="text" placeholder="HGsOFT" readonly="" style="background: var(--bs-white);" value="{{ $p->id }}">
                                <label class="form-label" for="floatingInput" style="font-family: Alice, serif;font-size: 14px;">
                                    ID Penilai
                                </label>
                            </div><!-- End: id penilai -->
                            <!-- Start: nama penilai -->
                            <div class="form-floating mb-3"><input class="form-control-sm form-control" type="text" placeholder="HGsOFT" readonly="" style="background: var(--bs-white);" value="{{ $p->nama_penilai }}"><label class="form-label" for="floatingInput" style="font-family: Alice, serif;font-size: 14px;">Nama Penilai</label></div>
                            <!-- End: nama penilai -->
                        </div>
                    </div>
                    @endforeach
            </div>
            <hr style="background: var(--bs-dark);height: 3px;"><!-- Start: profesionalisme tabs-kehadiran -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <div class="card" style="border-color: var(--bs-blue);">
                            <div class="card-header text-center d-inline-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="background: var(--bs-blue);">
                                <h6 class="text-uppercase text-center mb-0" style="color: var(--bs-white);">I.
                                    Profesionalisme<span>&nbsp; &nbsp;</span><br></h6><span class="badge rounded-pill bg-success">BOBOT NILAI 40</span>
                            </div>
                            <div class="card-body text-center" style="background: var(--bs-white);">
                                <div class="card-title">
                                    <h5 class="text-uppercase" style="text-decoration:  underline;"><strong>A.
                                            Kehadiran</strong><br></h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p class="text-uppercase mb-0" style="font-size: 15px;">Kemampuan untuk
                                                hadir dan bekerja dalam pekerjaan<br></p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">Keterlambatan diberi toleransi sampai
                                            dengan 5 menit Penilaian dilakukan dengan melihat daftar hadir karyawan<br>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div><!-- Start: SKOR1.1 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Tidak hadir tanpa
                                                keterangan 1 hari atau lebih dalam 1 tahun<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-1" name="skor1" required="" value="40" title="SKOR 40"><label class="form-check-label" for="formCheck-1" style="font-weight: bold;font-size: 13px;">SKOR 40</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.1 -->
                            <!-- Start: SKOR1.2 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Tidak hadir dengan ijin
                                                (bukan karena sakit) lebih dari 6 hari dalam 1 tahun<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-2" name="skor1" value="80" required="" title="SKOR 80" checked=""><label class="form-check-label" for="formCheck-2" style="font-weight: bold;font-size: 13px;">SKOR 80</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.2 -->
                            <!-- Start: SKOR1.3 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Terlambat datang lebih
                                                12 kali dalam 1 tahun<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-3" name="skor1" value="120" required="" title="SKOR 120" checked=""><label class="form-check-label" for="formCheck-3" style="font-weight: bold;font-size: 13px;">SKOR 120</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.3 -->
                            <!-- Start: SKOR1.4 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Selalu hadir dalam
                                                pekerjaan &amp; tidak pernah datang terlambat<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-4" name="skor1" value="160" required="" title="SKOR 160" checked=""><label class="form-check-label" for="formCheck-4" style="font-weight: bold;font-size: 13px;">SKOR 160</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.4 -->
                        </div>
                    </div>
                </div>
            </div><!-- End: profesionalisme tabs-kehadiran -->
            <!-- Start: profesionalisme tabs-kemampuan bekerja -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <div class="card" style="border-color: var(--bs-blue);">
                            <div class="card-body text-center" style="background: var(--bs-white);">
                                <div class="card-title">
                                    <h5 class="text-uppercase" style="text-decoration:  underline;"><strong>B. KEMAMPUAN
                                            BEKERJA</strong><br></h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p class="text-uppercase mb-0" style="font-size: 15px;">Memahami dan
                                                menguasai bidang pekerjaannya sesuai prosedur tetap<br></p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">Penilaian dilakukan dengan melihat
                                            kemampuan karyawan dalam melaksanakan pekerjaan sesuai dengan protap<br>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div><!-- Start: SKOR2.1 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Tidak mampu melakukan
                                                tugasnya<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-5" name="skor2" required="" value="40" title="SKOR 40"><label class="form-check-label" for="formCheck-5" style="font-weight: bold;font-size: 13px;">SKOR 40</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.1 -->
                            <!-- Start: SKOR2.2 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Kurang mampu melakukan
                                                tugasnya<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-6" name="skor2" value="80" required="" title="SKOR 80" checked=""><label class="form-check-label" for="formCheck-6" style="font-weight: bold;font-size: 13px;">SKOR 80</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.2 -->
                            <!-- Start: SKOR2.3 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10">
                                            <label class="form-label">Cukup mampu melaksanakan
                                                tugasnya<br>
                                            </label>
                                        </div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-7" name="skor2" value="120" required="" title="SKOR 120" checked=""><label class="form-check-label" for="formCheck-7" style="font-weight: bold;font-size: 13px;">SKOR 120</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.3 -->
                            <!-- Start: SKOR2.4 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Mampu melaksanakan
                                                tugasnya.dengan baik<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-8" name="skor2" value="160" required="" title="SKOR 160" checked=""><label class="form-check-label" for="formCheck-8" style="font-weight: bold;font-size: 13px;">SKOR 160</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.4 -->
                        </div>
                    </div>
                </div>
            </div><!-- End: profesionalisme tabs-kemampuan bekerja -->
            <!-- Start: profesionalisme tabs-kepatuhan -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <div class="card" style="border-color: var(--bs-blue);">
                            <div class="card-body text-center" style="background: var(--bs-white);">
                                <div class="card-title">
                                    <h5 class="text-uppercase" style="text-decoration:  underline;"><strong>C.
                                            KEPATUHAN</strong><br></h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p class="text-uppercase mb-0" style="font-size: 15px;">Sejauh mana karyawan
                                                mematuhi instruksi dan memenuhi tanggung jawabnya baik terhadap
                                                unit/seksi nya maupun terhadap peraturan rumah sakit.<br></p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">Penilaian dilakukan dengan mengamati
                                            kepatuhan karyawan terhadap instruksi dan peraturan-peraturan baik di
                                            unit/seksi maupun rumah sakit<br></figcaption>
                                    </figure>
                                </div>
                            </div><!-- Start: SKOR2.1 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Tidak pernah mematuhi
                                                peraturan dan memenuhi tanggung jawabnya di unit maupun rumah
                                                sakit<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-9" name="skor3" required="" value="40" title="SKOR 40"><label class="form-check-label" for="formCheck-9" style="font-weight: bold;font-size: 13px;">SKOR 40</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.1 -->
                            <!-- Start: SKOR2.2 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Sering tidak
                                                mematuhi<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-10" name="skor3" value="80" required="" title="SKOR 80" checked=""><label class="form-check-label" for="formCheck-10" style="font-weight: bold;font-size: 13px;">SKOR 80</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.2 -->
                            <!-- Start: SKOR2.3 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Kadang-kadang tidak
                                                mematuhi<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-11" name="skor3" value="120" required="" title="SKOR 120" checked=""><label class="form-check-label" for="formCheck-11" style="font-weight: bold;font-size: 13px;">SKOR 120</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.3 -->
                            <!-- Start: SKOR2.4 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Selalu
                                                mematuhi<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-12" name="skor3" value="160" required="" title="SKOR 160" checked=""><label class="form-check-label" for="formCheck-12" style="font-weight: bold;font-size: 13px;">SKOR 160</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.4 -->
                        </div>
                    </div>
                </div>
            </div><!-- End: profesionalisme tabs-kepatuhan -->
            <!-- Start: profesionalisme tabs-inisiatif -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <div class="card" style="border-color: var(--bs-blue);">
                            <div class="card-body text-center" style="background: var(--bs-white);">
                                <div class="card-title">
                                    <h5 class="text-uppercase" style="text-decoration:  underline;"><strong>D.
                                            INISIATIF</strong><br></h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p class="text-uppercase mb-0" style="font-size: 15px;">Kemampuan melakukan
                                                tindakan tanpa supervisi, secara benar dan penuh tanggung jawab<br></p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">Penilaian dilakukan dengan mengamati
                                            reaksi karyawan untuk bertindak dalam mengatasi masalah yang timbul dalam
                                            pekerjannya.<br></figcaption>
                                    </figure>
                                </div>
                            </div><!-- Start: SKOR2.1 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Tidak peka terhadap
                                                masalah yang timbul yang seharusnya menjadi perhatian dan tanggung
                                                jawabnya.<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-13" name="skor4" required="" value="40" title="SKOR 40"><label class="form-check-label" for="formCheck-13" style="font-weight: bold;font-size: 13px;">SKOR 40</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.1 -->
                            <!-- Start: SKOR2.2 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Sering tidak peka untuk
                                                bertindak dalam mengatasi masalah yang timbul<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-14" name="skor4" value="80" required="" title="SKOR 80" checked=""><label class="form-check-label" for="formCheck-14" style="font-weight: bold;font-size: 13px;">SKOR 80</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.2 -->
                            <!-- Start: SKOR2.3 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Kadang-kadang kurang
                                                peka untuk mengatasi masalah yang timbul<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-15" name="skor4" value="120" required="" title="SKOR 120" checked=""><label class="form-check-label" for="formCheck-15" style="font-weight: bold;font-size: 13px;">SKOR 120</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.3 -->
                            <!-- Start: SKOR2.4 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Peka dan cepat bertindak
                                                untuk mengatasi masalah<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-16" name="skor4" value="160" required="" title="SKOR 160" checked=""><label class="form-check-label" for="formCheck-16" style="font-weight: bold;font-size: 13px;">SKOR 160</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.4 -->
                        </div>
                    </div>
                </div>
                <hr style="background: var(--bs-gray-100);height: 3px;">
            </div><!-- End: profesionalisme tabs-inisiatif -->
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row"></div>
    </div>
    <div class="container-sm" style="background: var(--bs-white);">
        <div class="row">
            <!-- Start: komunikasi tabs-hubungan antar manusia -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <div class="card" style="border-color: var(--bs-blue);">
                            <div class="card-header text-center d-inline-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="background: var(--bs-blue);">
                                <h6 class="text-uppercase text-center mb-0" style="color: var(--bs-white);">II.
                                    KOMUNIKASI&nbsp;&nbsp;<br></h6><span class="badge rounded-pill bg-success">BOBOT
                                    NILAI 30</span>
                            </div>
                            <div class="card-body text-center" style="background: var(--bs-white);">
                                <div class="card-title">
                                    <h5 class="text-uppercase" style="text-decoration:  underline;"><strong>A. HUBUNGAN
                                            ANTAR MANUSIA</strong><br></h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p class="text-uppercase mb-0" style="font-size: 15px;">Sikap bersahabat dan
                                                memahami orang lain serta mengerti pentingnya konsep tim.<br></p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">Penilaian dilakukan dengan mengamati
                                            perilaku karyawan dalam berhubungan dengan orang lain (atasan, teman dan
                                            pasien/keluarganya)<br></figcaption>
                                    </figure>
                                </div>
                            </div><!-- Start: SKOR1.1 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Acuh terhadap orang lain
                                                (atasan, teman atau pasien/keluarganya)<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-17" name="skor5" required="" value="30" title="SKOR 30"><label class="form-check-label" for="formCheck-17" style="font-weight: bold;font-size: 13px;">SKOR 30</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.1 -->
                            <!-- Start: SKOR1.2 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Sering acuh terhadap
                                                orang lain.<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-18" name="skor5" value="60" required="" title="SKOR 60" checked=""><label class="form-check-label" for="formCheck-18" style="font-weight: bold;font-size: 13px;">SKOR 60</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.2 -->
                            <!-- Start: SKOR1.3 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Kadang-kadang kurang
                                                memperhatikan orang lain<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-19" name="skor5" value="90" required="" title="SKOR 90" checked=""><label class="form-check-label" for="formCheck-19" style="font-weight: bold;font-size: 13px;">SKOR 90</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.3 -->
                            <!-- Start: SKOR1.4 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Mempunyai perhatian yang
                                                baik kepada orang lain<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-20" name="skor5" value="120" required="" title="SKOR 120" checked=""><label class="form-check-label" for="formCheck-20" style="font-weight: bold;font-size: 13px;">SKOR 120</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.4 -->
                        </div>
                    </div>
                </div>
            </div><!-- End: komunikasi tabs-hubungan antar manusia -->
            <!-- Start: komunikasi tabs-kerjasama -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <div class="card" style="border-color: var(--bs-blue);">
                            <div class="card-body text-center" style="background: var(--bs-white);">
                                <div class="card-title">
                                    <h5 class="text-uppercase" style="text-decoration:  underline;"><strong>B.
                                            KERJASAMA</strong><br></h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p class="text-uppercase mb-0" style="font-size: 15px;">Kemampuan dan
                                                kemauan untuk bekerja sama secara harmoni dengan yang lain dalam
                                                mempertahankan dan meningkatkan keberhasilan.<br></p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">Penilaian dilakukan dengan mengamati
                                            perilaku karyawan dalan bekerja sama dengan karyawan yang lain<br>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div><!-- Start: SKOR2.1 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Tidak mampu bekerja
                                                sama<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-21" name="skor6" required="" value="30" title="SKOR 30"><label class="form-check-label" for="formCheck-21" style="font-weight: bold;font-size: 13px;">SKOR 30</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.1 -->
                            <!-- Start: SKOR2.2 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Hanya mampu bekerja sama
                                                dengan orang tertentu<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-22" name="skor6" value="60" required="" title="SKOR 60" checked=""><label class="form-check-label" for="formCheck-22" style="font-weight: bold;font-size: 13px;">SKOR 60</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.2 -->
                            <!-- Start: SKOR2.3 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Cukup baik dalam bekerja
                                                sama dengan yang lain<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-23" name="skor6" value="90" required="" title="SKOR 90" checked=""><label class="form-check-label" for="formCheck-23" style="font-weight: bold;font-size: 13px;">SKOR 90</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.3 -->
                            <!-- Start: SKOR2.4 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Mampu bekerja sama
                                                dengan baik<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-24" name="skor6" value="120" required="" title="SKOR 120" checked=""><label class="form-check-label" for="formCheck-24" style="font-weight: bold;font-size: 13px;">SKOR 120</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.4 -->
                        </div>
                    </div>
                </div>
                <hr style="background: var(--bs-gray-100);height: 3px;">
            </div><!-- End: komunikasi tabs-kerjasama -->
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row"></div>
    </div>
    <div class="container-sm mb-3" style="background: var(--bs-white);">
        <div class="row">
            <!-- Start: manajemen tabs-fleksibilitas -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <div class="card" style="border-color: var(--bs-blue);">
                            <div class="card-header text-center d-inline-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="background: var(--bs-blue);">
                                <h6 class="text-uppercase text-center mb-0" style="color: var(--bs-white);">III.
                                    MANAJEMEN&nbsp;&nbsp;<br></h6><span class="badge rounded-pill bg-success">BOBOT
                                    NILAI 30</span>
                            </div>
                            <div class="card-body text-center" style="background: var(--bs-white);">
                                <div class="card-title">
                                    <h5 class="text-uppercase" style="text-decoration:  underline;"><strong>A.
                                            FLEKSIBILITAS</strong><br></h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p class="text-uppercase mb-0" style="font-size: 15px;">Kemauan dan
                                                kemampuan karyawan untuk menyesuaikan dengan perubahan tugas dalam
                                                pekerjaan<br></p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer"><br><strong>Keterangan :</strong><br>Bila
                                            pekerjaan sedemikian banyak atau karena sesuatu hal tidak dapat hadir
                                            dibutuhkan seseorang untuk menyelesaikan tugasnya<br><strong>Penilaian
                                                :</strong><br>Melalui pengamatan<br></figcaption>
                                    </figure>
                                </div>
                            </div><!-- Start: SKOR1.1 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Tidak mau
                                                membantu<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-25" name="skor7" required="" value="30" title="SKOR 30"><label class="form-check-label" for="formCheck-25" style="font-weight: bold;font-size: 13px;">SKOR 30</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.1 -->
                            <!-- Start: SKOR1.2 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Sering tidak mau
                                                membantu<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-26" name="skor7" value="60" required="" title="SKOR 60" checked=""><label class="form-check-label" for="formCheck-26" style="font-weight: bold;font-size: 13px;">SKOR 60</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.2 -->
                            <!-- Start: SKOR1.3 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Mau membantu bila
                                                diminta<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-27" name="skor7" value="90" required="" title="SKOR 90" checked=""><label class="form-check-label" for="formCheck-27" style="font-weight: bold;font-size: 13px;">SKOR 90</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.3 -->
                            <!-- Start: SKOR1.4 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Secara spontan mau
                                                membantu<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-28" name="skor7" value="120" required="" title="SKOR 120" checked=""><label class="form-check-label" for="formCheck-28" style="font-weight: bold;font-size: 13px;">SKOR 120</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR1.4 -->
                        </div>
                    </div>
                </div>
            </div><!-- End: manajemen tabs-fleksibilitas -->
            <!-- Start: manajemen tabs-organisasi -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <div class="card" style="border-color: var(--bs-blue);">
                            <div class="card-body text-center" style="background: var(--bs-white);">
                                <div class="card-title">
                                    <h5 class="text-uppercase" style="text-decoration:  underline;"><strong>B.
                                            ORGANISASI</strong><br></h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p class="text-uppercase mb-0" style="font-size: 15px;">Kemampuan untuk
                                                mengelola dan mengatur tugas dan waktu sehingga tanggung jawab dalam
                                                pekerjaan dapat diselesaikan dengan baik<br></p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer"><br><strong>Penilaian
                                                :</strong><br>Melalui pengamatan apakah seorang karyawan dapat mengatur
                                            dan menyelesaikan tugasnya tepat waktu.<br></figcaption>
                                    </figure>
                                </div>
                            </div><!-- Start: SKOR2.1 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Tidak mampu mengatur
                                                waktu dan tugas (selalu tidak mampu menyelesaikan pekerjaan)<br></label>
                                        </div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-29" name="skor8" required="" value="30" title="SKOR 30"><label class="form-check-label" for="formCheck-29" style="font-weight: bold;font-size: 13px;">SKOR 30</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.1 -->
                            <!-- Start: SKOR2.2 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Kurang mampu mengatur
                                                waktu dan tugas<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-30" name="skor8" value="60" required="" title="SKOR 60" checked=""><label class="form-check-label" for="formCheck-30" style="font-weight: bold;font-size: 13px;">SKOR 60</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.2 -->
                            <!-- Start: SKOR2.3 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Cukup mampu mengatur
                                                waktu dan tugas<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-31" name="skor8" value="90" required="" title="SKOR 90" checked=""><label class="form-check-label" for="formCheck-31" style="font-weight: bold;font-size: 13px;">SKOR 90</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.3 -->
                            <!-- Start: SKOR2.4 -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-lg-center row">
                                        <div class="d-flex col-sm-10"><label class="form-label">Mampu mengatur waktu dan
                                                tugas<br></label></div>
                                        <div class="text-start text-sm-start text-md-start text-lg-center text-xl-center text-xxl-center col-sm-2">
                                            <div class="form-check"><input class="form-check-input" type="radio" data-bs-toggle="tooltip" data-bss-tooltip="" id="formCheck-32" name="skor8" value="120" required="" title="SKOR 120" checked=""><label class="form-check-label" for="formCheck-32" style="font-weight: bold;font-size: 13px;">SKOR 120</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: SKOR2.4 -->
                        </div>
                    </div>
                </div>
                <hr style="background: var(--bs-gray-100);height: 3px;">
            </div><!-- End: manajemen tabs-organisasi -->
        </div>
        <div class="container-sm">
            <div class="row">
                <textarea class="form-control-sm form-control" style="width: 100%;" name="catatan_kesimpulan" placeholder="Catatan Kesimpulan" required="" minlength="10" maxlength="254">
                </textarea>
            </div>
            <hr style="background: var(--bs-gray-100);height: 3px;">
        </div><!-- Start: 1 Row 2 Columns -->
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" style="height: 118.2px;">
                                <h6 class="text-center">DINILAI OLEH</h6>
                            </div>
                            <div class="row">
                                @foreach($penilai as $p)
                                <h6 class="text-center" style="text-decoration: underline;">{{ $p->nama_penilai }}</h6>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-grid mt-5">
                    <button class="btn btn-primary" type="submit" name="submit" value="submit">SUBMIT</button>
                    <hr style="background: var(--bs-gray-100);height: 3px;">
                </div>
            </div>
        </div><!-- End: 1 Row 2 Columns -->
    </div>
    </form><!-- Start: Footer Basic -->
    <footer class="footer-basic" style="background: var(--bs-body-color);height: 179.3px;">
        <!-- Start: Social Icons -->
        <div class="social"><a href="https://www.instagram.com/reksa_waluya/"><i class="icon ion-social-instagram-outline"></i></a><a href="https://www.youtube.com/@reksawaluya9875"><i class="icon ion-social-youtube"></i></a><a href="https://www.facebook.com/rumahsakit.reksawaluya.1"><i class="icon ion-social-facebook"></i></a>
        </div><!-- End: Social Icons -->
        <!-- Start: Links -->
        <ul class="list-inline" style="background: var(--bs-gray-dark);color: var(--bs-white);">
            <li class="list-inline-item"><a href="/">Home</a></li>
            <li class="list-inline-item"><a href="http://rsreksawaluya.id" target="_top">About</a></li>
            <li class="list-inline-item"><a href="https://wa.me/085732753897">Author</a></li>
        </ul><!-- End: Links -->
        <!-- Start: Copyright -->
        <p class="copyright">Tek-In.unit © 2023 | Daevanion.app v.01.01 [BETA]</p><!-- End: Copyright -->
    </footer><!-- End: Footer Basic -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('main/js/script.min.js?h=6dac8d294ec5d11ebfbcf6a98f7a20a5') }}"></script>
</body>

</html>
