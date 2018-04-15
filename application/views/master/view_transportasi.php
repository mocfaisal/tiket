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
								<td>Jenis</td>
								<td>Nama</td>
								<td>Kode</td>
								<td>Jumlah Kursi</td>
								<td>Opsi</td>
							</tr>
						</thead>
						<tbody id="dtransportasi">
							
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
$this->load->view('forms/transportasi');

?>

<script type="text/javascript">
	gettransportasi();
	jumlahseat();
	function jumlahseat(){
		var jml = $('#jumlah').val();
		$('#jml').text(jml);
	}
	function gettransportasi(){
		var url = "<?php echo site_url('data/gettransportasi');?>";
		$.get(url,function(x){
			$('#dtransportasi').html(x);
		});	
	}
	
	$('#jumlah').on('change',function(){
		var jml = $(this).val();
		$('#jml').text(jml);
	});

	$('#dtransportasi').on('click','.editbtn',function(e){
		e.preventDefault();
		$('#mdltransportasi').text("Edit Transportasi");
		var id = $(this).closest('tr').find('td:eq(1)').text();
		var tipe = $(this).closest('tr').find('td:eq(2)').text();
		var tipe2 = $(this).closest('tr').find('td:eq(3)').text();
		var nama = $(this).closest('tr').find('td:eq(4)').text();
		var kode = $(this).closest('tr').find('td:eq(5)').text();
		var jumlah = $(this).closest('tr').find('td:eq(6)').text();
		// var pass = $(this).closest('tr').find('td:eq(4)').text();
		$('#id').val(id);
		$('#tipe').val(tipe);
		// var jmltipe = document.getElementById("tipe").options.length;
		// $('#tipe').val(tipe);
		// alert(tipe);
		// document.getElementById("tipe").selectedIndex = tipe-1;
		// for(var i=1; i <= jmltipe; i++){
		// 	if(tipe==i){
		// 		$('#tipe').val(i);
		// 	}
		// 	break;
		// }

		$('#desc').val(nama);
		$('#kode').val(kode);
		$('#jumlah').val(jumlah);
		jumlahseat();
		// $('#ftransportasi').find('.form-group, .m-b-40').addClass('focused');
		$('#mdtransportasi').modal('show');
		$('#savebtn').click(function(e){
			var url = "<?php echo site_url('data/edittransportasi/'); ?>"+id;
			var data= $('#ftransportasi').serializeArray();
			var btn = $(this);
			$.post(url,data,function(x){
				if(x=="Berhasil"){
					swal("Berhasil!", "Data transportasi berhasil disimpan :D", "success");
					$('#mdtransportasi').modal('hide');
					e.stopImmediatePropagation();
					e.preventDefault();
					btn.unbind();
				}
				else{
					swal("Gagal!", "Data transportasi gagal disimpan :(", "error");   	
				}
				gettransportasi();
			});	
		});
		
	});

	$('#dtransportasi').on('click','.hapusbtn',function(e){
		e.preventDefault();
		var kode = $(this).closest('tr').find('td:eq(1)').text();
		var transportasiname = $(this).closest('tr').find('td:eq(3)').text();
		var url ="<?php echo site_url('data/hapustransportasi/'); ?>"+kode;
		swal({   
			title: "Apa kamu yakin?",   
			text: "kamu akan menghapus transportasi dengan data : "+kode+" ?",
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
						swal("Terhapus!", "Data transportasi berhasil dihapus :D", "success");
						e.stopImmediatePropagation();
						e.preventDefault();
					}
					else{
						swal("Gagal!", "Data transportasi gagal dihapus :(", "error");   	
					}
				});
				gettransportasi();

			} else {     
				swal("Dibatalkan", "Data tersebut aman :)", "error");   
			} 
		});
	});


	$('#addbtn').click(function(e){
		e.preventDefault();
		$('#tipe').val('');
		$('#desc').val('');
		$('#kode').val('');
		$('#jumlah').val('');

		$('#mdltransportasi').text("Tambah Transportasi");
		$('#mdtransportasi').find('#pass').removeAttr('hidden disabled');
		$('#mdtransportasi').modal('show');
		$('#savebtn').click(function(e){
			var	transportasiname = $('#transportasiname').text();
			var url = "<?php echo site_url('data/tambahtransportasi'); ?>";
			var data= $('#ftransportasi').serializeArray();
			var btn = $(this);
			$.post(url,data,function(x){
				if(x=="Berhasil"){
					swal("Berhasil!", "Data transportasi berhasil disimpan :D", "success");   
					$('#mdtransportasi').modal('hide');
					e.stopImmediatePropagation();
					e.preventDefault();
					btn.unbind();
				}
				else{
					swal("Gagal!", "Data transportasi gagal disimpan :(", "error");   	
				}
				gettransportasi();
			});	
		});
	});
</script>