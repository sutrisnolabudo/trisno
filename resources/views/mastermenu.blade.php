<!DOCTYPE html>
<html lang="en">
<head>`
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/custom.css') !!}
    {!! Html::script('js/jquery-2.1.3.min.js')!!}
    {!! Html::script('js/bootstrap.min.js')!!}
    {!! Html::script('js/respond.js')!!}
    {!! Html::script('js/select2.min.js')!!}


    {{--<link href="/css/app.css" rel="stylesheet">--}}
    {{--<script src="js/respond.js"></script>--}}
</head>
<body>


<header>

    <div class="navbar navbar-inverse navbar-fixed-top">

        <div class="container"> <!--Just to centre-->

            <div class="navbar-header">
                <a href="{{url('/')}}" class="navbar-brand"> JFK SCHOOL </a>

                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="glyphicon glyphicon-camera" style="color: #46b8da"></span>

                </button>
            </div> <!--Nav Header-->

            <div class="collapse navbar-collapse navHeaderCollapse">

                <ul class="nav navbar-nav navbar-right">

                    //<li class="{{url('/')}}"><a href="{{url('/')}}">Home</a></li>

                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Profil <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="background-color: rgba(8, 8, 8, 0);">
                            <li><a id="sutrisno" href="{{ url('/sejarah') }}"> Sejarah </a></li>
                            <li><a id="sutrisno" href= "{{ url('/visimisi') }}"> Visi Dan Misi </a></li>
                            <li><a id="sutrisno" href="{{ url('/strukturorganisasi') }}"> Struktur Organisasi </a></li>
                            <li><a id="sutrisno" href="{{ url('/fasilitas') }}"> Fasilitas </a></li>
                            <li><a id="sutrisno" href="{{ url('/profilguru') }}"> Profil Guru </a></li>
                        </ul>


                    </li>
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Akademik <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="background-color: rgba(8, 8, 8, 0);">
                            <li><a id="sutrisno" href="{{ url('/kalenderpendidikan') }}"> Kalender Pendidikan </a></li>
                            <li><a id="sutrisno" href= "{{ url('/kurikulum') }}"> Kurikulum </a></li>
                        </ul>


                    </li>
                    <li class="dropdown">

                        <a href="#"class="dropdown-toggle" data-toggle="dropdown"> Kesiswaan <b class="caret"></b> </a>
                        <ul class="dropdown-menu" style="background-color: rgba(8, 8, 8, 0);">
                            <li><a id="sutrisno" href=" {{ url('/jabatan') }} "> Program Kesiswaan </a></li>
                            <li><a id="sutrisno" href= "{{ url('/divisi') }}"> Prestasi Siswa </a></li>
                            <li><a id="sutrisno" href= "{{ url('/divisi') }}"> Ekstrakurikuler </a></li>
                            <li><a id="sutrisno" href= "{{ url('/divisi') }}"> Liputan Media </a></li>
                        </ul>


                    </li>
                    <li class="dropdown">

                        <a href="#"class= data-toggle="dropdown"> Galeri Foto <b class="caret"></b> </a>
                        <ul class= style="background-color: rgba(8, 8, 8, 0);">

                        </ul>


                    </li>
                    <li></li>
                    <li><a href="{{ url('/menupendaftaran') }}"> Menu Pendaftaran <span></span></a></li>

                </u

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="/"></a>Latest</li>
                </ul>

            </div> <!— Navbar Collapse —>

        </div> <!--Container-->

    </div> <!— Navbar Start — Line 13-->
</header>


<section class="container" style="margin-top: 20px">
    <div class="row" style="margin-top: 20px">



    </div>

    <div class="content row" style="margin-top: 20px">


        @yield('content')



    </div> <!— Content —>

    <div class="col-md-4" style="margin-top: 20px">
        @yield('column1')
    </div>


    <div class="col-md-4">
        @yield('column2')
    </div>

    <div class="row">
        @yield('footer')
    </div>



</section>



<!— Scripts —>



<footer class="row">

    @yield('footer')

</footer>

</body>
</html>