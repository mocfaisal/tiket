<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mdluser" aria-hidden="true" style="display: none;" id="mduser">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mdluser">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form class="form-material m-t-40" id="fuser" method="POST">
                    <div class="form-group m-b-40">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama">

                    </div>
                    <div class="form-group m-b-40">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">

                    </div>
                    <div class="form-group m-b-40" id="pass" hidden disabled>
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">

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