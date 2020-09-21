@extends('layouts.app')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Warga</h1>

      <div class="section-header-button">
        <a href="{{ route('data_diris.create') }}">
          <h4 class="btn btn-info ">Tambah Data Diri</h4>
        </a>
      </div>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a>Dashboard</a></div>
        <div class="breadcrumb-item"><a>Modules</a></div>
        <div class="breadcrumb-item">DataDiri</div>
      </div>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Nama</th>
                      <th>Tempat/Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th class="text-center">No KK</th>
                      <th class="text-center">NIK</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @include('_FUNCTION.tanggal-indo')
                    @foreach($data_diris as $res)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>

                      <td>{{ $res->nama_lengkap }}</td>
                      <td>{{ $res->tempat_lahir }} / {{ tgl_indo($res->tanggal_lahir) }}</td>
                      <td>{{ $res->jenis_kelamin }}</td>
                      <td>{{ $res->no_kk }}</td>
                      <td>{{ $res->nik }}</td>
                      <td class="text-center">
                        <a href="{{ route('data_diris.show', $res->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('data_diris.edit', $res->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <button href="#" class="btn btn-danger" data-uri="{{ route('data_diris.destroy', $res->id) }}" data-toggle="modal" data-target="#deleteConf"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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
<script src="{{asset('assets/stisla/modules/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/izitoast/js/iziToast.min.js')}}"></script>
@endsection

@section('JsSpecific')
<script src="{{asset('assets/stisla/js/page/modules-datatables.js')}}"></script>
<script src="{{asset('assets/stisla/js/page/modules-toastr.js')}}"></script>
@endsection

@section('JsCustom')
<script>
  $('#dataDiriLink').addClass('active')
</script>

@include('layouts.modal.deleteConf')
@include('layouts.alerts.notif')
@endsection