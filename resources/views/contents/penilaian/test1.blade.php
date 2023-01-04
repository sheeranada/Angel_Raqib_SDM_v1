<table>
    <tr>
        <th>kode</th>
        <th>nama</th>
    </tr>
    @foreach($penilai as $p)
    <tr>
        <td>{{ $p->kode_penilai }}</td>
        <td>{{ $p->nama_penilai }}</td>
    </tr>
    @endforeach
</table>
