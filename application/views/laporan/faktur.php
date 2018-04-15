<?php 
$this->load->view('parts/header');
$this->load->view('parts/navigation');

?>

<div class="row">
	<div class="col-12">
		<div id="minimizedcol" data-children=".item">

			<div class="card card-outline-info item">
				<div class="card-header">
					<h4 class="card-title m-b-0 text-white text-center" data-toggle="collapse" data-parent="#minimizedcol" href="#minimizedcolx1" role="button" aria-expanded="true" aria-controls="minimizedcol1">
						Jenis Kendaraan
					</h4>
				</div>

				<div id="minimizedcolx1" class="card-body collapse show" role="tabpanel">
					<div class="card-body">

						<div class="btn-group btn-group-justified col-lg-12" data-toggle="buttons">

							<div class="col-lg-6">
								<div class="card text-center">
									<div class="card-body">
										<h4 class="card-title">Kereta</h4>
										<label class="btn btn-primary">
											<input type="radio" class="jenis" name="jenis" id="rkereta" value="Kereta"> Kereta
										</label>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card text-center">
									<div class="card-body">
										<h4 class="card-title">Pesawat</h4>
										<label class="btn btn-primary">
											<input type="radio" class="jenis" name="jenis" id="rpesawat" value="Pesawat"> Pesawat
										</label>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

			</div>

			<div class="card card-outline-info item">
				<div class="card-header">
					<h4 class="card-title m-b-0 text-white text-center" data-toggle="collapse" data-parent="#minimizedcol" href="#minimizedcol1" role="button" aria-expanded="true" aria-controls="minimizedcol1">
						Faktur
					</h4>
				</div>
				
				<div id="minimizedcol1" class="card-body collapse" role="tabpanel">
					<div class="card-body">

						<div class="card-body">
							<div class="input-group">
								<input type="text" name="caritxt" id="caritxt" class="form-control col-md-12" placeholder="Cari No Faktur / ID Reservasi">
								<button type="button" class="btn btn-success" id="cari"><i class="fa fa-search"></i></button>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-md-6">

								<div class="row">
									<div class="col-sm-12">
										<div class="form-group row">
											<label class="control-label text-left col-md-3" for="nik">No Faktur</label>

											<div class="col-md-9">
												<input type="text" name="nofaktur" id="nofaktur" class="form-control" placeholder="No Faktur" readonly>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="form-group row">
											<label class="control-label text-left col-md-3" for="nik">NIK</label>

											<div class="col-md-9">
												<input type="text" name="nik" id="nik" class="form-control" placeholder="NIK" readonly>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="control-label text-left col-md-3" for="namalengkap">Nama</label>
											<div class="col-md-9">
												<input type="text" class="form-control" id="namalengkap" name="namalengkap" readonly>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="control-label text-left col-md-3" for="reservation_date"> Tanggal Pemesanan</label>
											<div class="col-md-9">
												<input type="text" class="form-control" id="reservation_date" name="reservation_date" readonly>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="control-label text-left col-md-3" for="depart_date"> Tanggal Berangkat</label>
											<div class="col-md-9">
												<input type="text" class="form-control" id="depart_date" name="depart_date" readonly>
											</div>
										</div>
									</div>
								</div>
							</div>


							<!-- batas -->

							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="control-label text-left col-md-3" for="depart_at"> Berangkat dari</label>
											<div class="col-md-9">
												<input type="text" class="form-control" id="depart_at" name="depart_at" readonly>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="control-label text-left col-md-3" for="kursi"> Kursi</label>
											<div class="col-md-9">
												<input type="text" class="form-control" id="kursi" name="kursi" readonly>
											</div>
										</div>
									</div>
								</div>




								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="control-label text-left col-md-3" for="kendaraan"> Kendaraan</label>
											<div class="col-md-9">
												<input type="text" class="form-control" id="kendaraan" name="kendaraan" readonly>
											</div>
										</div>
									</div>
								</div>



								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="control-label text-left col-md-3" for="rute">Rute</label>
											<div class="col-md-9">
												<input type="text" class="form-control" id="rute" name="rute" readonly>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="control-label text-left col-md-3" for="harga">Harga</label>
											<div class="col-md-9">
												<input type="text" class="form-control" id="harga" name="harga" readonly>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="">
							<button type="button" class="btn btn-success pull-right" id="cetak"><i class="mdi mdi-printer"> Cetak</i></button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<?php 
	$this->load->view('parts/footer');

	?>
	<script type="text/javascript">
		$('#cari').click(function(){
			var id = $('#caritxt').val();
			getfaktur(id,jenis);	
		});

		function getfaktur(id,jenis){
			var url = "<?php echo site_url('report/getfaktur/'); ?>"+id+'/'+jenis;
			$.getJSON(url,function(x){
				$.each(x,function(i,j){
					if(j.reservationid.length == 0){
						alert('tidak ada');
					}else{

						$('#nofaktur').val(j.reservationid);
						$('#nik').val(j.nik);
						$('#namalengkap').val(j.namalengkap);
						$('#reservation_date').val(j.reservation_date);
						$('#depart_date').val(j.depart_date);
						$('#depart_at').val(j.depart_at);
						$('#kursi').val(j.kursi);
						$('#kendaraan').val(j.kendaraan);
						$('#rute').val(j.rute);
						$('#harga').val(j.harga);
					}
				});
			});

		}
		$('#cetak').click(function(){
			var kode =$('#nofaktur').val();
			window.open("<?php echo site_url('report/cetakfaktur/'); ?>"+kode+'/'+jenis);
		});
		var jenis ='';
		$('.jenis').on('change',function(){
		// alert($(this).val());
		// var jenis = $('.jenis').parent('input').find('value').val();
		// var jenis = $("input[name='jenis']").val();
		if($(this).val()=='Kereta'){
			// alert('Kereta');
			jenis = 'Kereta';
		}
		else{
			// alert('Pesawat');
			jenis = 'Pesawat';
		}
		// $('#minimize1').trigger('click');
		$('#minimizedcolx1').collapse('hide');
		// $('#minimizedcol1').collapse('hide');
		$('#minimizedcol1').collapse('show');
		// getdataT();
	});
</script>