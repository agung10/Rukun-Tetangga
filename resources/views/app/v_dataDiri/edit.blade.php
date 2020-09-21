@extends('layouts.app')

@section('cssCustom')
<link rel="stylesheet" href="{{asset('assets/upload/dropify/css/dropify.min.css')}}">
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{route('data_diris.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Ubah Data Diri</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a>Dashboard</a></div>
                <div class="breadcrumb-item"><a>Forms</a></div>
                <div class="breadcrumb-item">UbahDataDiri</div>
            </div>
        </div>

        <div class="section-body">
            <form method="POST" action="{{ route('data_diris.update', $data_diris->id) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        @if(empty($data_diris->foto))
                                            <input type="file" id="input-file-events" class="dropify-event" data-default-file="{{asset('assets/stisla/img/avatar/avatar-3.png')}}" name="foto">
                                        @else
                                            <input type="file" id="input-file-events" class="dropify-event" data-default-file="{{asset('UploadedFile/profilPelamar/'.$data_diris->foto)}}" name="foto" style="width: auto;">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-9">
                        <div class="card card-primary">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>NIK</label>
                                        <input id="nik" name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" onkeypress="return isNumberKey(event)" value="{{ $data_diris->nik }}" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nomor KK</label>
                                        <input id="no_kk" name="no_kk" type="text" class="form-control" onkeypress="return isNumberKey(event)" value="{{ $data_diris->no_kk }}">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Nama Lengkap</label>
                                        <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="{{ $data_diris->nama_lengkap }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control selectric" name="jenis_kelamin">
                                            <?php $jenis_kelamin = ['Laki-laki', 'Perempuan']; ?>
                                            @foreach($jenis_kelamin as $key)
                                            @if($data_diris->jenis_kelamin == $key)
                                            <option value="{{ $key }}" selected> {{ $key }} </option>
                                            @else
                                            <option value="{{ $key }}"> {{ $key }} </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tempat Lahir</label>
                                        <textarea name="tempat_lahir" id="tempat_lahir" class="form-control">{{ $data_diris->tempat_lahir }}</textarea>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control datepicker" value="{{ $data_diris->tanggal_lahir }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Agama</label>
                                        <input id="agama" type="text" class="form-control" name="agama" value="{{ $data_diris->agama }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Pendidikan</label>
                                        <select class="form-control selectric" name="pendidikan">
                                            <?php $pendidikan = ['Tidak Sekolah', 'SD', 'SMA/SLTA Sederajat', 'SMK/MAK', 'D1-D4', 'S1-S3']; ?>
                                            @foreach($pendidikan as $key)
                                            @if($data_diris->pendidikan == $key)
                                            <option value="{{ $key }}" selected> {{ $key }} </option>
                                            @else
                                            <option value="{{ $key }}"> {{ $key }} </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Pekerjaan</label>
                                        <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{ $data_diris->pekerjaan }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Hubungan Dalam Keluarga</label>
                                        <select class="form-control selectric" name="keluarga_id">
                                            @foreach($status_keluargas as $res)
                                            @if($res->id == $data_diris->keluarga_id)
                                            <option value="{{ $res->id }}" selected>{{ $res->hub_keluarga }}</option>
                                            @else
                                            <option value="{{ $res->id }}">{{ $res->hub_keluarga }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Hubungan Dalam KK</label>
                                        <select class="form-control selectric" name="kk_id">
                                            @foreach($status_kartu_keluargas as $res)
                                            @if($res->id == $data_diris->kk_id)
                                            <option value="{{ $res->id }}" selected>{{ $res->hub_kk }}</option>
                                            @else
                                            <option value="{{ $res->id }}">{{ $res->hub_kk }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Status Pernikahan</label>
                                        <select class="form-control selectric" name="pernikahan_id">
                                            @foreach($status_pernikahans as $res)
                                            @if($res->id == $data_diris->pernikahan_id)
                                            <option value="{{ $res->id }}" selected>{{ $res->pernikahan }}</option>
                                            @else
                                            <option value="{{ $res->id }}">{{ $res->pernikahan }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Jenis Rumah</label>
                                        <input id="jenis_rumah" type="text" class="form-control" name="jenis_rumah" value="{{ $data_diris->jenis_rumah }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Disabilitas</label>
                                        <input id="disabilitas" type="text" class="form-control" name="disabilitas" value="{{ $data_diris->disabilitas }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Alamat Kartu Keluarga</label>
                                        <textarea name="alamat_kartuKeluarga" id="alamat_kartuKeluarga" class="form-control">{{ $data_diris->alamat_kartuKeluarga }}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Alamat Domisili</label>
                                        <textarea name="alamat_domisili" id="alamat_domisili" class="form-control">{{ $data_diris->alamat_domisili }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Keterangan</label>
                                        <textarea name="keterangan" id="keterangan" class="form-control">{{ $data_diris->keterangan }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-info">Ubah Data</button>
                </div>
            </form>
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

<!-- Upload -->
<script src="{{asset('assets/upload/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/upload/form-file-uploads.min.js')}}"></script>
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