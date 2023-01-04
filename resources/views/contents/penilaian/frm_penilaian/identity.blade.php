<div class="card mb-3">
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
                        <label class="form-label d-md-flex justify-content-md-center align-items-md-center" for="floatingInput">UNIT / BAGIAN / INSTALASI</label>
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
                        <input type="text" class="form-control" placeholder="HGsOFT" name="kode_penilai" value="{{ $p->kode_penilai }}" readonly>
                        <label class="form-label" for="floatingInput">KODE PENILAI</label>
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
