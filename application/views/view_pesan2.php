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

						<div class="col-sm-12">
							<div class="card wizard-content">
								<div class="card-body">
									<!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span></button> -->

									<!-- <div class="alert alert-success"> <i class="ti-info"></i> <span id="detailinfo">Detail pemesanan tiket akan muncul disini.</span>
									</div> -->
									<h4 class="card-title">Pesan Tiket</h4>
									<h6 class="card-subtitle">Lengkapi data-data dengan lengkap</h6>
									<form id="fpesan" class="validation-wizard wizard-circle">
										<!-- Step 1 -->
										<h6>Step 1</h6>
										<section>
											<div class="row">
												<div class="col-md-12">

													<div id="minimizedcol" data-children=".item">

														<div class="card card-outline-info item">
															<div class="card-header">
																<h4 class="card-title m-b-0 text-white text-center" data-toggle="collapse" data-parent="#minimizedcol" href="#minimizedcol1" role="button" aria-expanded="true" aria-controls="minimizedcol1">
																	Cari
																</h4>
															</div>
															<div id="minimizedcol1" class="card-body collapse show" role="tabpanel">
																<div class="card-body">
																	<div class="row col-md-12">

																		<div class="col-md-8">
																			<div class="input-group">
																				<input type="text" name="dari" id="dari" class="form-control kota" placeholder="Berangkat Dari" autocomplete="on">


																				<span class="input-group-addon bg-info b-0 text-white mdi mdi-swap-horizontal" title="Tukar" id="tukar"></span>

																				<input type="text" name="ke" id="ke" class="form-control kota" placeholder="Berangkat Ke">

																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="form-group">
																				<input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Berangkat">

																			</div>
																		</div>


																	<!-- <div class="col-md-2">
																		<div class="form-group">
																			<label for="jumlah"> Jumlah : <span class="danger">*</span> </label>
																			<input type="text" class="form-control required" id="jumlah" name="jumlah" placeholder="Jumlah Orang">
																			<small class="form-control-feedback">(Umur >= 3 tahun)</small>
																		</div>
																	</div> -->

																<!-- <div class="col-md-2">
																	<div class="form-group">
																		<label for="kelas"> Kelas : <span class="danger">*</span> </label>

																		<select name="kelas" id="kelas" class="form-control">
																			<option value=""></option>
																			<option value="Ekonomi">Ekonomi</option>
																			<option value="Bisnis">Bisnis</option>
																			<option value="Eklusif">Eklusif</option>
																		</select>

																	</div>
																</div> -->
																<div class="col-sm-1">
																	<div class="form-group">
																		<span class="input-group-btn">
																			<button type="button" class="btn btn-success btn-circle pull-right" title="Cari" id="cari"><i class="fa fa-search"></i></button>
																		</span>
																	</div>
																</div>

															</div>

															<div>
															</div>
														</div>
													</div>
												</div>

												<div class="card card-outline-info item">
													<div class="card-header">
														<h4 class="card-title m-b-0 text-white text-center" data-toggle="collapse" data-parent="#minimizedcol" href="#minimizedcol2" role="button" aria-expanded="true" aria-controls="minimizedcol2">
															Jadwal
														</h4>
													</div>
													<div id="minimizedcol2" class="card-body collapse" role="tabpanel">
														<div class="card-body">
															<div class="table-responsive">
																<table class="table table-bordered table-striped dataTable no-footer" id="tkendaraan">
																	<thead>
																		<tr>
																			<th>No.</th>
																			<th>Kendaraan</th>
																			<th>Nama</th>
																			<th>Berangkat dari</th>
																			<th>Tujuan</th>
																			<th>Waktu berangkat</th>
																			<th>Waktu Sampai</th>
																			<th>Harga</th>
																			<th>Opsi</th>
																		</tr>
																	</thead>
																	<tbody id="djadwal">
																		
																	</tbody>
																</table>
															</div>

														</div>
													</div>
												</div>

												<!-- end of collapse -->
											</div>
										</div>


										<!-- end of col-sm-12 form -->
									</div>


								</section>
								<!-- Step 2 -->
								<h6>Step 2</h6>
								<section>
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-warning pull-right" id="resetf"><span class="mdi mdi-refresh"> Reset</span></button>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<div hidden>
												<input type="text" name="noid" id="noid" class="form-control" placeholder="noid" readonly>
											</div>

											<div class="form-group">
												<label for="nik"> Identitas / NIK : <span class="danger">*</span> </label>

												<div class="input-group">
													<input type="text" name="nik" id="nik" class="form-control required" placeholder="Identitas / NIK">
													<span class="input-group-btn">
														<button type="button" class="btn btn-success btn-circle" title="Tambah" id="addcustomer"><i class="fa fa-plus"></i></button>
														<!-- <button type="button" class="btn btn-success btn-circle" title="Cari2" id="cari2"><i class="fa fa-search"></i></button> -->
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

												</div>

											</section>

											<!-- Step 3 -->
											<h6>Step 3</h6>
											<section>
												<div class="row">
													<div class="card card-outline-info item">
														<div class="card-header">
															<h4 class="card-title m-b-0 text-white text-center">Data Kursi</h4>
														</div>
														<div class="card-body">
															<div class="card-body">
																<div class="col-md-12">
																	<div class="text-center">
																		<input type="text" name="korsiz" id="korsiz" class="form-control text-center col-md-5 required" placeholder="Kursi yang dipilih akan muncul disini" readonly>
																	</div>
																</div>
															</div>
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
											</section>

											<!-- Step 4 -->
											<h6>Step 4</h6>
											<section>
												<div class="card-body">
													<button type="button" class="btn btn-success" title="Cetak Faktur" id="cetak"><i class="mdi mdi-printer"> Cetak</i></button>
												</div>
												<div class="row clearfix">

													<div class="col-sm-6">

														<div class="row">
															
															<div class="col-sm-12">
																<div class="form-group row">
																	<label class="control-label text-left col-md-3" for="nik2">NIK</label>

																	<div class="col-md-9">
																		<input type="text" name="nik2" id="nik2" class="form-control" placeholder="NIK" readonly>
																	</div>
																</div>
															</div>
														</div>

														<div class="row">
															<div class="col-md-12">
																<div class="form-group row">
																	<label class="control-label text-left col-md-3" for="namalengkap2">Nama</label>
																	<div class="col-md-9">
																		<input type="text" class="form-control" id="namalengkap2" name="namalengkap2" readonly>
																	</div>
																</div>
															</div>
														</div>

														<div class="row">
															<div class="col-md-12">
																<div class="form-group row">
																	<label class="control-label text-left col-md-3" for="depart_at2"> Berangkat dari</label>
																	<div class="col-md-9">
																		<input type="text" class="form-control" id="depart_at2" name="depart_at2" readonly>
																	</div>
																</div>
															</div>
														</div>

														<div class="row">
															<div class="col-md-12">
																<div class="form-group row">
																	<label class="control-label text-left col-md-3" for="kursi2"> Kursi</label>
																	<div class="col-md-9">
																		<input type="text" class="form-control" id="kursi2" name="kursi2" readonly>
																	</div>
																</div>
															</div>
														</div>


														<!-- end of row-sm-6 -->
													</div>

													<div class="col-sm-6">

														<div class="row">
															<div class="col-md-12">
																<div class="form-group row">
																	<label class="control-label text-left col-md-3" for="ruteid2">ID Rute</label>
																	<div class="col-md-9">
																		<input type="text" class="form-control" id="ruteid2" name="ruteid2" readonly>
																	</div>
																</div>
															</div>
														</div>

														<div class="row">
															<div class="col-md-12">
																<div class="form-group row">
																	<label class="control-label text-left col-md-3" for="kendaraan2"> Kendaraan</label>
																	<div class="col-md-9">
																		<input type="text" class="form-control" id="kendaraan2" name="kendaraan2" readonly>
																	</div>
																</div>
															</div>
														</div>



														<div class="row">
															<div class="col-md-12">
																<div class="form-group row">
																	<label class="control-label text-left col-md-3" for="rute2">Rute</label>
																	<div class="col-md-9">
																		<input type="text" class="form-control" id="rute2" name="rute2" readonly>
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
<?php 
$this->load->view('parts/footer');

