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
								<!-- <td>Kode</td> -->
								<td>Deskripsi</td>
								<td>Opsi</td>
							</tr>
						</thead>
						<tbody id="dtipe">
							
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
$this->load->view('forms/tipe');

?>

<script type="text/javascript">
	gettipe();
	function gettipe(){
		var url = "<?php echo site_url('data/gettipe');?>";
		$.get(url,function(x){
			$('#dtipe').html(x);
		});	
	}
	
	$('#dtipe').on('click','.editbtn',function(e){
		e.preventDefault();
		$('#mdltipe').text("Edit Tipe");
		var kode = $(this).closest('tr').find('td:eq(1)').text();
		// var id = $(this).closest('tr').find('td:eq(2)').text();
		var desc = $(this).closest('tr').find('td:eq(2)').text();

		$('#kode').val(kode);
		$('#desc').val(desc);
		
		$('#ftipe').find('.form-group, .m-b-40').addClass('focused');
		$('#mdtipe').modal('show');
		$('#savebtn').click(function(){
			var url = "<?php echo site_url('data/edittipe/'); ?>"+kode;
			var data= $('#ftipe').serializeArray();
			var btn = $(this);
			$.post(url,data,function(x){
				if(x=="Berhasil"){
					swal("Berhasil!", "Data tipe berhasil disimpan :D", "success");
					$('#mdtipe').modal('hide');
					e.stopImmediatePropagation();
					e.preventDefault();
					btn.unbind();
				}
				else{
					swal("Gagal!", "Data tipe gagal disimpan :(", "error");   	
				}
				gettipe();
			});	
		});
		
	});

	$('#dtipe').on('click','.hapusbtn',function(e){
		e.preventDefault();
		var kode = $(this).closest('tr').find('td:eq(1)').text();
		var url ="<?php echo site_url('data/hapustipe/'); ?>"+kode;
		swal({   
			title: "Apa kamu yakin?",   
			text: "kamu akan menghapus tipe dengan data : "+kode+" ?",  
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
						swal("Terhapus!", "Data tipe berhasil dihapus :D", "success");
						e.stopImmediatePropagation();
						e.preventDefault();
					}
					else{
						swal("Gagal!", "Data tipe gagal dihapus :(", "error");   	
					}
				});
				gettipe();

			} else {     
				swal("Dibatalkan", "Data tersebut aman :)", "error");   
			} 
		});
	});


	$('#addbtn').click(function(e){
		e.preventDefault();
		$('#kode').val('');
		$('#desc').val('');
		
		$('#mdltipe').text("Tambah Tipe");
		$('#mdtipe').find('#pass').removeAttr('hidden disabled');
		$('#mdtipe').modal('show');
		$('#savebtn').click(function(e){
			var url = "<?php echo site_url('data/tambahtipe'); ?>";
			var data= $('#ftipe').serializeArray();
			var btn = $(this);
			$.post(url,data,function(x){
				if(x=="Berhasil"){
					swal("Berhasil!", "Data tipe berhasil disimpan :D", "success");   
					$('#mdtipe').modal('hide');
					e.stopImmediatePropagation();
					e.preventDefault();
					btn.unbind();
				}
				else{
					swal("Gagal!", "Data tipe gagal disimpan :(", "error");   	
				}
				gettipe();
			});	
		});
	});
</script>