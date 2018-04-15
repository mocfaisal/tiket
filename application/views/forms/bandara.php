<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mdlbandara" aria-hidden="true" style="display: none;" id="mdbandara">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mdlbandara">Edit Bandara</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form class="form-material m-t-40" id="fbandara" method="POST">

                    <div class="form-group m-b-40" hidden>
                        <label for="id">Kode Bandara</label>
                        <input type="text" class="form-control" id="id" name="id" readonly>
                    </div>

                    <div class="form-group m-b-40">
                        <label>Nama Bandara</label>
                        <div class="input-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Bandara">
                        </div>
                    </div>

                    <div class="form-group m-b-40">
                        <label for="city">Kota</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-6">
                          <div class="form-group m-b-40">
                            <label for="abbr">Singkatan</label>
                            <input type="text" class="form-control" id="abbr" name="abbr">
                        </div>
                    </div>
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