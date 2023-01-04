<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daevanion.app | Penilaian</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>Daevanion</b>.app</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Masukkan Kode Penilaian</p>

                <form action="/skor/generate" method="get">
                    <div class="input-group mb-3">
                        <input type="test" class="form-control" name="generate" placeholder="kode penilai.." value="{{ old('generate') }}" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-code-branch"></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="/" class="btn btn-primary" type="button"><i class="fas fa-arrow-left"></i> KEMBALI</a href="/">
                        <button class="btn btn-success" type="submit">SUBMIT <i class="fas fa-arrow-right"></i></button>
                      </div>
                    {{-- <input type="submit"  value="SUBMIT"> --}}
                    <!-- /.col -->
                    {{-- <div class="col-5">
                        <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-arrow-alt-circle-down"></i> GENERATE</button>
                    </div> --}}
                    <!-- /.col -->
                </form>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('adminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminLTE/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
