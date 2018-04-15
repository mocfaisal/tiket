<?php 
$this->load->view('parts/header');
$this->load->view('parts/navigation');

?>

<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div>
					<button class="btn btn-circle btn-success" id="addbtn"><i class="fa fa-plus"></i></button>
				</div>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<td>No</td>
								<td>Nama Lengkap</td>
								<td>Username</td>
								<td>Hak akses</td>
								<td>Opsi</td>
							</tr>
						</thead>
						<tbody id="duser">
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->

<?php 
$this->load->view('parts/footer');
$this->load->view('forms/user');

?>

<script type="text/javascript">
	getuser();
	function getuser(){
		var url = "<?php echo site_url('data/getuser');?>";
		$.get(url,function(x){
			$('#duser').html(x);
		});	
	}
	
	$('#duser').on('click','.editbtn',function(e){
		e.preventDefault();
		$('#mdluser').text("Edit User");
		var kode = $(this).closest('tr').find('td:eq(1)').text();
		var nama = $(this).closest('tr').find('td:eq(2)').text();
		var username = $(this).closest('tr').find('td:eq(3)').text();
		// var pass = $(this).closest('tr').find('td:eq(4)').text();
		$('#nama').val(nama);
		$('#username').val(username);
		$('#fuser').find('.form-group, .m-b-40').addClass('focused');
		$('#mduser').modal('show');
		$('#savebtn').click(function(){
			var url = "<?php echo site_url('data/edituser/'); ?>"+kode;
			var data= $('#fuser').serializeArray();
			var btn = $(this);
			$.post(url,data,function(x){
				if(x=="Berhasil"){
					swal("Berhasil!", "Data user "+username+" berhasil disimpan :D", "success");
					$('#mduser').modal('hide');
					e.stopImmediatePropagation();
					e.preventDefault();
					btn.unbind();
				}
				else{
					swal("Gagal!", "Data user "+username+" gagal disimpan :(", "error");   	
				}
				getuser();
			});	
		});
		
	});

	$('#duser').on('click','.hapusbtn',function(e){
		e.preventDefault();
		var kode = $(this).closest('tr').find('td:eq(1)').text();
		var username = $(this).closest('tr').find('td:eq(3)').text();
		var url ="<?php echo site_url('data/hapususer/'); ?>"+kode;
		swal({   
			title: "Apa kamu yakin?",   
			text: "kamu yakin akan menghapus user : "+username+" ?",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Iya!",   
			cancelButtonText: "Tidak!",   
			closeOnConfirm: false,   
			closeOnCancel: false 
		}, function(isConfirm){   
			if (isConfirm) {     

				$.get(url,function(x){
					if(x=="Berhasil"){
						swal("Terhapus!", "Data user "+username+" berhasil dihapus :D", "success");
						e.stopImmediatePropagation();
						e.preventDefault();
					}
					else{
						swal("Gagal!", "Data user "+username+" gagal dihapus :(", "error");   	
					}
				});
				getuser();

			} else {     
				swal("Dibatalkan", "Data tersebut aman :)", "error");   
			} 
		});
	});


	$('#addbtn').click(function(e){
		$('#nama').val('');
		$('#username').val('');
		$('#password').val('');
		e.preventDefault();
		$('#mdluser').text("Tambah User");
		$('#mduser').find('#pass').removeAttr('hidden disabled');
		$('#mduser').modal('show');
		$('#savebtn').click(function(e){
			var	username = $('#username').text();
			var url = "<?php echo site_url('data/tambahuser'); ?>";
			var data= $('#fuser').serializeArray();
			var btn = $(this);
			$.post(url,data,function(x){
				if(x=="Berhasil"){
					swal("Berhasil!", "Data user "+username+" berhasil disimpan :D", "success");   
					$('#mduser').modal('hide');
					e.stopImmediatePropagation();
					e.preventDefault();
					btn.unbind();
				}
				else{
					swal("Gagal!", "Data user "+username+" gagal disimpan :(", "error");   	
				}
				getuser();
			});	
		});
	});
	$('#nama').on('keypress',function(evt){
		if(evt.which < 65 || evt.which > 90 && evt.which < 97 || evt.which > 122){
			if(evt.which != 32){
				evt.preventDefault();
			}
		}
	});
</script>