<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mdlrute" aria-hidden="true" style="display: none;" id="mdrute">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mdlrute">Edit Rute</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form class="form-material m-t-40" id="frute" method="POST">

                    <div class="form-group m-b-40" hidden>
                        <label for="idkendaraan">Kode Kendaraan</label>
                        <input type="text" class="form-control" id="idkendaraan" name="idkendaraan" readonly>
                        <label for="idkendaraan">Tipe Kendaraan</label>
                        <input type="text" class="form-control" id="tipekendaraan" name="tipekendaraan" readonly>
                    </div>

                    <div class="form-group m-b-40">
                        <label>Kendaraan</label>
                        <div class="input-group">
                            <input type="text" name="kendaraan" id="kendaraan" class="form-control" placeholder="Cari Kendaraan" readonly>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success btn-circle" title="Cari" id="cariK"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group m-b-40">
                        <label for="depart">Berangkat Dari</label>
                        <input type="text" class="form-control" id="depart" name="depart">
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="rutedes">Rute Dari</label>
                                <select class="form-control kota" id="rutedes" name="rutedes" style="width: 100%" z-index='-1'>
                                <!-- <select class="form-control kota select2" id="rutedes" name="rutedes" style="width: 100%" z-index='-1'> -->

                                </select>
                                <!-- <input type="text" class="form-control kota" id="rutedes" name="rutedes" autocomplete="on"> -->
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ruteto">Rute Tujuan</label>
                                <select class="form-control kota" id="ruteto" name="ruteto" style="width: 100%" z-index='-1'>
                                <!-- <select class="form-control kota select2" id="ruteto" name="ruteto" style="width: 100%" z-index='-1'> -->

                                </select>
                                <!-- <input type="text" class="form-control kota" id="ruteto" name="ruteto" autocomplete="on"> -->
                            </div>
                        </div>

                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-6"><div class="form-group m-b-40">
                            <label for="timego">Waktu Berangkat</label>
                            <input type="text" class="form-control" id="timego" name="timego">
                        </div>
                    </div>

                    <div class="col-sm-6"><div class="form-group m-b-40">
                        <label for="timearv">Waktu Tiba</label>
                        <input type="text" class="form-control" id="timearv" name="timearv">
                    </div>
                </div>

            </div>

            <div class="form-group m-b-40">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
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