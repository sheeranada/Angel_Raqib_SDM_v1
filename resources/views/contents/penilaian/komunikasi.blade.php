<div class="card-group">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">II. KOMUNIKASI (bobot nilai 30)  </h5>
            <hr>
            <table class="table table-bordered table-responsive table-sm">
                <thead align="center">
                    <tr>
                        <th colspan="2">Keterangan</th>
                        <th>Kriteria</th>
                        <th>Nilai</th>
                        <th>Skor</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <tr class="table align-middle justify-center">
                        <td rowspan="4"><b>A. HUBUNGAN ANTAR MANUSIA</b><br>
                            <p>Sikap bersahabat dan memahami orang lain serta mengerti pentingnya konsep tim.</p>
                        </td>
                        <td rowspan="4">Penilaian dilakukan dengan mengamati perilaku karyawan dalam berhubungan dengan orang lain (atasan, teman dan pasien/keluarganya)</td>
                        <td>Acuh terhadap orang lain (atasan, teman atau pasien/keluarganya)</td>
                        <td>1</td>
                        @if($penilaian->skor5==30)
                        <td>{{ $penilaian->skor5 }}</td>
                        @else
                        <td> </td>
                        @endif
                        <td rowspan="4" align="center">{{ $penilaian->catatan5 }}</td>
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Sering acuh terhadap orang lain.</td>
                        <td>2</td>
                        @if($penilaian->skor5==60)
                        <td>{{ $penilaian->skor5 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Kadang-kadang kurang memperhatikan orang lain</td>
                        <td>3</td>
                        @if($penilaian->skor5==90)
                        <td>{{ $penilaian->skor5 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Mempunyai perhatian yang baik kepada orang lain</td>
                        <td>4</td>
                        @if($penilaian->skor5==120)
                        <td>{{ $penilaian->skor5 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                </tbody>
                <tbody align="center">
                    <tr class="table align-middle justify-center">
                        <td rowspan="4"><b>B. KERJASAMA</b><br>
                            <p>Kemampuan dan kemauan untuk bekerja sama secara harmoni dengan yang lain dalam mempertahankan dan meningkatkan keberhasilan.</p>
                        </td>
                        <td rowspan="4">Penilaian dilakukan dengan mengamati perilaku karyawan dalan bekerja sama dengan karyawan yang lain</td>
                        <td>Tidak mampu bekerja sama</td>
                        <td>1</td>
                        @if($penilaian->skor6==30)
                        <td>{{ $penilaian->skor6 }}</td>
                        @else
                        <td> </td>
                        @endif
                        <td rowspan="4" align="center">{{ $penilaian->catatan6 }}</td>
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Hanya mampu bekerja sama dengan orang tertentu</td>
                        <td align="center">2</td>
                        @if($penilaian->skor6==60)
                        <td>{{ $penilaian->skor6 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Cukup baik dalam bekerja sama dengan yang lain</td>
                        <td align="center">3</td>
                        @if($penilaian->skor6==90)
                        <td>{{ $penilaian->skor6 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Mampu bekerja sama dengan baik</td>
                        <td align="center">4</td>
                        @if($penilaian->skor6==120)
                        <td>{{ $penilaian->skor6 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-end">
            <h5>Skor Komunikasi  ( II ) = {{ $penilaian->skor5+$penilaian->skor6 }}</h5>
        </div>
    </div>
</div>
