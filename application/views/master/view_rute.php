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
								<td>Kendaraan</td>
								<td>Berangkat</td>
								<td>Rute Dari</td>
								<td>Rute Tujuan</td>
								<td>Jam Berangkat</td>
								<td>Jam Tiba</td>
								<td>Harga</td>
								<td>Opsi</td>
								<td hidden>Tipe Kendaraan</td>
								<td hidden>Rute Des</td>
								<td hidden>Rute To</td>
							</tr>
						</thead>
						<tbody id="drute">
							
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
$this->load->view('forms/rute');
$this->load->view('data/kendaraan');

?>

<script type="text/javascript">
	
	getrute('<?php echo $tipe; ?>');
	getkendaraan();
	function getrute(tipe){
		var url = "<?php echo site_url('data/getrute/');?>"+tipe;
		$.get(url,function(x){
			$('#drute').html(x);
		});	
	}
	function getkendaraan(type){
		var url = "<?php echo site_url('data/getkendaraan/'); ?>"+'<?php echo $tipe;?>';
		$.get(url,function(i){
			$('#dkendaraan').html(i);
		});
	}
	$('#cariK').click(function(){
		$('#mdkendaraan').modal('show');
		$('#dkendaraan').on('click','.pilih',function(e){
			e.preventDefault();
			var id = $(this).closest('tr').find('td:eq(1)').text();
			var jenis = $(this).closest('tr').find('td:eq(2)').text();
			var nama = $(this).closest('tr').find('td:eq(3)').text();
			var kode = $(this).closest('tr').find('td:eq(4)').text();
			$('#idkendaraan').val(id);
			$('#tipekendaraan').val(jenis);
			$('#kendaraan').val(jenis+','+nama+','+kode);
			// alert(kode);
			getkota($('#tipekendaraan').val());
			$('#mdkendaraan').modal('hide');
		});
		
	});
	
	$('#drute').on('click','.editbtn',function(e){
		e.preventDefault();
		$('#mdlrute').text("Edit Rute");
		var kode = $(this).closest('tr').find('td:eq(1)').text();
		var idkendaraan = $(this).closest('tr').find('td:eq(2)').text();
		var kendaraan = $(this).closest('tr').find('td:eq(3)').text();
		var depart = $(this).closest('tr').find('td:eq(4)').text();
		var rutedes = $(this).closest('tr').find('td:eq(5)').text();
		var ruteto = $(this).closest('tr').find('td:eq(6)').text();
		var timego = $(this).closest('tr').find('td:eq(7)').text();
		var timearv = $(this).closest('tr').find('td:eq(8)').text();
		var harga = $(this).closest('tr').find('td:eq(9)').text();
		var tipekendaraan = $(this).closest('tr').find('td:eq(11)').text();
		var rutedes2 = $(this).closest('tr').find('td:eq(12)').text();
		var ruteto2 = $(this).closest('tr').find('td:eq(13)').text();
		
		// var pass = $(this).closest('tr').find('td:eq(4)').text();
		$('#depart').val(depart);

		// alert(rutedes2+' '+ruteto2);
		$('#timego').val(timego);
		$('#timearv').val(timearv);
		$('#harga').val(harga);
		$('#kendaraan').val(kendaraan);
		$('#idkendaraan').val(idkendaraan);
		$('#tipekendaraan').val(tipekendaraan);
		getkota($('#tipekendaraan').val());

		$('#rutedes').val(rutedes2);
		$('#ruteto').val(ruteto2);
		
		$('#frute').find('.form-group, .m-b-40').addClass('focused');
		$('#mdrute').modal('show');
		$('#savebtn').click(function(){
			var url = "<?php echo site_url('data/editrute/'); ?>"+kode;
			var data= $('#frute').serializeArray();
			var btn = $(this);
			$.post(url,data,function(x){
				if(x=="Berhasil"){
					swal("Berhasil!", "Data rute  berhasil disimpan :D", "success");
					$('#mdrute').modal('hide');
					e.stopImmediatePropagation();
					e.preventDefault();
					btn.unbind();
				}
				else{
					swal("Gagal!", "Data rute  gagal disimpan :(", "error");   	
				}
				getrute('<?php echo $tipe; ?>');
			});	
		});
		
	});

	$('#drute').on('click','.hapusbtn',function(e){
		e.preventDefault();
		var kode = $(this).closest('tr').find('td:eq(1)').text();
		var url ="<?php echo site_url('data/hapusrute/'); ?>"+kode;
		swal({
			title: "Apa kamu yakin?",   
			text: "kamu yakin akan menghapus rute : "+kode+" ?",
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
						swal("Terhapus!", "Data rute  berhasil dihapus :D", "success");
						e.stopImmediatePropagation();
						e.preventDefault();
					}
					else{
						swal("Gagal!", "Data rute  gagal dihapus :(", "error");   	
					}
				});
				getrute('<?php echo $tipe; ?>');

			} else {     
				swal("Dibatalkan", "Data tersebut aman :)", "error");   
			} 
		});
	});


	$('#addbtn').click(function(e){
		e.preventDefault();
		$('#idkendaraan').val('');
		$('#kendaraan').val('');		
		$('#depart').val('');
		$('#rutedes').val('');
		$('#ruteto').val('');
		$('#timego').val('');
		$('#timearv').val('');
		$('#harga').val('');
		// getkota($('#tipekendaraan').val());
		$('#tipekendaraan').val('');
		$('#mdlrute').text("Tambah Rute");
		$('#mdrute').find('#pass').removeAttr('hidden disabled');
		$('#mdrute').modal('show');
		$('#savebtn').click(function(e){
			var url = "<?php echo site_url('data/tambahrute'); ?>";
			var data= $('#frute').serializeArray();
			var btn = $(this);
			$.post(url,data,function(x){
				if(x=="Berhasil"){
					swal("Berhasil!", "Data rute berhasil disimpan :D", "success");   
					$('#mdrute').modal('hide');
					e.stopImmediatePropagation();
					e.preventDefault();
					btn.unbind();
				}
				else{
					swal("Gagal!", "Data rute gagal disimpan :(", "error");   	
				}
				getrute('<?php echo $tipe; ?>');
			});	
		});
	});
	// $(".select2").select2();
	
	function getkota(tipe){
		var url="<?php echo site_url('data/getkota/'); ?>"+tipe.toLowerCase();
		$('.kota').html('');
		$.getJSON(url,function(x){
			$.each(x,function(i,j){
				var isi = "<option value='"+j.id+"'>"+j.name+'('+j.abbr+')'+"</option>";
				$('.kota').append(isi);
			});
			

		});
		
	}
	
</script>