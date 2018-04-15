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
				<!-- <form class="form-material"> -->
					<!-- Validation wizard -->
					<div class="row" id="validation">
						<div class="col-12">
							<div class="card wizard-content">
								<div class="card-body">
									<div class="alert alert-success"> <i class="ti-info"></i> <span id="detailinfo">Detail pemesanan tiket akan muncul disini.
									</span>
									<!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span></button> -->
								</div>
								<h4 class="card-title">Pesan Tiket</h4>
								<h6 class="card-subtitle">Lengkapi data-data dengan lengkap</h6>
								<form id="fpesan" class="validation-wizard wizard-circle">
									<!-- Step 1 -->
									<h6>Step 1</h6>
									<section>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label for="nik"> NIK : <span class="danger">*</span> </label>

													<div class="input-group">
														<input type="text" name="nik" id="nik" class="form-control required" placeholder="Cari NIK">
														<span class="input-group-btn">
															<button type="button" class="btn btn-success btn-circle" title="Cari" id="cari"><i class="fa fa-search"></i></button>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="namalengkap"> Nama Lengkap : <span class="danger">*</span> </label>
													<input type="text" class="form-control required" id="namalengkap" name="namalengkap"> </div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="alamat"> Alamat : <span class="danger">*</span> </label>
														<input type="text" class="form-control required" id="alamat" name="alamat"> </div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="telpon"> No Telpon :</label>
															<input type="tel" class="form-control required" id="telpon" name="telpon"> </div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label for="jk"> Jenis Kelamin : <span class="danger">*</span> </label>
																<select class="custom-select form-control required" id="jk" name="jk">
																	<option value="">Pilih</option>
																	<option value="Laki-laki">Laki-laki</option>
																	<option value="Perempuan">Perempuan</option>
																</select>
															</div>
														</div>
<!-- <div class="col-md-6">
<div class="form-group">
<label for="wdate2">Date of Birth :</label>
<input type="date" class="form-control required" id="wdate2"> </div>
</div> -->

</div>
</section>
<!-- Step 2 -->
<h6>Step 2</h6>
<section>
	<div class="row">
		<div class="col-md-12">
			<div id="minimizedcol" data-children=".item">

				<div class="card card-outline-info item">
					<div class="card-header">
						<h4 class="card-title m-b-0 text-white text-center" data-toggle="collapse" data-parent="#minimizedcol" href="#minimizedcol1" role="button" aria-expanded="true" aria-controls="minimizedcol1">
							Jenis Kendaraan
						</h4>
					</div>
					<div id="minimizedcol1" class="card-body collapse show" role="tabpanel">
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
						<h4 class="card-title m-b-0 text-white text-center" data-toggle="collapse" data-parent="#minimizedcol" href="#minimizedcol2" role="button" aria-expanded="false" aria-controls="minimizedcol2">
							Data Kendaraan
						</h4>
					</div>
					<div id="minimizedcol2" class="card-body collapse" role="tabpanel">
						<div class="card-body">
							<div class="table-responsive">

								<table class="display nowrap table table-hover table-striped table-bordered dataTable">
									<thead>
										<tr>
											<td>No</td>
											<td>Nama</td>
											<td>Kode</td>
											<td>Berangkat dari</td>
											<td>Rute</td>
											<td>Jumlah Kursi</td>
											<td>Sisa</td>
											<td>Harga</td>
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

				<div class="card card-outline-info item">
					<div class="card-header">
						<h4 class="card-title m-b-0 text-white text-center" data-toggle="collapse" data-parent="#minimizedcol" href="#minimizedcol3" role="button" aria-expanded="false" aria-controls="minimizedcol3">
							Data Kursi
						</h4>
					</div>
					<div id="minimizedcol3" class="card-body collapse" role="tabpanel">
						<div class="card-body">

							<div class="row clearfix">
								<div class="row col-sm-5" id="xas"></div>
								<div class="col-sm-2"></div>
								<div class="row col-sm-5" id="xad"></div>
							</div>
							<!-- <div id="seat_code" hidden></div> -->
							<!-- <div id="seat_error"></div> -->

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- Step 3 -->
<h6>Step 3</h6>
<section>
	<div class="row clearfix">
		<div class="col-sm-6">

			<div class="row">
				<div class="col-sm-12">
					<div class="form-group row">
						<label class="control-label text-right col-md-3" for="nik2"> NIK :  </label>

						<div class="col-md-9">
							<input type="text" name="nik2" id="nik2" class="form-control" placeholder="NIK" readonly>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label text-right col-md-3" for="namalengkap2"> Nama Lengkap :  </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="namalengkap2" name="namalengkap2" readonly>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label text-right col-md-3" for="alamat2"> Alamat :  </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="alamat2" name="alamat2" readonly>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label text-right col-md-3" for="telpon2"> No Telpon :</label>
						<div class="col-md-9">
							<input type="tel" class="form-control" id="telpon2" name="telpon2" readonly>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label text-right col-md-3" for="jk2"> Jenis Kelamin :  </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="jk2" name="jk2" readonly>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="col-sm-6">
			
			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label text-right col-md-3" for="ruteid2"> Id Rute :  </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="ruteid2" name="ruteid2" readonly>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label text-right col-md-3" for="kendaraan2"> Kendaraan :  </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="kendaraan2" name="kendaraan2" readonly>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label text-right col-md-3" for="depart_at2"> Berangkat Dari :  </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="depart_at2" name="depart_at2" readonly>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label text-right col-md-3" for="rute2"> Rute :  </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="rute2" name="rute2" readonly>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label text-right col-md-3" for="kursi2"> Kursi :  </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="kursi2" name="kursi2" readonly>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label text-right col-md-3" for="harga"> Harga :  </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="harga" name="harga" readonly>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	
