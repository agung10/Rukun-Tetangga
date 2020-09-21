@if(empty($data_diris))
<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog confirm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center; display: flex; justify-content: center; align-items: center;">
                <h5 class="modal-title" id="exampleModalLabel"> Mohon maaf data warga yang dicari tidak ada</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card author-box card-primary">
                            <div class="card-body">
                                <center>
                                    <img alt="image" src="{{asset('assets/stisla/img/custom/blankData.png')}}" class="author-box-picture" style="width: 300px; height:300px;">
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog confirm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center; display: flex; justify-content: center; align-items: center;">
                <h5 class="modal-title"> Data warga dengan nomor NIK : 
                    <a id="dNik" class="btn btn-sm btn-round btn-primary" style="color: white;">NIK</a> 
                </h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card author-box card-primary">
                            <div class="card-body">
                                <div class="author-box-left">
                                    <img alt="image" src="{{asset('assets/stisla/img/avatar/avatar-3.png')}}" class="rounded-circle author-box-picture">
                                    <div class="clearfix"></div>
                                    <a id="IdKK" class="btn btn-primary mt-3">Lihat Data</a>
                                </div>
                                <div class="author-box-details">
                                    <div class="author-box-name">
                                        <a id="dName" style="color: #3abaf4;">Nama Lengkap</a>
                                    </div>
                                    <div id="dTTL" class="author-box-job">Tempat Lahir dan Tanggal Lahir</div>
                                    <div id="dPekerjaan" class="author-box-job">Pekerjaan</div>
                                    <div id="dAgama" class="author-box-job">Agama</div>
                                    <div id="dKeterangan" class="author-box-description">
                                        <p>Keterangan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif