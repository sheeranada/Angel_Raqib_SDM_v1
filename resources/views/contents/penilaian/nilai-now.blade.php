@include('contents.penilaian.components.nilai-now.head')
<form action="/penilaian/store" method="POST">
    @csrf
    @include('contents.penilaian.components.nilai-now.frm_identitas')
    @include('contents.penilaian.components.nilai-now.1_profesionalisme')
    @include('contents.penilaian.components.nilai-now.2_komunikasi')
    @include('contents.penilaian.components.nilai-now.3_manajemen')
    @include('contents.penilaian.components.nilai-now.footer')
</form>
