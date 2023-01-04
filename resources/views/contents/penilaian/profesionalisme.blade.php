<div class="card-group">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">I. Profesionalisme (bobot nilai 40)</h5>
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
                        <td rowspan="4"><b>A. Kehadiran</b><br>
                            <p>Kemampuan untuk hadir dan bekerja dalam pekerjaan</p>
                        </td>
                        <td rowspan="4">Keterlambatan diberi toleransi sampai dengan 5 menit
                            Penilaian dilakukan dengan melihat daftar hadir karyawan
                        </td>
                        <td>
                            Tidak hadir tanpa keterangan 1 hari atau lebih dalam 1 tahun
                        </td>
                        <td>1</td>
                        @if($penilaian->skor1==40)
                        <td>{{ $penilaian->skor1 }}</td>
                        @else
                        <td> </td>
                        @endif
                        <td rowspan="4" align="center">{{ $penilaian->catatan1 }}</td>
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Tidak hadir dengan ijin (bukan karena sakit) lebih dari 6 hari dalam 1 tahun</td>
                        <td>2</td>
                        @if($penilaian->skor1==80)
                        <td>{{ $penilaian->skor1 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Terlambat datang lebih 12 kali dalam 1 tahun</td>
                        <td>3</td>
                        @if($penilaian->skor1==120)
                        <td>{{ $penilaian->skor1 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Selalu hadir dalam pekerjaan & tidak
                            pernah datang terlambat
                            </td>
                        <td>4</td>
                        @if($penilaian->skor1==160)
                        <td>{{ $penilaian->skor1 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                </tbody>
                <tbody align="center">
                    <tr class="table align-middle justify-center">
                        <td rowspan="4"><b>B. KEMAMPUAN BEKERJA</b><br>
                            <p>Memahami dan menguasai bidang pekerjaannya sesuai prosedur tetap</p>
                        </td>
                        <td rowspan="4">Penilaian dilakukan dengan melihat kemampuan karyawan dalam melaksanakan pekerjaan sesuai dengan protap
                        </td>
                        <td>
                            Tidak mampu melakukan tugasnya
                        </td>
                        <td>1</td>
                        @if($penilaian->skor2==40)
                        <td>{{ $penilaian->skor2 }}</td>
                        @else
                        <td> </td>
                        @endif
                        <td rowspan="4" align="center">{{ $penilaian->catatan2 }}</td>
                    </tr>
                    <tr>
                        <td>Kurang mampu melakukan tugasnya</td>
                        <td align="center">2</td>
                        @if($penilaian->skor2==80)
                        <td>{{ $penilaian->skor2 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Cukup mampu melaksanakan tugasnya</td>
                        <td align="center">3</td>
                        @if($penilaian->skor2==120)
                        <td>{{ $penilaian->skor2 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Mampu melaksanakan  tugasnya.dengan baik </td>
                        <td align="center">4</td>
                        @if($penilaian->skor2==160)
                        <td>{{ $penilaian->skor2 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                </tbody>
                <tbody align="center">
                    <tr class="table align-middle justify-center">
                        <td rowspan="4"><b>C. KEPATUHAN</b><br>
                            <p>Sejauh mana karyawan mematuhi instruksi dan memenuhi tanggung jawabnya baik terhadap unit/seksi nya maupun terhadap peraturan rumah sakit.</p>
                        </td>
                        <td rowspan="4">Penilaian dilakukan dengan mengamati kepatuhan karyawan terhadap instruksi dan peraturan-peraturan baik di unit/seksi maupun rumah sakit
                        </td>
                        <td>
                            Tidak pernah mematuhi peraturan dan memenuhi tanggung jawabnya di unit maupun rumah sakit
                        </td>
                        <td align="center">1</td>
                        @if($penilaian->skor3==40)
                        <td>{{ $penilaian->skor3 }}</td>
                        @else
                        <td> </td>
                        @endif
                        <td rowspan="4" align="center">{{ $penilaian->catatan3 }}</td>
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Sering tidak mematuhi</td>
                        <td align="center">2</td>
                        @if($penilaian->skor3==80)
                        <td>{{ $penilaian->skor3 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Kadang-kadang tidak mematuhi</td>
                        <td align="center">3</td>
                        @if($penilaian->skor3==120)
                        <td>{{ $penilaian->skor3 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Selalu mematuhi</td>
                        <td align="center">4</td>
                        @if($penilaian->skor3==160)
                        <td>{{ $penilaian->skor3 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                </tbody>
                <tbody align="center">
                    <tr class="table align-middle justify-center">
                        <td rowspan="4"><b>D. INISIATIF</b><br>
                            <p>Kemampuan melakukan tindakan tanpa supervisi, secara benar dan penuh tanggung jawab</p>
                        </td>
                        <td rowspan="4">Penilaian dilakukan dengan mengamati reaksi  karyawan untuk bertindak  dalam mengatasi masalah yang timbul dalam pekerjannya.
                        </td>
                        <td>
                            Tidak peka terhadap masalah yang timbul yang seharusnya menjadi perhatian dan tanggung jawabnya.
                        </td>
                        <td align="center">1</td>
                        @if($penilaian->skor4==40)
                        <td>{{ $penilaian->skor4 }}</td>
                        @else
                        <td> </td>
                        @endif
                        <td rowspan="4" align="center">{{ $penilaian->catatan4 }}</td>
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Sering tidak peka untuk  bertindak dalam mengatasi masalah yang timbul </td>
                        <td align="center">2</td>
                        @if($penilaian->skor4==80)
                        <td>{{ $penilaian->skor4 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Kadang-kadang kurang peka untuk mengatasi masalah yang timbul</td>
                        <td align="center">3</td>
                        @if($penilaian->skor4==120)
                        <td>{{ $penilaian->skor4 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Peka dan cepat bertindak untuk mengatasi masalah</td>
                        <td align="center">4</td>
                        @if($penilaian->skor4==160)
                        <td>{{ $penilaian->skor4 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-end">
            <h5>Skor Profesionalisme  ( I ) = {{ $penilaian->skor1+$penilaian->skor2+$penilaian->skor3+
                                                    $penilaian->skor4 }}</h5>
        </div>
    </div>
</div>