?>

<script type="text/javascript">
	$(function(){
		loadedfirst();
	});
	var reservationid='';
	loadedfirst();
	function loadedfirst(){
		var nikz ="<?php echo site_url('pesan/getcustomerfirst'); ?>";
		var kotaz ="<?php echo site_url('pesan/getkota'); ?>";
		$('#nik').autocomplete({
			source : nikz
		});

		$('#nik').on('change', function (){
			if($('#nik').val()==''){
				swal("Error!","Silahkan isi No Identitas / NIK terlebih dahulu!","error");
			}else{
				getcustomer($('#nik').val());
			}
		});

		$('.kota').autocomplete({
			source : kotaz,
			minLength:2
		});
	}

	$('#cari').click(function(){
		var type = '<?php echo $type;?>';
		var from = $('#dari').val();
		var to = $('#ke').val();
		var tgl = $('#tanggal').val();
		if(from=='' || to=='' || tgl==''){
			swal('Error','Harap isi semua field','error');
		}else{
			
			var tglz = new Date();
			var day = tglz.getDate()-1;
			var month = tglz.getMonth()+1;
			var year = tglz.getFullYear();
			if(day < 10){
				day = '0' + day;
			}
			if(month < 10){
				month = '0' + month;
			}
			var tglx = day+month+year;//hari ini

			var tgla = new Date(tgl);
			var day2 = tgla.getDate();
			var month2 = tgla.getMonth();
			var year2 = tgla.getFullYear();
			if(day2 < 10){
				day2 = '0' + day2;
			}
			if(month2 < 10){
				month2 = '0' + month2;
			}
			var tglb = day2+''+''+month2+''+year2;//input tgl
			
			if(tglb > tglx){
				getresult(type,from,to);
				$('#minimizedcol1').collapse('hide');
				$('#minimizedcol2').collapse('show');
			}else{
				swal('Error','Pemesanan pada tanggal tersebut tidak bisa','error');
			}
			// alert(tglx+' AND '+tglb);
		}
	});
	// $('#cari2').click(function(){
	// 	var nik = $('#nik').val();
	// 	getcustomer(nik);
	// });

	$('#addcustomer').click(function(e){
		
		var urlz = "<?php echo site_url('pesan/cekcustomer/'); ?>"+$('#nik').val();
		$.get(urlz,function(x){
			if(x=='Ada'){
				
				var url= '<?php echo site_url("pesan/updatecustomer");?>';
				var data= $('#fpesan').serializeArray();;
				$.post(url,data,function(i){
					if(i=="Berhasil"){
						swal('Berhasil','Data berhasil diupdate :D','success');
						getcustomer($('#nik').val());
						e.stopImmediatePropagation();
						e.preventDefault();

					}
					else{
						swal('Gagal','Data gagal diupdate :(','error');
					}
				});
			}

			else{
				
				var url= '<?php echo site_url("pesan/savecustomer");?>';
				var data= $('#fpesan').serializeArray();;
				$.post(url,data,function(i){
					if(i=="Berhasil"){
						swal('Berhasil','Data berhasil ditambahkan :D','success');
						getcustomer($('#nik').val());
						e.stopImmediatePropagation();
						e.preventDefault();

					}
					else{
						swal('Gagal','Data gagal ditambahkan :(','error');
					}
				});
			}
		});
	});


	function getcustomer(nik){
		var url = "<?php echo site_url('pesan/getcustomer/'); ?>"+nik;
		if($('#nik').val()==0){
			swal("Error!","Silahkan isi No Identitas / NIK terlebih dahulu!","error");
		}else{
			var btnclass = $('#addcustomer').find('i');
			var btntitle = $('#addcustomer');
			$.get(url,function(x){
				if(x=='Nothing'){
					swal("Error!","Data Pelanggan tidak ada!","error");
					btnclass.addClass('fa-plus');
					btnclass.removeClass('fa-pencil');
					btntitle.attr('title','Tambah');
					// $('#noid').val('');
					// $('#nik').val('');
					// $('#namalengkap').val('');
					// $('#alamat').val('');
					// $('#telpon').val('');
					// $('#jk').val('');

					// $('#nik2').val('');
					// $('#namalengkap2').val('');

				}else{
					btnclass.removeClass('fa-plus');
					btnclass.addClass('fa-pencil');
					btntitle.attr('title','Edit');
					$.getJSON(url,function(x){
						$.each(x,function(i,j){
							$('#noid').val(j.customerid);
							$('#nik').val(j.NIK);
							$('#namalengkap').val(j.name);
							$('#alamat').val(j.address);
							$('#telpon').val(j.phone);
							$('#jk').val(j.gender);

							$('#nik2').val(j.NIK);
							$('#namalengkap2').val(j.name);
							// $('#alamat2').val(j.address);
							// $('#telpon2').val(j.phone);
							// $('#jk2').val(j.gender);
						});
					});
				}
			});
		}			
	}
	function getresult(type,from,to){
		var url = "<?php echo site_url('pesan/getresult/'); ?>"+type+'/'+from+'/'+to;
		$.get(url,function(x){
			$('#djadwal').html(x);
		});
		// $('#tkendaraan').DataTable();
	}
	// $('#tkendaraan').DataTable();
	$('#djadwal').on('click','.pilih2',function(){
		var tgl = $('#tanggal').val();
		// var kode = $(this).closest('tr').find('td:eq(1)').text();
		var ruteid = $(this).closest('tr').find('td:eq(1)').text();
		var kendaraan = $(this).closest('tr').find('td:eq(2)').text();
		var berangkat = $(this).closest('tr').find('td:eq(4)').text();
		var tujuan = $(this).closest('tr').find('td:eq(5)').text();
		var harga = $(this).closest('tr').find('td:eq(8)').text();
		var seat = $(this).closest('tr').find('td:eq(9)').text();
		// var seat = $(this).closest('tr').find('td:eq(7)').text();
		
		$('#depart_at2').val(berangkat);
		$('#rute2').val(berangkat+'-'+tujuan);
		$('#kendaraan2').val(kendaraan);

		$('#ruteid2').val(ruteid);
		$('#harga').val(harga);
		$('#xas').html('');
		$('#xad').html('');
		
		
		generatekorsi(seat);
		checkkursi(tgl,ruteid);
		$(".actions a[href$='#next']").trigger('click');
		
	});

	// korsi
	var x='';
	function some(x,i){//removed var z
		return '<div class="card text-center col-sm-6 korsi" id="card'+x+i+'"><div class="card-body"><h4 class="card-title">'+x+i+'</h4><p class="card-text"><span id="korsi'+i+'">Kursi '+x+i+' <i class="mdi mdi-chair-school"></span></i></p></div></div>';
	}
	var y=1;
	// var z = 'col-sm-6';
	var h = 0;
	function generatekorsi(h){

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
					$('#korsiz').val(kode);
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
					$('#korsiz').val('');
				}
			}
			// alert(y);
			// $(this).toggleClass('selected');
		}); 
	}

	function checkkursi(tgl,rute,type){
		var tglz = new Date(tgl);
		var day = tglz.getDate();
		var month = tglz.getMonth();
		var year = tglz.getFullYear();
		var tglx = year+month+day;
		var url = "<?php echo site_url('pesan/checkkursi/'); ?>"+tglx+'/'+rute+'/'+'<?php echo $type;?>';
		$.getJSON(url,function(x){
			$.each(x,function(i,j){
				// alert(j.seat_code);
				console.log(j.seat_code);
				$('#card'+j.seat_code).addClass('seat');
				$('#card'+j.seat_code).unbind('click');
				$('#card'+j.seat_code).bind('click',function(){
					var kode = $(this).find('h4').text();
					$.toast({
						heading: 'Informasi',
						text: 'Kursi '+kode+' sudah dipesan',
						position: 'top-right',
						loaderBg:'#ff6849',
						icon: 'warning',
						hideAfter: 3500, 
						stack: 6
					});
				});
			});
			// for(var i =0;i < x.lenght;i++){
			// 	var z = json[i];
			// 	console.log(z.seat_code);
			
			// }
		});
	}

	$(".actions a[href$='#finish']").bind('click',function(){
		// alert('Finish');
		var url = "<?php echo site_url('pesan/pesan'); ?>";
		var data = $('#fpesan').serializeArray();
		swal({
			title: "Konfirmasi?",   
			text: "Konfirmasi pemesanan tiket",
			type: "warning",   
			showCancelButton: true,   
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Konfirmasi",   
			cancelButtonText: "Batal",   
			closeOnConfirm: false,   
			closeOnCancel: false 
		}, function(isConfirm){   
			if (isConfirm) {     
				$.post(url,data,function(x){
					if(x=='Gagal'){
						swal('Gagal','Data gagal disimpan :(','error');
						
					}
					else{
						swal('Sukses','Pemesanan tiket berhasil disimpan','success');
						reservationid = x;
					}
				});
			} else {     
				swal("Dibatalkan", "Pemesanan tiket dibatalkan", "error");   
			} 
		});

	});
	$('#tukar').click(function(e){
		e.preventDefault();
		var val1, val2, val3 ='';
		val1 = $('#dari').val();
		val2 = $('#ke').val();
		val3 = val1;

		$('#dari').val(val2);
		$('#ke').val(val3);

	});
	$('#tanggal').datepicker({
		toggleActive : true,
		format: 'yyyy-mm-dd'
	});
	$('#cetak').click(function(){
		window.open("<?php echo site_url('pesan/cetak/'); ?>"+reservationid+'/'+'<?php echo $type;?>');
	});
	$('#resetf').click(function(){
		$('#noid').val('');
		$('#nik').val('');
		$('#namalengkap').val('');
		$('#alamat').val('');
		$('#telpon').val('');
		$('#jk').val('');

		$('#nik2').val('');
		$('#namalengkap2').val('');
	});

	// validasi number
	$('#nik, #telpon').on('keypress',function(evt){
		if(evt.which < 48 || evt.which > 57){
			evt.preventDefault();
		}
	});
	$('#namalengkap').on('keypress',function(evt){
		if(evt.which < 65 || evt.which > 90 && evt.which < 97 || evt.which > 122){
			if(evt.which != 32){
				evt.preventDefault();
			}
		}
	});

</script>