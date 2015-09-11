@extends('mastermenu')
@section('content')
    <div class="container">
        <h2 style="color:#286090"> Registrasi </h2>
        <div class="progress"> </div>
    <div class="col-md-4">
        {!! Form::open(['url' => 'savedatasiswa']) !!}
        
        
        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('tanggal', 'tanggal') !!}
            {!! Form::text('tanggal', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Form Input -->
        <h3 style="color:#985f0d"> Calon Siswa </h3>
        <div class="progress"> </div>
        <div class="form-group">
            {!! Form::label('NomorPendaftaran', 'Nomor Pendaftaran') !!}
            {!! Form::text('NomorPendaftaran', null, ['class' => 'form-control']) !!}
        </div>
        
        
        <!-- Form Input Calon Siswa -->
        <div class="form-group">
            {!! Form::label('NamaCalonSiswa', 'Nama Calon Siswa') !!}
            {!! Form::text('NamaCalonSiswa', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('TempatLahir', 'Tempat Lahir') !!}
            {!! Form::text('TempatLahir', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <p><strong> Tanggal Lahir </strong></p>
        <select aria-label="Tanggal" name="birthday_day" id="day" title="Tanggal" class="_5dba">
            <option value="0" selected="1">Tanggal</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>

        <select aria-label="Bulan" name="birthday_month" id="month" title="Bulan" class="_5dba">
            <option value="0" selected="1">Bulan</option>
            <option value="1">Jan</option>
            <option value="2">Feb</option>
            <option value="3">Mar</option>
            <option value="4">Apr</option>
            <option value="5">Mei</option>
            <option value="6">Jun</option>
            <option value="7">Jul</option>
            <option value="8">Agu</option>
            <option value="9">Sep</option>
            <option value="10">Okt</option>
            <option value="11">Nov</option>
            <option value="12">Des</option>
        </select>

        <select aria-label="Tahun" name="birthday_year" id="year" title="Tahun" class="_5dba"><option value="0" selected="1">Tahun</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
            <option value="1959">1959</option>
            <option value="1958">1958</option>
            <option value="1957">1957</option>
            <option value="1956">1956</option>
            <option value="1955">1955</option>
            <option value="1954">1954</option>
            <option value="1953">1953</option>
            <option value="1952">1952</option>
            <option value="1951">1951</option>
            <option value="1950">1950</option>
            <option value="1949">1949</option>
            <option value="1948">1948</option>
            <option value="1947">1947</option>
            <option value="1946">1946</option>
            <option value="1945">1945</option>
            <option value="1944">1944</option>
            <option value="1943">1943</option>
            <option value="1942">1942</option>
            <option value="1941">1941</option>
            <option value="1940">1940</option>
            <option value="1939">1939</option>
            <option value="1938">1938</option>
            <option value="1937">1937</option>
            <option value="1936">1936</option>
            <option value="1935">1935</option>
            <option value="1934">1934</option>
            <option value="1933">1933</option>
            <option value="1932">1932</option>
            <option value="1931">1931</option>
            <option value="1930">1930</option>
            <option value="1929">1929</option>
            <option value="1928">1928</option>
            <option value="1927">1927</option>
            <option value="1926">1926</option>
            <option value="1925">1925</option>
            <option value="1924">1924</option>
            <option value="1923">1923</option>
            <option value="1922">1922</option>
            <option value="1921">1921</option>
            <option value="1920">1920</option>
            <option value="1919">1919</option>
            <option value="1918">1918</option>
            <option value="1917">1917</option>
            <option value="1916">1916</option>
            <option value="1915">1915</option>
            <option value="1914">1914</option>
            <option value="1913">1913</option>
            <option value="1912">1912</option>
            <option value="1911">1911</option>
            <option value="1910">1910</option>
            <option value="1909">1909</option>
            <option value="1908">1908</option>
        </select>
<p></p>

        <!-- Form Input -->

        <div class="form-group">
            <p><strong> Jenis Kelami </strong></p>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="Laki-laki"> Laki-laki
                </label>

                <label class="radio-inline">
                    <input type="radio" name="gender" value="Perempuan"> Perempuan
                </label>
        </div>

            <!-- Form Input -->
            <div class="form-group">
                <p><strong> Agama </strong></p>
                    <select class="js-states form-control">
                            <option value="HI">  </option>
                            <option value="HI"> Islam </option>
                            <option value="HI"> Kristen Protestan </option>
                            <option value="HI"> Katolik </option>
                            <option value="HI"> Hindu </option>
                            <option value="HI"> Budha </option>
                    </select>
            </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('Alamat', 'Alamat') !!}
            {!! Form::text('Alamat', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input Ayah -->

        <h3 style="color:#985f0d"> Orang Tua/Ayah </h3>
        <div class="progress"> </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('NamaAyah', 'Nama Ayah') !!}
            {!! Form::text('NamaAya', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            <p><strong> Agama </strong></p>
            <select class="js-states form-control">
                <option value="HI">  </option>
                <option value="HI"> Islam </option>
                <option value="HI"> Kristen Protestan </option>
                <option value="HI"> Katolik </option>
                <option value="HI"> Hindu </option>
                <option value="HI"> Budha </option>
            </select>
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('Pekerjaan', 'Pekerjaan') !!}
            {!! Form::text('Pekerjaan', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('Alamat', 'Alamat') !!}
            {!! Form::text('Alamat', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('Email', 'Email') !!}
            {!! Form::text('Email', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('NoTelepon', 'No Telepon') !!}
            {!! Form::text('NoTelepon', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input Ibu -->

        <h3 style="color:#985f0d"> Orang Tua/Ibu </h3>
        <div class="progress"> </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('NamaIbu', 'Nama Ibu') !!}
            {!! Form::text('NamaIbu', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            <p><strong> Agama </strong></p>
            <select class="js-states form-control">
                <option value="HI">  </option>
                <option value="HI"> Islam </option>
                <option value="HI"> Kristen Protestan </option>
                <option value="HI"> Katolik </option>
                <option value="HI"> Hindu </option>
                <option value="HI"> Budha </option>
            </select>
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('Pekerjaan', 'Pekerjaan') !!}
            {!! Form::text('Pekerjaan', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('Alamat', 'Alamat') !!}
            {!! Form::text('Alamat', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('Email', 'Email') !!}
            {!! Form::text('Email', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('NoTelepon', 'No Telepon') !!}
            {!! Form::text('NoTelepon', null, ['class' => 'form-control']) !!}
        </div>


        <!-- Form Input Wali -->

        <h3 style="color:#985f0d"> Orang Tua/Wali </h3>
        <div class="progress"> </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('NamaWali', 'Nama Wali') !!}
            {!! Form::text('NamaIbu', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            <p><strong> Status Wali </strong></p>
            <select class="js-states form-control">
                <option value="HI">  </option>
                <option value="HI"> Om </option>
                <option value="HI"> Tante </option>
                <option value="HI"> Kake </option>
                <option value="HI"> Nenek </option>
                <option value="HI"> Kaka </option>
            </select>
        </div>

        <!-- Form Input -->
        <div class="form-group">
            <p><strong> Agama </strong></p>
            <select class="js-states form-control">
                <option value="HI">  </option>
                <option value="HI"> Islam </option>
                <option value="HI"> Kristen Protestan </option>
                <option value="HI"> Katolik </option>
                <option value="HI"> Hindu </option>
                <option value="HI"> Budha </option>
            </select>
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('Pekerjaan', 'Pekerjaan') !!}
            {!! Form::text('Pekerjaan', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('Alamat', 'Alamat') !!}
            {!! Form::text('Alamat', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('Email', 'Email') !!}
            {!! Form::text('Email', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Form Input -->
        <div class="form-group">
            {!! Form::label('NoTelepon', 'No Telepon') !!}
            {!! Form::text('NoTelepon', null, ['class' => 'form-control']) !!}
        </div>


        {!! Form::close() !!}

        <a class="btn btn-primary" href="{{ url('/creatependaftaran') }}"> mendaftar <span class="glyphicon glyphicon-plus-sign"></span></a>

        <div class="col-md-4">


    @endsection