<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mdltransportasi" aria-hidden="true" style="display: none;" id="mdtransportasi">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mdltransportasi">Edit Transportasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form class="form-material m-t-40" id="ftransportasi">
                    <div hidden>
                        <div class="form-group m-b-40">
                            <label for="id">id</label>
                            <input type="text" class="form-control" id="id" name="id" readonly>
                        </div>
                    </div>

                    <div class="form-group m-b-40">
                        <label for="tipe">Tipe</label>
                        <select name="tipe" id="tipe" class="form-control">
                           <?php 

                           $query = $this->db->query("SELECT * FROM transportation_type");
                           $i=1;
                           foreach ($query->result_array() as $data) {
                            echo '<option value="'.$data['transportation_typeid'].'">'.$data['description'].'</option>';

                            $i++;
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group m-b-40">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode">
                </div>

                <div class="form-group m-b-40">
                    <label for="desc">Deskripsi</label>
                    <input type="text" class="form-control" id="desc" name="desc">
                </div>

                <div class="form-group m-b-40">
                    <label for="jumlah">Jumlah : <span id="jml"></span></label>
                    <input type="range" step="20" min="20" max="500" class="form-control" id="jumlah" name="jumlah" value="100">
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