@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Status</h1>

            <div class="section-header-button">
                <button class="btn btn-info" data-toggle="modal" data-target="#modalCreate">Tambah Status</button>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a>Dashboard</a></div>
                <div class="breadcrumb-item"><a>Modules</a></div>
                <div class="breadcrumb-item">Datastatus</div>
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
                                        <th class="text-center">Hubungan Dalam KK</th>
                                        <th></th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($status_kartu_keluargas as $res)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $res->hub_kk }}</td>
                                        <td></td>

                                        <td class="text-center">
                                            <button id="{{ $res->id }}" class="btn btn-warning edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-danger" data-uri="{{ route('status_kartu_keluargas.destroy', $res->id) }}" data-toggle="modal" data-target="#deleteConf"><i class="fas fa-trash"></i></button>
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


@section('status')
<form method="POST" action="{{ route('status_kartu_keluargas.store') }}" enctype="multipart/form-data">
@csrf
    <div class="modal-body">
        <div class="col-12">
            <div class="form-group col-md-12">
                <label>Hubungan Dalam KK</label>
                <input type="text" class="form-control" name="hub_kk" required>
            </div>
        </div>
    </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-info">Tambah</button>
        </div>
</form>
@endsection

@section('statusEdit')
<form id="formEditStatus" method="POST" action="" enctype="multipart/form-data">
@csrf
{{ method_field('PUT') }}
    <div class="modal-body">
        <div class="col-12">
            <div class="form-group col-md-12">
                <label>Hubungan Dalam KK</label>
                <input id="hub_kk" type="text" class="form-control" name="hub_kk" >
            </div>
        </div>
    </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-info">Ubah</button>
        </div>
</form>
@endsection


@section('JsLibraries')
<script src="{{asset('assets/stisla/modules/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/izitoast/js/iziToast.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/prism/prism.js')}}"></script>
@endsection

@section('JsSpecific')
<script src="{{asset('assets/stisla/js/page/modules-datatables.js')}}"></script>
<script src="{{asset('assets/stisla/js/page/modules-toastr.js')}}"></script>
<script src="{{asset('assets/stisla/js/page/bootstrap-modal.js')}}"></script>
@endsection

@section('JsCustom')
<script>
    $('#statusLink').addClass('active')
    $('#kkLink').addClass('active')

    // ModalEdit
    $(document).on('click', '.edit', function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $.ajax({
            url: "{{ url('app/getDataKK') }}/"+id,
            dataType: "JSON",
            success:function(data){
                if(data != ""){
                    $('#hub_kk').val(data.hub_kk);
                    $('#modalEdit').click();
                    $('#formEditStatus').attr("action", "{{ url('app/status_kartu_keluargas/') }}/"+id)+"/update";

                    $('#modalEdit').modal("show")
                }
            }
        })
    })
</script>
@include('layouts.alerts.notif')
@endsection