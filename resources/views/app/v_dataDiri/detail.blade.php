@extends('layouts.app')

@section('content')
@include('_FUNCTION.tanggal-indo')
@include('_FUNCTION.age')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{route('data_diris.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Detail Data Diri</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a>Dashboard</a></div>
                <div class="breadcrumb-item"><a>Forms</a></div>
                <div class="breadcrumb-item">DetailDataDiri</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="hero text-white hero-bg-image" style="
                    background-image: url('{{asset('assets/stisla/img/custom/profile-data.png')}}');
                    background-position: right;
                    background-size: contain;
                    object-fit: cover;
                    background-repeat: no-repeat;">
                        <div class="row">
                            <div class="col-md-2">
                            @if(empty($data_diris->foto))
                            <center>
                                <a href="{{asset('assets/stisla/img/avatar/avatar-3.png')}}" target="_blank">
                                    <img alt="{{ $data_diris->nama }}" src="{{asset('assets/stisla/img/avatar/avatar-3.png')}}" class="rounded-circle author-box-picture" style="width: 115px;object-fit:cover;">
                                </a>
                            </center>
                            @else
                            <center>
                                <a href="{{asset('UploadedFile/profilPelamar'.$data_diris->foto)}}" target="_blank">
                                    <img class="rounded-circle author-box-picture" src="{{asset('UploadedFile/profilPelamar/'.$data_diris->foto)}}" alt="{{ $data_diris->nama }}" style="width: 115px; height:115px;object-fit:cover;">
                                </a>
                            </center>
                            @endif
                            </div>
                            <div class="col-md-10">
                                <div class="hero-inner">
                                    <h2>{{ $data_diris->nama_lengkap }}</h2>
                                    <p class="lead">{{ $data_diris->pendidikan }}</p>
                                    <div class="mt-4">
                                        <p class="lead">{{ $data_diris->pekerjaan }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-5">
                    <div class="card card-primary">
                        <div class="card-header">
                            <i class="fas fa-user" style="margin-right: 3px;"></i>
                            <h4>Profil</h4>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>No KTP / NIK</label>
                                    <span class="badge badge-info col-md-12">{{ $data_diris->nik }}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>No KK</label>
                                    <span class="badge badge-info col-md-12">{{ $data_diris->no_kk }}</span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Jenis Kelamin</label>
                                    <span class="badge badge-info col-md-12">{{$data_diris->jenis_kelamin}}</span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Tempat / Tanggal Lahir</label>
                                    <span class="badge badge-info col-md-12">{{ $data_diris->tempat_lahir }} / {{ tgl_indo($data_diris->tanggal_lahir) }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Usia</label>
                                    <span class="badge badge-info col-md-12">{{ getAge($data_diris->tanggal_lahir) }} Tahun</span>
                                </div>
                                <div class="form-group col-md-8">
                                    <label>Agama</label>
                                    <span class="badge badge-info col-md-12">{{ $data_diris->agama }}</span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Disabilitas</label>
                                    <span class="badge badge-info col-md-12">{{ $data_diris->disabilitas }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-7">
                    <div class="card card-primary">
                        <div class="card-header">
                            <i class="fas fa-address-card" style="margin-right: 3px;"></i>
                            <h4>Data Status</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Hubungan Dalam Keluarga</label>
                                    @foreach($status_keluargas as $res)
                                    @if($res->id == $data_diris->keluarga_id)
                                    <span class="badge badge-info col-md-12">{{ $res->hub_keluarga }}</span>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Hubungan Dalam KK</label>
                                    @foreach($status_kartu_keluargas as $res)
                                    @if($res->id == $data_diris->kk_id)
                                    <span class="badge badge-info col-md-12">{{ $res->hub_kk }}</span>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Status Pernikahan</label>
                                    @foreach($status_pernikahans as $res)
                                    @if($res->id == $data_diris->pernikahan_id)
                                    <span class="badge badge-info col-md-12">{{ $res->pernikahan }}</span>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-7">
                                    <label>Jenis Rumah</label>
                                    <span class="badge badge-info col-md-12">{{ $data_diris->jenis_rumah }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <i class="fas fa-map-marker-alt" style="margin-right: 3px;"></i>
                            <h4>Data Alamat</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Alamat Kartu Keluarga</label>
                                    <textarea class="form-control" disabled>{{ $data_diris->alamat_kartuKeluarga }}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Alamat Domisili</label>
                                    <textarea class="form-control" disabled>{{ $data_diris->alamat_domisili }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <i class="fas fa-bars" style="margin-right: 3px;"></i>
                            <h4>Keterangan</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" style="height: 100px !important;" disabled>{{ $data_diris->keterangan }}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Terakhir Diperbarui</label>
                                        <span class="badge badge-info col-md-12">{{ $data_diris->updated_at }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('JsLibraries')
<script src="{{asset('assets/stisla/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('assets/stisla/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/upload-preview/assets/js/jquery.uploadPreview.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/izitoast/js/iziToast.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
@endsection

@section('JsSpecific')
<script src="{{asset('assets/stisla/js/page/features-post-create.js')}}"></script>
<script src="{{asset('assets/stisla/js/page/modules-toastr.js')}}"></script>
@endsection

@section('JsCustom')
<script>
    // text to number
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</script>

<script>
    $('#dataDiriLink').addClass('active')
</script>

@include('layouts.alerts.notif')
@endsection