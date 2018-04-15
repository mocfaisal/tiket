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
								<td>ID</td>
								<td>Nama Stasiun</td>
								<td>Kota</td>
								<td>Singkatan</td>
								<td>Opsi</td>
							</tr>
						</thead>
						<tbody id="dstasiun">
							
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
$this->load->view('forms/stasiun');
$this->load->view('data/kendaraan');

?>

<script type="text/javascript">
	getstasiun();
	function getstasiun(){
		var url = "<?php echo site_url('data/getstasiun');?>";
		$.get(url,function(x){
			$('#dstasiun').html(x);
		});	
	}


	$('#dstasiun').on('click','.editbtn',function(e){
		e.preventDefault();
		$('#mdlstasiun').text("Edit Stasiun");
		var id = $(this).closest('tr').find('td:eq(1)').text();
		var name = $(this).closest('tr').find('td:eq(2)').text();
		var city = $(this).closest('tr').find('td:eq(3)').text();
		var abbr = $(this).closest('tr').find('td:eq(4)').text();
		
		
		// var pass = $(this).closest('tr').find('td:eq(4)').text();
		$('#id').val(id);
		$('#name').val(name);
		$('#city').val(city);
		$('#abbr').val(abbr);
		
		$('#fstasiun').find('.form-group, .m-b-40').addClass('focused');
		$('#mdstasiun').modal('show');
		$('#savebtn').click(function(){
			var url = "<?php echo site_url('data/editstasiun/'); ?>"+id;
			var data= $('#fstasiun').serializeArray();
			var btn = $(this);
			$.post(url,data,function(x){
				if(x=="Berhasil"){
					swal("Berhasil!", "Data stasiun berhasil diupdate :D", "success");
					$('#mdstasiun').modal('hide');
					e.stopImmediatePropagation();
					e.preventDefault();
					btn.unbind();
				}
				else{
					swal("Gagal!", "Data stasiun gagal diupdate :(", "error");   	
				}
				getstasiun();
			});	
		});
		
	});

	$('#dstasiun').on('click','.hapusbtn',function(e){
		e.preventDefault();
		var id = $(this).closest('tr').find('td:eq(1)').text();
		var url ="<?php echo site_url('data/hapusstasiun/'); ?>"+id;
		swal({
			title: "Apa kamu yakin?",   
			text: "kamu yakin akan menghapus stasiun : "+id+" ?",
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
						swal("Terhapus!", "Data stasiun  berhasil dihapus :D", "success");
						e.stopImmediatePropagation();
						e.preventDefault();
					}
					else{
						swal("Gagal!", "Data stasiun  gagal dihapus :(", "error");   	
					}
				});
				getstasiun();

			} else {     
				swal("Dibatalkan", "Data tersebut aman :)", "error");   
			} 
		});
	});


	$('#addbtn').click(function(e){
		e.preventDefault();
		$('#id').val('');
		$('#name').val('');		
		$('#city').val('');
		$('#abbr').val('');
		$('#mdlstasiun').text("Tambah Stasiun");
		$('#mdstasiun').find('#pass').removeAttr('hidden disabled');
		$('#mdstasiun').modal('show');
		$('#savebtn').click(function(e){
			var url = "<?php echo site_url('data/tambahstasiun'); ?>";
			var data= $('#fstasiun').serializeArray();
			var btn = $(this);
			$.post(url,data,function(x){
				if(x=="Berhasil"){
					swal("Berhasil!", "Data stasiun berhasil disimpan :D", "success");   
					$('#mdstasiun').modal('hide');
					e.stopImmediatePropagation();
					e.preventDefault();
					btn.unbind();
				}
				else{
					swal("Gagal!", "Data stasiun gagal disimpan :(", "error");   	
				}
				getstasiun();
			});	
		});
	});
	
</script>