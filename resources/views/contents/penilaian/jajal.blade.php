<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>TEST</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <p>cari data</p>
                <form action="/skor/generate" method="GET">
                    <input type="text" name="generate" id="generate" value="{{ old('generate') }}" placeholder="kode penilai">
                    <input type="submit" id="generate" value="generate">
                </form>
            </div>
        </div>
        <form action="/penilaian/store" method="POST">
            @csrf
            <div class="row mt-5">
                <div class="col">
                    @foreach($penilai as $p)
                    <input type="text" name="penilai_id" id="penilai_id" value="{{ $p->kode_penilai }}">
                    @endforeach
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <input type="text" name="golongan" id="golongan" placeholder="golongan">
                    <input type="text" name="periode" id="periode" placeholder="periode">
                </div>
            </div>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>
</html>
