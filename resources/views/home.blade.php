@extends('layouts.app')
@section('content')
@include('_FUNCTION.age')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-user-friends"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Administrator</h4>
                  </div>
                  <div class="card-body">
                    {{ $pengguna->count() }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-id-card"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Data Diri</h4>
                  </div>
                  <div class="card-body">
                    {{$data_diris->count()}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kartu Keluarga</h4>
                  </div>
                  <div class="card-body">
                    {{$kartu_keluargas->count()}}
                  </div>
                </div>
              </div>
            </div>                  
        </div>
        <!-- <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">
                    <div class="card-stats">
                        <div class="card-stats-title"> <strong> Pengguna </strong></div>
                        <div class="card-stats-items">
                            <div class="row col-lg-12 col-md-12 col-sm-12">
                                <div class="card-stats-item col-md-7">
                                    <div class="card-stats-item-count">
                                        {{$pengguna->where('level', 'Administrator')->count()}}</div>
                                    <div class="card-stats-item-label">Administrator</div>
                                </div>
                                <div class="card-stats-item col-md-5">
                                    <div class="card-stats-item-count">{{$pengguna->where('level', 'User')->count()}}
                                    </div>
                                    <div class="card-stats-item-label">User</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pengguna</h4>
                        </div>
                        <div class="card-body">
                            {{ $pengguna->count() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">
                    <div class="card-chart">
                        <canvas id="dataDiri"></canvas>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Data Diri</h4>
                        </div>
                        <div class="card-body">
                            {{$data_diris->count()}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">
                    <div class="card-chart">
                        <canvas></canvas>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Kartu Keluarga</h4>
                        </div>
                        <div class="card-body">
                            {{$kartu_keluargas->count()}}
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-primary">
                    <div class="card-header bg bg-light">
                        <h4>Info Data Warga!</h4>
                        <div class="card-header-action">
                            <div class="badge badge-primary">
                                Tahun
                                <script>document.write(new Date().getFullYear()); </script>
                            </div>
                        </div>
                    </div>
                    <div class="card-body info">
                        <span>Berikut merupakan informasi mengenai Rukun Tetangga 001.</span>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-12">
                                <strong class="col-lg-2">Rt/Rw</strong>
                                <span style="padding-left:30px;"> : </span>
                                <span>001/01</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <strong class="col-lg-2">Desa/Kel</strong>
                                <span style="padding-left:15px;">:</span>
                                <span>Rawajati</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <strong class="col-lg-2">Kecamatan</strong>
                                <span>:</span>
                                <span>Pancoran</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <strong class="col-2">Kab/Kota</strong>
                                <span style="padding-left:12px;">:</span>
                                <span>Jakarta Selatan</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <strong class="col-2">Provinsi</strong>
                                <span style="padding-left:20px;">:</span>
                                <span>DKI Jakarta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card card-primary">
                    <div class="card-header bg bg-light">
                        <h4>Kategori Usia</h4>
                        <div class="card-header-action">
                            <img class="img-fluid mt-1 img-shadow"
                                src="{{asset('assets/stisla/modules/flag-icon-css/flags/4x3/id.svg')}}" alt="image"
                                width="40">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped table-sm">
                                <tr class="alert alert-light">
                                    <th></th>
                                    <td class="text-center">Laki-Laki</td>
                                    <td class="text-center">Perempuan</td>
                                    <td class="text-right">Total</td>
                                </tr>
                                <tr class="alert alert-light">
                                    <th class="text-center alert alert-primary">Warga</th>
                                    <td class="text-center">
                                        <strong>
                                            {{ $jenis_kelamins->where("jenis_kelamin", "Laki-Laki")->count() }}
                                        </strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>
                                            {{ $jenis_kelamins->where("jenis_kelamin", "Perempuan")->count() }}
                                        </strong>
                                    </td>
                                    <td class="text-right">
                                        <strong>
                                            {{ $jenis_kelamins->count() }}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <span class="col-md-2" style="padding-right:30px;">Balita</span>
                                        <span class="badge badge-primary col-md-6">0 Tahun</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $anakLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) < 5)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $anakLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $anakLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $anakPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) < 5)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $anakPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $anakPerempuan }}
                                    </td>
                                    <td class="text-right">{{ $anakLaki + $anakPerempuan }}</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span class="col-md-2" style="padding-right:30px;">Anak</span>
                                        <span class="badge badge-primary col-md-6">(5-11 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $anakLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 5 && getAge($res->tanggal_lahir) <= 11)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $anakLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $anakLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $anakPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 5 && getAge($res->tanggal_lahir) <= 11)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $anakPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $anakPerempuan }}
                                    </td>
                                    <td class="text-right">{{ $anakLaki + $anakPerempuan }}</td>
                                </tr>

                                <tr>
                                    <th>
                                        <span class="col-md-2">Remaja</span>
                                        <span class="badge badge-primary col-md-6">Awal-Akhir (12-25 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $remajaLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 12 && getAge($res->tanggal_lahir) <= 25)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $remajaLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $remajaLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $remajaPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 12 && getAge($res->tanggal_lahir) <= 25)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $remajaPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $remajaPerempuan }}
                                    </td>
                                    <td class="text-right">{{ $remajaLaki + $remajaPerempuan }}</td>
                                </tr>

                                <tr>
                                    <th>
                                        <span class="col-md-1" style="padding-right: 13px;">Dewasa</span>
                                        <span class="badge badge-primary col-md-6">Awal-Akhir (26-45 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $dewasaLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 26 && getAge($res->tanggal_lahir) <= 45)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $dewasaLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $dewasaLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $dewasaPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 26 && getAge($res->tanggal_lahir) <= 45)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $dewasaPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $dewasaPerempuan }}
                                    </td>
                                    <td class="text-right">{{ $dewasaLaki + $dewasaPerempuan }}</td>
                                </tr>

                                <tr>
                                    <th>
                                        <span class="col-md-2" style="padding-right: 23px;">Lansia</span>
                                        <span class="badge badge-primary col-md-6"> Awal-Akhir (46-65 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $dewasaLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 46 && getAge($res->tanggal_lahir) <= 65)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $dewasaLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $dewasaLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $dewasaPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 46 && getAge($res->tanggal_lahir) <= 65)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $dewasaPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $dewasaPerempuan }}
                                    </td>
                                    <td class="text-right">{{ $dewasaLaki + $dewasaPerempuan }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card card-hero card-danger">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-grin-beam"></i>
                        </div>
                        <center>
                            <h4>{{ $KepalaKeluargaCount }}</h4>
                            <div class="card-description"><strong>KEPALA KELUARGA</strong></div>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card card-primary">
                    <div class="card-header bg bg-light">
                        <h4>Rata - Rata Pendidikan Warga</h4>
                        <div class="card-header-action">
                            <img class="img-fluid mt-1 img-shadow"
                                src="{{asset('assets/stisla/modules/flag-icon-css/flags/4x3/id.svg')}}" alt="image"
                                width="40">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped table-hover table-md">
                                <tr>
                                    <th>Tidak Sekolah</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan", "Tidak Sekolah")->count() }}</td>
                                </tr>
                                <tr>
                                    <th>SD</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan", "SD")->count() }}</td>
                                </tr>
                                <tr>
                                    <th>SMA/SLTA Sederajat</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan", "SMA/SLTA Sederajat")->count() }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>SMK/MAK</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan", "SMK/MAK")->count() }}</td>
                                </tr>
                                <tr>
                                    <th>D1-D4</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan", "D1-D4")->count() }}</td>
                                </tr>
                                <tr>
                                    <th>S1-S3</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan", "S1-S3")->count() }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card card-primary">
                    <div class="card-header bg bg-light">
                        <h4>
                            Lokasi
                            <span>(Online)</span>
                        </h4>
                        <div class="card-header-action">
                            <img class="img-fluid mt-1 img-shadow"
                                src="{{asset('assets/stisla/modules/flag-icon-css/flags/4x3/id.svg')}}" alt="image"
                                width="40">
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.024648216715!2d106.8526330142049!3d-6.260483463033859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f252430e4337%3A0x9228cdf02c3ca66e!2sJl.%20Rawajati%20Timur%20II%2C%20Rawajati%2C%20Kec.%20Pancoran%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012750!5e0!3m2!1sid!2sid!4v1575441901651!5m2!1sid!2sid"
                        width="auto" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="alert alert-primary alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                        </button>
                       <strong class="h6"> 
                           Catatan : Hasil perhitungan ini dipengaruhi oleh kelengkapan data yang ada terutama Tanggal lahir, Jenis kelamin, dan Pendidikan.
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('JsLibraries')
<script src="{{asset('assets/stisla/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/chart.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('assets/stisla/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('assets/stisla/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/izitoast/js/iziToast.min.js')}}"></script>
@endsection

@section('JsSpecific')
<script src="{{asset('assets/stisla/js/page/modules-toastr.js')}}"></script>
<script src="{{asset('assets/stisla/js/page/index.js')}}"></script>
@endsection

@section('JsCustom')
<script>
    $('#dashboardLink').addClass('active')

    $('#imageDataDiri')
</script>


@include('layouts.alerts.notif')
@endsection