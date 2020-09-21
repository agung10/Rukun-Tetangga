@extends('layouts.app')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a>Dashboard</a></div>
                <div class="breadcrumb-item"><a>Modules</a></div>
                <div class="breadcrumb-item">Laporan</div>
            </div>
        </div>

        <div class="section-body">
            <div class="alert alert-primary alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    <strong class="h6">
                        Catatan : Cari Berdasarkan Nama Kepala Keluarga / No KK.
                    </strong>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-4 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Laporan Data</h4>
                        </div>
                        <div class="card-body">
                            <form method="GET">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder=" Masukan data ... " name="Cari">
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-lg btn-round btn-primary">
                                        Cari
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-lg-8">
                    <div class="card card-primary" id="mycard-dimiss">
                        <div class="card-header">
                            <h4>Kepala Keluarga</h4>
                            <div class="card-header-action">
                                <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                                <a data-dismiss="#mycard-dimiss" class="btn btn-icon btn-danger" href="#"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                        <div class="card-body" id="mycard-collapse">
                            <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">
                                @if($data_diris->isEmpty())
                                <li class="media">
                                    <div class="media-body">
                                        <center>
                                            <img alt="image" src="{{asset('assets/stisla/img/custom/blankData.png')}}" class="author-box-picture" style="width: 150px; height:150px;">
                                            <h5 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                                            text-shadow:1px 1px 2px red;" class="mt-2">Mohon Maaf, data yang anda cari tidak ada</h5>
                                        </center>
                                    </div>

                                </li>
                                @else
                                @foreach ($data_diris as $res)
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="{{asset('assets/stisla/img/avatar/avatar-3.png')}}">
                                    <div class="media-body">
                                        <div class="media-title">{{ $res->nama_lengkap }}</div>
                                        <div class="text-job text-muted">{{ $res->pekerjaan }}</div>
                                    </div>
                                    <div class="media-progressbar">
                                        <a class="btn btn-sm btn-round btn-danger" style="color: white;">
                                            {{ $res->no_kk }}
                                        </a>
                                    </div>
                                    <div class="media-cta">
                                        <button class="btn btn-primary btnDetail" _IdKK="{{ $res->no_kk }}" _dNik="{{ $res->nik }}" _dName="{{ $res->nama_lengkap }}" _dTTL="{{ $res->tempat_lahir }}, {{ $res->tanggal_lahir }}" _dPekerjaan="{{ $res->pekerjaan }}" _dAgama="{{ $res->agama }}" _dKeterangan="{{ substr($res->keterangan, 0, 120) }} ...">Detail</button>
                                    </div>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            {{ $data_diris->links() }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('JsLibraries')
<script src="{{asset('assets/stisla/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
@endsection

@section('JsSpecific')
<script src="{{asset('assets/stisla/js/page/components-user.js')}}"></script>
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
    $('#printDataDiriKKLink').addClass('active')

    $('.btnDetail').click(function(e) {
        e.preventDefault()

        let IdKK = $(this).attr('_IdKK')
        let dNik = $(this).attr('_dNik')
        let dName = $(this).attr('_dName')
        let dTTL = $(this).attr('_dTTL')
        let dPekerjaan = $(this).attr('_dPekerjaan')
        let dAgama = $(this).attr('_dAgama')
        let dKeterangan = $(this).attr('_dKeterangan')

        $('#IdKK').attr("href", "printDataKK/" + IdKK)
        $('#dNik').html(dNik)
        $('#dName').html(dName)
        $('#dTTL').html(dTTL)
        $('#dPekerjaan').html(dPekerjaan)
        $('#dAgama').html(dAgama)
        $('#dKeterangan').html(dKeterangan)

        $('#modalDetail').modal("show")
    })
</script>

@include('layouts.alerts.notif')
@endsection