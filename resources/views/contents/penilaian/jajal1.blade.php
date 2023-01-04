<form action="/penilaian/store" method="POST">
    @csrf
    <select name="penilai_id" id="">
        @foreach($penilai as $p)
        <option>{{ $p->kode_penilai}}</option>
        @endforeach
    </select>
    <input type="text" name="skor1" placeholder="skor1"><br>
    <input type="text" name="skor2" placeholder="skor2"><br>
    <input type="text" name="skor3" placeholder="skor3"><br>
    <input type="text" name="skor4" placeholder="skor4"><br>
    <input type="text" name="skor5" placeholder="skor5"><br>
    <input type="text" name="skor6" placeholder="skor6"><br>
    <input type="text" name="skor7" placeholder="skor7"><br>
    <input type="text" name="skor8" placeholder="skor8"><br>
    <input type="text" name="catatan_kesimpuldan" id=""><br>

    <input type="submit" name="submit" value="submit">
</form>
