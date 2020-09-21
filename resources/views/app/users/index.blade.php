@extends('layouts.app')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Pengguna</h1>

      <div class="section-header-button">
        <a href="{{ route('users.create') }}">
          <h4 class="btn btn-info ">Tambah Pengguna</h4>
        </a>
      </div>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a>Dashboard</a></div>
        <div class="breadcrumb-item"><a>Modules</a></div>
        <div class="breadcrumb-item">DataPengguna</div>
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
                      <!-- <th>Profil</th> -->
                      <th>Nama</th>
                      <th>E-mail</th>
                      <th class="text-center">Nomor Telepone</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $res)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>

                      <!-- <td>
                        <div class="avatar-group">
                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" title="{{ $res->name }}">
                            @if(empty($res->profile))
                              <img alt="image" src="{{asset('assets/stisla/img/avatar/avatar-1.png')}}" class="rounded-circle" width="35" data-toggle="tooltip" title="{{ $res->name }}">
                            @else
                              <img alt="Image placeholder" src="{{ asset('UploadedFile/users/profile/'.$res->profile) }}" >
                            @endif
                          </a>
                        </div>
                      </td> -->

                      <td>{{ $res->name }}</td>
                      <td>
                        <a href="mailto:{{ $res->email }}" class="">
                          {{ $res->email }}
                        </a>
                      </td>
                      <td class="text-center">
                        @if(!empty($res->no_telp))
                          <p class="badge badge-info"> {{ $res->no_telp }} </p>
                        @else
                          <p class="badge badge-info">Belum ada nomor telepon</p>
                        @endif
                      </td>
                      <td class="text-center">
                        <a href="{{ route('users.edit', $res->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <button href="#" class="btn btn-danger" data-uri="{{ route('users.destroy', $res->id) }}" data-toggle="modal" data-target="#deleteConf"><i class="fas fa-trash"></i></button>
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
  $('#penggunaLink').addClass('active')
  $('#usersLink').addClass('active')
</script>

@include('layouts.modal.deleteConf')
@include('layouts.alerts.notif')
@endsection