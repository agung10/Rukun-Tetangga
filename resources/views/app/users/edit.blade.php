@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{route('users.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Ubah User</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a>Dashboard</a></div>
            <div class="breadcrumb-item"><a>Forms</a></div>
            <div class="breadcrumb-item">UbahUser</div>
        </div>
    </div>

    <div class="section-body">
    <form method="POST" action="{{ route('users.update', $users->id) }}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="row">
            <!-- <div class="col-12 col-md-4 col-lg-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Profil</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12">
                            @if(!empty($users->profile))
                            <div id="image-preview" class="image-preview" style="background: url('{{ asset('UploadedFile/users/profile/'.$users->profile) }}'); background-size: cover; background-repeat: no-repeat;">
                                <label for="image-upload" id="image-label">Ubah File</label>
                                <input type="file" name="profile" id="image-upload"/>
                            </div>
                            @else
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Pilih File</label>
                                <input type="file" name="profile" id="image-upload"/>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card card-primary">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label>Nama</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $users->name }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="form-group col-md-7">
                                <label>E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $users->email }}" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  value="{{$users->password_}}" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Konfirmasi Password</label>
                                <input id="password-confirm" type="password" class="form-control" value="{{$users->password_}}" disabled >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label>Nomor Telepon</label>
                                <input id="no_telp" name="no_telp" value="{{$users->no_telp}}" type="text" maxLength="15" class="form-control" onkeypress="return isNumberKey(event)">
                            </div>
                        </div>
                        
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-info">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="alert alert-info alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                        </button>
                        <strong class="h6"> 
                            Password harus mencapai 8 karakter, dan nomor telepon maksimal 11/12 angka
                        </strong>
                    </div>
                </div>
            </div>
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
@endsection

@section('JsSpecific')
<script src="{{asset('assets/stisla/js/page/features-post-create.js')}}"></script>
<script src="{{asset('assets/stisla/js/page/modules-toastr.js')}}"></script>
@endsection

@section('JsCustom')
<script>
  $('#penggunaLink').addClass('active')
  $('#usersLink').addClass('active')

// text to number
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

    return true;
}
</script>

@include('layouts.alerts.notif')
@endsection

