<div class="card-group">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">III. MANAJEMEN (bobot nilai 30)</h5>
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
                        <td rowspan="4"><b>A. FLEKSIBILITAS</b><br>
                            <p>Kemauan dan kemampuan karyawan untuk menyesuaikan dengan perubahan tugas dalam pekerjaan</p>
                        </td>
                        <td rowspan="4"><b>Keterangan :</b> <br>
                            Bila pekerjaan sedemikian banyak atau karena sesuatu hal tidak dapat hadir dibutuhkan seseorang untuk menyelesaikan tugasnya <br>
                            <b>Penilaian :</b> <br>
                            Melalui pengamatan
                        </td>
                        <td>Tidak mau membantu</td>
                        <td>1</td>
                        @if($penilaian->skor7==30)
                        <td>{{ $penilaian->skor7 }}</td>
                        @else
                        <td> </td>
                        @endif
                        <td rowspan="4" align="center">{{ $penilaian->catatan7 }}</td>
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Sering tidak mau membantu</td>
                        <td>2</td>
                        @if($penilaian->skor7==60)
                        <td>{{ $penilaian->skor7 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Mau membantu bila diminta</td>
                        <td>3</td>
                        @if($penilaian->skor7==90)
                        <td>{{ $penilaian->skor7 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Secara spontan mau membantu</td>
                        <td>4</td>
                        @if($penilaian->skor7==120)
                        <td>{{ $penilaian->skor7 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                </tbody>
                <tbody align="center">
                    <tr class="table align-middle justify-center">
                        <td rowspan="4"><b>B. ORGANISASI</b><br>
                            <p>Kemampuan untuk mengelola dan mengatur tugas dan waktu sehingga tanggung jawab dalam pekerjaan dapat diselesaikan dengan baik</p>
                        </td>
                        <td rowspan="4"><b>Penilaian :</b><br>
                            Melalui pengamatan apakah seorang karyawan dapat mengatur dan menyelesaikan tugasnya tepat waktu.
                        </td>
                        <td>Tidak mampu mengatur waktu dan tugas (selalu tidak mampu menyelesaikan pekerjaan)</td>
                        <td>1</td>
                        @if($penilaian->skor8==30)
                        <td>{{ $penilaian->skor8 }}</td>
                        @else
                        <td> </td>
                        @endif
                        <td rowspan="4" align="center">{{ $penilaian->catatan8 }}</td>
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Kurang mampu mengatur waktu dan tugas</td>
                        <td align="center">2</td>
                        @if($penilaian->skor8==60)
                        <td>{{ $penilaian->skor8 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Cukup mampu mengatur waktu dan tugas</td>
                        <td align="center">3</td>
                        @if($penilaian->skor8==90)
                        <td>{{ $penilaian->skor8 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                    <tr class="table align-middle justify-center">
                        <td>Mampu mengatur waktu dan tugas</td>
                        <td align="center">4</td>
                        @if($penilaian->skor8==120)
                        <td>{{ $penilaian->skor8 }}</td>
                        @else
                        <td> </td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-end">
            <h5>Skor Manajemen ( III ) = {{ $penilaian->skor7+$penilaian->skor8 }}</h5>
        </div>
    </div>
</div>
