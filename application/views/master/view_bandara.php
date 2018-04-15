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
								<td>Nama Pesawat</td>
								<td>Kota</td>
								<td>Singkatan</td>
								<td>Opsi</td>
							</tr>
						</thead>
						<tbody id="dbandara">
							
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
$this->load->view('forms/bandara');
$this->load->view('data/kendaraan');

?>

<script type="text/javascript">
	getbandara();
	function getbandara(){
		var url = "<?php echo site_url('data/getbandara');?>";
		$.get(url,function(x){
			$('#dbandara').html(x);
		});	
	}


	$('#dbandara').on('click','.editbtn',function(e){
		e.preventDefault();
		$('#mdlbandara').text("Edit Bandara");
		var id = $(this).closest('tr').find('td:eq(1)').text();
		var name = $(this).closest('tr').find('td:eq(2)').text();
		var city = $(this).closest('tr').find('td:eq(3)').text();
		var abbr = $(this).closest('tr').find('td:eq(4)').text();
		
		
		// var pass = $(this).closest('tr').find('td:eq(4)').text();
		$('#id').val(id);
		$('#name').val(name);
		$('#city').val(city);
		$('#abbr').val(abbr);
		
		$('#fbandara').find('.form-group, .m-b-40').addClass('focused');
		$('#mdbandara').modal('show');
		$('#savebtn').click(function(){
			var url = "<?php echo site_url('data/editbandara/'); ?>"+id;
			var data= $('#fbandara').serializeArray();
			var btn = $(this);
			$.post(url,data,function(x){
				if(x=="Berhasil"){
					swal("Berhasil!", "Data bandara berhasil diupdate :D", "success");
					$('#mdbandara').modal('hide');
					e.stopImmediatePropagation();
					e.preventDefault();
					btn.unbind();
				}
				else{
					swal("Gagal!", "Data bandara gagal diupdate :(", "error");   	
				}
				getbandara();
			});	
		});
		
	});

	$('#dbandara').on('click','.hapusbtn',function(e){
		e.preventDefault();
		var id = $(this).closest('tr').find('td:eq(1)').text();
		var url ="<?php echo site_url('data/hapusbandara/'); ?>"+id;
		swal({
			title: "Apa kamu yakin?",   
			text: "kamu yakin akan menghapus bandara : "+id+" ?",
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
						swal("Terhapus!", "Data bandara  berhasil dihapus :D", "success");
						e.stopImmediatePropagation();
						e.preventDefault();
					}
					else{
						swal("Gagal!", "Data bandara  gagal dihapus :(", "error");   	
					}
				});
				getbandara();

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
		$('#mdlbandara').text("Tambah Bandara");
		$('#mdbandara').find('#pass').removeAttr('hidden disabled');
		$('#mdbandara').modal('show');
		$('#savebtn').click(function(e){
			if($('#id').val()=='' || $('#name').val()== '' || $('#city').val()=='' || $('#abbr').val()==''){
				swal('error','Harap isi semua field','error');
			}else{
				var url = "<?php echo site_url('data/tambahbandara'); ?>";
				var data= $('#fbandara').serializeArray();
				var btn = $(this);
				$.post(url,data,function(x){
					if(x=="Berhasil"){
						swal("Berhasil!", "Data bandara berhasil disimpan :D", "success");   
						$('#mdbandara').modal('hide');
						e.stopImmediatePropagation();
						e.preventDefault();
						btn.unbind();
					}
					else{
						swal("Gagal!", "Data bandara gagal disimpan :(", "error");   	
					}
					getbandara();
				});	
			}
		});
	});
	
</script>