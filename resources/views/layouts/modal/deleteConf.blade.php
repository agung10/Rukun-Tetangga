<div class="modal fade" id="deleteConf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog confirm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="alert alert-danger">
                        <div class="alert-body">
                            Apakah anda ingin menghapus data ini?
                        </div>
                    </div>
                </div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <form id="conf_delete" method="POST" action="">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#deleteConf').on('show.bs.modal', function(e) {
        $(this).find('#conf_delete').attr('action', $(e.relatedTarget).data('uri'));
    });
</script>

