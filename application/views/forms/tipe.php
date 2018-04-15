<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mdltipe" aria-hidden="true" style="display: none;" id="mdtipe">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mdltipe">Edit Tipe</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form class="form-material m-t-40" id="ftipe" method="POST">
                    <!-- <div class="form-group m-b-40">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode">
                    </div> -->

                    <div class="form-group m-b-40">
                        <label for="desc">Deskripsi</label>
                        <input type="text" class="form-control" id="desc" name="desc">
                    </div>
                    
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success waves-effect text-left" data-dismiss="modal" id="savebtn">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>