</section>
<!-- Step 4 -->
<!-- <h6>Step 4</h6> -->
<!-- <section>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="behName1">Behaviour :</label>
				<input type="text" class="form-control required" id="behName1">
			</div>
			<div class="form-group">
				<label for="participants1">Confidance</label>
				<input type="text" class="form-control required" id="participants1">
			</div>
			<div class="form-group">
				<label for="participants1">Result</label>
				<select class="custom-select form-control required" id="participants1" name="location">
					<option value="">Select Result</option>
					<option value="Selected">Selected</option>
					<option value="Rejected">Rejected</option>
					<option value="Call Second-time">Call Second-time</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="decisions1">Comments</label>
				<textarea name="decisions" id="decisions1" rows="4" class="form-control required"></textarea>
			</div>
			<div class="form-group">
				<label>Rate Interviwer :</label>
				<div class="c-inputs-stacked">
					<label class="inline custom-control custom-checkbox block">
						<input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
						<label class="inline custom-control custom-checkbox block">
							<input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
							<label class="inline custom-control custom-checkbox block">
								<input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
								<label class="inline custom-control custom-checkbox block">
									<input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
									<label class="inline custom-control custom-checkbox block">
										<input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
									</div>
								</div>
							</div>
						</div>
					</section> -->
				</form>
			</div>
		</div>
	</div>
</div>
<!-- end of form -->

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

<!-- <button id="mini1" type='button' class='btn btn-success btn-rounded' data-toggle='collapse' data-target='#minimizedcol1' role='button' aria-expanded='false' aria-controls='minimizedcol1'></button>
<button id="mini2" type='button' class='btn btn-success btn-rounded' data-toggle='collapse' data-target='#minimizedcol2' role='button' aria-expanded='false' aria-controls='minimizedcol2'></button>
<button id="mini3" type='button' class='btn btn-success btn-rounded' data-toggle='collapse' data-target='#minimizedcol3' role='button' aria-expanded='false' aria-controls='minimizedcol3'></button> -->


<?php 
$this->load->view('parts/footer');
$this->load->view('data/customer');

?>

