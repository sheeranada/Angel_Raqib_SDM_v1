<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    {{-- --}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- css yang digunakan ketika dalam mode screen -->
    <link href="style.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- ss yang digunakan tampilkan ketika dalam mode print -->
    <link href="print.css" rel="stylesheet" media="print">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    {{-- <script src="jquery.PrintArea.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PrintArea/2.4.1/jquery.PrintArea.min.js" integrity="sha512-mPA/BA22QPGx1iuaMpZdSsXVsHUTr9OisxHDtdsYj73eDGWG2bTSTLTUOb4TG40JvUyjoTcLF+2srfRchwbodg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        (function($) {
            // fungsi dijalankan setelah seluruh dokumen ditampilkan
            $(document).ready(function(e) {

                // aksi ketika tombol cetak ditekan
                $("#cetak").bind("click", function(event) {
                    // cetak data pada area <div id="#data-mahasiswa"></div>
                    $('#data-nilai').printArea();
                });
            });
        })(jQuery);

    </script>

    <title>Angel-Raqib.app</title>
</head>
<body>


    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <nav class="navbar navbar-expand-lg bg-light">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">RSRW-Unit SDM</a>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                    </div>
                                </div>
                                <ul class="nav justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col">
                    <div class="d-grid gap-2 d-md-block align-content-end">
                        <button id="cetak" class="btn pull-right btn-primary"><i class="bi bi-printer"></i> CETAK</button>
                        <a href="/penilaian" class="btn btn-secondary"><i class="bi bi-arrow-clockwise"></i> KEMBALI</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="data-nilai">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card mt-5">
                                <div class="card-header">
                                    <h5 class="card-title d-flex justify-content-center">LEMBAR PENILAIAN KARYAWAN</h5>
                                </div>
                                <div class="container-fluid">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-3">
                                                <div class="form-floating mb-3">
                                                    <div class="form-floating mb-1">
                                                        <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" value="{{ $penilaian->penilai->karyawan->nama_karyawan }}">
                                                        <label for="floatingPlaintextInput">Nama Karyawan</label>
                                                    </div>
                                                    <div class="form-floating mb-1">
                                                        <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" value="{{ $penilaian->penilai->karyawan->jkel }}">
                                                        <label for="floatingPlaintextInput">Jenis Kelamin</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-floating mb-3">
                                                    <div class="form-floating mb-1">
                                                        <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" value="{{ $penilaian->penilai->karyawan->nik }}">
                                                        <label for="floatingPlaintextInput">NIK</label>
                                                    </div>
                                                    <div class="form-floating mb-1">
                                                        <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" value="{{ $penilaian->penilai->karyawan->unit->nama_unit }}">
                                                        <label for="floatingPlaintextInput">Bagian / Unit / Instalasi</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-floating mb-3">
                                                    <div class="form-floating mb-1">
                                                        <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" value="{{ $penilaian->golongan }}">
                                                        <label for="floatingPlaintextInput">Golongan</label>
                                                    </div>
                                                    <div class="form-floating mb-1">
                                                        <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" value="{{ $penilaian->penilai->nama_penilai }}">
                                                        <label for="floatingPlaintextInput">Dinilai Oleh</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-floating mb-3">
                                                    <div class="form-floating mb-1">
                                                        <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" value="{{ $penilaian->periode }}">
                                                        <label for="floatingPlaintextInput">Periode</label>
                                                    </div>
                                                    <div class="form-floating mb-1">
                                                        <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" value="{{
                                                                            $penilaian->skor1+$penilaian->skor2+
                                                                            $penilaian->skor3+$penilaian->skor4+
                                                                            $penilaian->skor5+$penilaian->skor6+
                                                                            $penilaian->skor7+$penilaian->skor8
                                                                             }}">
                                                        <label for="floatingPlaintextInput">Total Skor</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- nilai --}}
                                        @include('contents.penilaian.profesionalisme') <br><br><br><br><br>
                                        @include('contents.penilaian.komunikasi') <br><br>
                                        @include('contents.penilaian.manajemen') <br><br>
                                        @include('contents.penilaian.catatan_kesimpulan') <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    {{-- jquery --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}" />

    <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>
</body>

</html>
