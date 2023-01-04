<div class="container-fluid mt-3">
    <main class="border rounded">
        <div class="card">
            <div class="card-header bg-light">
                <h5 class="text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center mb-0">FORM PENILAIAN KARYAWAN</h5>
            </div>
            <div class="card-body">
                @foreach($penilai as $p)
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <!-- Start: Input-text floating-labels -->
                        <div class="text-capitalize text-center form-floating mb-3" style="border-radius: 0;">
                            <input class="bg-white form-control-sm form-control" type="text" readonly="" name="nama_karyawan" value="{{ $p->karyawan->nama_karyawan }}">
                            <label class="form-label text-capitalize" for="floatingInput">Nama Karyawan</label>
                        </div>
                        <!-- End: Input-text floating-labels -->
                        <!-- Start: Input-text floating-labels -->
                        <div class="form-floating mb-3">
                            <input class="bg-white form-control-sm form-control" type="text" readonly="" name="jkel" value="{{ $p->karyawan->jkel }}">
                            <label class="form-label text-capitalize" for="floatingInput">jenis kelamin</label>
                        </div>
                        <!-- End: Input-text floating-labels -->
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <!-- Start: Input-text floating-labels -->
                        <div class="text-capitalize text-center form-floating mb-3">
                            <input class="bg-white form-control-sm form-control" type="text" readonly="" name="nik" value="{{ $p->karyawan->nik }}">
                            <label class="form-label text-uppercase" for="floatingInput">NIK</label>
                        </div>
                        <!-- End: Input-text floating-labels -->
                        <!-- Start: Input-text floating-labels -->
                        <div class="form-floating mb-3">
                            <input class="bg-white form-control-sm form-control" type="text" readonly="" name="nama_unit" value="{{ $p->karyawan->unit->nama_unit }}">
                            <label class="form-label text-capitalize" for="floatingInput">Unit / bagian / instalasi</label>
                        </div>
                        <!-- End: Input-text floating-labels -->
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <!-- Start: Input-text floating-labels -->
                        <div class="form-floating mb-3">
                            <input class="bg-white form-control-sm form-control" type="text" readonly="" name="kode_penilai" value="{{ $p->kode_penilai }}">
                            <label class="form-label text-capitalize" for="floatingInput">kode penilai</label>
                        </div>
                        <!-- End: Input-text floating-labels -->
                        <!-- Start: Input-text floating-labels -->
                        <div class="form-floating mb-3">
                            <input class="bg-white form-control-sm form-control" type="text" readonly="" name="nama_penilai" value="{{ $p->nama_penilai }}">
                            <label class="form-label text-capitalize" for="floatingInput">nama penilai</label>
                        </div>
                        <!-- End: Input-text floating-labels -->
                    </div>
                </div>
                @endforeach