<script type="text/javascript">
	var jenis = "";
	getdataC();
	function getdataC(){
		var url = "<?php echo site_url('pesan/getdataC'); ?>";
		$.get(url,function(x){
			$('#dcustomer').html(x);
		});
	}
	
	$('#cari').click(function(){
		
		$('#mdcustomer').modal('show');
		$('#dcustomer').on('click','.pilih',function(){
			var nik = $(this).closest('tr').find('td:eq(1)').text();
			var nama = $(this).closest('tr').find('td:eq(2)').text();
			var alamat = $(this).closest('tr').find('td:eq(3)').text();
			var telp = $(this).closest('tr').find('td:eq(4)').text();
			var jk = $(this).closest('tr').find('td:eq(5)').text();

			// first
			$('#nik').val(nik);
			$('#namalengkap').val(nama);
			$('#alamat').val(alamat);
			$('#telpon').val(telp);
			$('#jk').val(jk);

			// second

			$('#nik2').val(nik);
			$('#namalengkap2').val(nama);
			$('#alamat2').val(alamat);
			$('#telpon2').val(telp);
			$('#jk2').val(jk);


			$('#mdcustomer').modal('hide');
		});

	});
	$('.jenis').on('change',function(){
		// alert($(this).val());
		// var jenis = $('.jenis').parent('input').find('value').val();
		// var jenis = $("input[name='jenis']").val();
		if($(this).val()=='Kereta'){
			// alert('Kereta');
			jenis = 2;
		}
		else{
			// alert('Pesawat');
			jenis = 1;
		}
		// $('#minimize1').trigger('click');
		$('#minimizedcol1').collapse('hide');
		$('#minimizedcol2').collapse('show');
		getdataT();
	});
	// $('#minimize1').click(function(){
	// 	// $('#minimize2').trigger('click');
	// 	// $('#minimize3').trigger('click');
	// 	// minimized(2);
	// 	$('#mini1').removeClass('show');
	// 	$('#mini2').addClass('show');
	// 	$('#mini3').removeClass('show');
	// });
	// $('#minimize2').click(function(){
	// 	// $('#minimize2').trigger('click');
	// 	// $('#minimize3').trigger('click');
	// 	$('#mini1').removeClass('show');
	// 	$('#mini2').removeClass('show');
	// 	$('#mini3').addClass('show');
	// });

	// $('#minimize3').click(function(){
	// 	// $('#minimize2').trigger('click');
	// 	// $('#minimize3').trigger('click');
	// 	$('#mini1').addClass('show');
	// 	$('#mini2').removeClass('show');
	// 	$('#mini3').removeClass('show');
	// });
	// function minimized(i){

	// 	if($('#mini'+i).hasClass('show')){
	// 		$('#mini'+i).toggleClass('show');
	// 		// $('#minimize'+i).toggleClass('show');
	// 	}else{
	// 		$('#mini'+i).toggleClass('show');
	// 	}


	// 	// var mini = $('div.card-body.collapse#minimize'+i);
	// 	// if($('div.card-body.collapse').hasClass('show') && !$(this).hasClass('show')){
	// 	// 	// alert(i);
	// 	// 	$(mini).toggleClass('show');
	// 	// }
	// 	// else{
	// 	// 	$(mini).toggleClass('show');
	// 	// 	if($(mini).hasClass('show')){

	// 	// 	}
	// 	// }
	// }

	function getdataT(){
		var url = "<?php echo site_url('pesan/getdataT/'); ?>"+jenis;
		if(jenis !=''){
			$.get(url,function(x){
				$('#dtransportasi').html(x);
			});
		}
		else{
			alert('Silahkan pilih jenis kendaraan terlebih dahulu!')
		}
	}
	var x='';
	function some(x,i){//removed var z
		return '<div class="card text-center col-sm-6 korsi" id="card'+x+i+'"><div class="card-body"><h4 class="card-title">'+x+i+'</h4><p class="card-text"><span id="korsi'+i+'">Kursi '+x+i+' <i class="mdi mdi-chair-school"></span></i></p></div></div>';
	}
	var y=1;
	// var z = 'col-sm-6';
	var h = 0;
	function generatekorsi(h){
		// var g=0;
		// if(h%4==2){
		// 	g = parseInt(h);
		// 	g = g/4;
		// }
		// else{
		// 	g=h;
		// 	g = g/4;
		// }
		// alert(g);
		for (var i = 1; i <= h/4 ; i++){
			for(var j=1; j <= 4; j++){
				switch(j){
					case 1 :
					x='A';
					$('#xas').append(some(x,i));//removed var z = col-sm-6
					// $('#xas').closest('div').find('#card'+x+i).addClass(z);
					break;

					case 2 :
					x='B';
					$('#xas').append(some(x,i));
					// $('#xas').closest('div').find('#card'+x+i).addClass(z);			
					break;

					case 3 :
					x='C';
					$('#xad').append(some(x,i));
					// $('#xad').closest('div').find('#card'+x+i).addClass(z);			
					break;

					case 4 :
					x='D';
					$('#xad').append(some(x,i));
					// $('#xad').closest('div').find('#card'+x+i).addClass(z);
					break;

					default :
					x='A';
					$('#xas').append(some(x,i));
					// $('#xas').closest('div').find('#card'+x+i).addClass(z);
					break;

				}
				panggil(x,i);	
			}
		}
	}
	function panggil(x,i){
		$('#card'+x+i).click(function(){
			kode = $(this).closest('div').find('h4').text();
			// var select = $(this).closest('div').find('[id]').attr('id');
			var select = $(this);
			if($('div.card.korsi').hasClass('selected') && !$(select).hasClass('selected')){
				// alert('Silahkan unselect dulu');
				$.toast({
					heading: 'Error',
					text: 'Silahkan unselect terlebih dahulu!',
					position: 'top-right',
					loaderBg:'#ff6849',
					icon: 'error',
					hideAfter: 3500

				});

				// $('#next')[0].trigger('click');


			}else{
				$(select).toggleClass('selected');
				if($(select).hasClass('selected')){
					// $('#seat_code').text(kode);
					$('#kursi2').val(kode);
					$.toast({
						heading: 'Informasi',
						text: 'Kursi yang dipilih : '+ kode,
						position: 'top-right',
						loaderBg:'#ff6849',
						icon: 'success',
						hideAfter: 3500, 
						stack: 6
					});
					// $('#next').trigger('click');
					$(".actions a[href$='#next']").trigger('click');
				}else{
					$('#kursi2').val('');
				}
			}
			// alert(y);
			// $(this).toggleClass('selected');
		}); 
	}
	$('#dtransportasi').on('click','.pilih2',function(e){
		e.preventDefault();
		var ruteid = $(this).closest('tr').find('td:eq(2)').text();
		var seat = $(this).closest('tr').find('td:eq(7)').text();
		var harga = $(this).closest('tr').find('td:eq(9)').text();

		var berangkat = $(this).closest('tr').find('td:eq(5)').text();
		var rute = $(this).closest('tr').find('td:eq(6)').text();
		var kendaraan = $(this).closest('tr').find('td:eq(3)').text();
		
		$('#depart_at2').val(berangkat);
		$('#rute2').val(rute);
		$('#kendaraan2').val(kendaraan);

		$('#ruteid2').val(ruteid);
		$('#harga').val(harga);
		$('#xas').html('');
		$('#xad').html('');
		// alert(ruteid);
		generatekorsi(seat);
		// alert(seat);
		$('#minimizedcol2').collapse('hide');
		$('#minimizedcol3').collapse('show');

	});

	$('minimizedcol1').click(function(){
		$('#minimizedcol1').collapse('show');
		// $('#minimizedcol2').collapse('hide');
		// $('#minimizedcol3').collapse('hide');	
	});

	$('minimizedcol2').click(function(){
		// $('#minimizedcol1').collapse('hide');
		$('#minimizedcol2').collapse('show');
		// $('#minimizedcol3').collapse('hide');	
	});

	$('minimizedcol3').click(function(){
		// $('#minimizedcol1').collapse('hide');
		// $('#minimizedcol2').collapse('hide');
		$('#minimizedcol3').collapse('show');
	});

	$('#seat_code').bind('DOMSubtreeModified',function(){
		// $('#detailinfo').text($('#seat_code').text());
		// $('#kursi2').text($('#seat_code').text());
	});
	
	// $('.collapse').collapse();
	$(".actions a[href$='#finish']").bind('click',function(){
		// alert('Finish');
		var url = "<?php echo site_url('pesan/pesan'); ?>";
		var data = $('#fpesan').serializeArray();
		$.post(url,data,function(x){
			if(x=='Berhasil'){

			}else{

			}

		});
	});
</script>

