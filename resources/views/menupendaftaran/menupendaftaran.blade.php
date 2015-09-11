@extends('mastermenu')

@section("content")
    <div class="jumbotron">
        <h3> Selamat Datang Di Menu Pendaftaran </h3>

    </div>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"> <h5> Regulasi Pendaftaran Siswa </h5></div>
            <div class="panel-body">
                <ul>
                    <li> 1 Data-data calon siswa harus lengkap </li>
                    <li> 2 Data Orang Tua(Ayah dan Ibu) / Wali </li>

                    <a class="btn btn-primary" href="{{ url('/creatependaftaran') }}"> Klik disini untuk mendaftar <span class="glyphicon glyphicon-plus-sign"></span></a>
                </ul>
            </div>
            <div class="panel-footer"> Copyright JFK School </div>
        </div>


@endsection
