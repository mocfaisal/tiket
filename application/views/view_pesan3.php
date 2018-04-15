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

									<div class="alert alert-success"> <i class="ti-info"></i> <span id="detailinfo">Detail pemesanan tiket akan muncul disini.</span>
									</div>
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
																	Cari
																</h4>
															</div>
															<div id="minimizedcol1" class="card-body collapse" role="tabpanel">
																<div class="card-body">
																	<div class="row col-md-12">

																		<div class="col-md-6">
																			<div class="input-group">
																				<input type="text" name="dari" id="dari" class="form-control kota" placeholder="Berangkat Dari" autocomplete="on">


																				<span class="input-group-addon bg-info b-0 text-white mdi mdi-swap-horizontal" title="Tukar" id="tukar"></span>

																				<input type="text" name="ke" id="ke" class="form-control kota" placeholder="Berangkat Ke">

																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="form-group">
																				<input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tgl Berangkat">

																			</div>
																		</div>


																	<!-- <div class="col-md-2">
																		<div class="form-group">
																			<label for="jumlah"> Jumlah : <span class="danger">*</span> </label>
																			<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Orang">
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
																<div class="col-sm-3">
																	<div class="input-group">
																		<input type="number" name="Cqty" id="Cqty" placeholder="Jumlah" class="form-control">
																		<span class="input-group-btn">
																			<button type="button" class="btn btn-success btn-circle" title="Cari" id="cari"><i class="fa fa-search"></i></button>
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
										<div class="col-sm-12">
											<div id="minimizedcolz2" data-children=".item" class="nav-accordion" role="tablist" aria-multiselectable="true">

												<!-- batas -->
												<div class="card card-outline-info">

													<div class="card-header" role="tab" id="minimizedcolz2">
														<h5 class="card-title m-b-0 text-white text-center" data-toggle="collapse" data-parent="#minimizedcolz2" href="#minimizedcol4" aria-expanded="true" aria-controls="minimizedcol4">
															Data Pelanggan
														</h5>
													</div>

													<div id="minimizedcol4" class="collapse show" role="tabpanel" aria-labelledby="minimizedcol4">
														<div class="card-body">
															
															<div class="row">
																<div class="col-md-12">
																	<button type="button" class="btn btn-warning pull-right" id="resetf"><span class="mdi mdi-refresh"> Reset</span></button>
																</div>
															</div>

															<div class="col-sm-12">
																<div class="row">

																	<div hidden>
																		<input type="text" name="noid" id="noid" class="form-control" placeholder="noid" readonly>
																	</div>

																	<div class="form-group col-sm-12">
																		<label for="nik"> Identitas / NIK : <span class="danger">*</span> </label>

																		<div class="input-group">
																			<input type="text" name="nik" id="nik" class="form-control" placeholder="Identitas / NIK">
																			<span class="input-group-btn">
																				<button type="button" class="btn btn-success btn-circle" title="Tambah" id="addcustomer"><i class="fa fa-plus"></i></button>
																				<!-- <button type="button" class="btn btn-success btn-circle" title="Cari2" id="cari2"><i class="fa fa-search"></i></button> -->
																			</span>
																		</div>
																	</div>
																</div>


																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label for="namalengkap"> Nama Lengkap : <span class="danger">*</span> </label>
																			<input type="text" class="form-control" id="namalengkap" name="namalengkap"> </div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-6">
																			<div class="form-group">
																				<label for="alamat"> Alamat : <span class="danger">*</span> </label>
																				<input type="text" class="form-control" id="alamat" name="alamat"> </div>
																			</div>
																			<div class="col-md-6">
																				<div class="form-group">
																					<label for="telpon"> No Telpon :</label>
																					<input type="tel" class="form-control" id="telpon" name="telpon"> </div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<div class="form-group">
																						<label for="jk"> Jenis Kelamin : <span class="danger">*</span> </label>
																						<select class="custom-select form-control" id="jk" name="jk">
																							<option value="">Pilih</option>
																							<option value="Laki-laki">Laki-laki</option>
																							<option value="Perempuan">Perempuan</option>
																						</select>
																					</div>
																				</div>
																				
																			</div>
																			<div class="col-md-12 card-body text-center">
																				<div class="form-group">
																					<button type="button" class="btn btn-success" id="ptambah"><span class="mdi mdi-plus"> Tambah</span></button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<div class="card card-outline-info">

																<div class="card-header" role="tab" id="minimizedcolz2">
																	<h5 class="card-title m-b-0 text-white text-center" data-toggle="collapse" data-parent="#minimizedcolz2" href="#minimizedcol5" aria-expanded="true" aria-controls="minimizedcol5">
																		Data Pesanan
																	</h5>
																</div>

																<div id="minimizedcol5" class="collapse show" role="tabpanel" aria-labelledby="minimizedcol5">
																	<div class="card-body">

																		<div class="table-responsive">
																			<table class="table">
																				<thead>
																					<tr>
																						<th>No Identitas</th>
																						<th>Nama</th>
																						<th>Kendaraan</th>
																						<th>Rute</th>
																						<th>Kursi</th>
																						<th>Harga</th>
																						<th>Opsi</th>
																					</tr>
																				</thead>
																				<tbody id="dpesan">

																				</tbody>
																			</table>
																		</div>																		

																	</div>
																</div>
															</div>

															<!-- batas accordion -->
														</div>
													</div>

												</section>

												<!-- Step 3 -->
												<!-- <h6>Step 3</h6> -->
												<div hidden>
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

												</div>
												<!-- Step 4 -->
												<!-- <h6>Step 4</h6> -->
<!-- <section>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="behName1">Behaviour :</label>
<input type="text" class="form-control" id="behName1">
</div>
<div class="form-group">
<label for="participants1">Confidance</label>
<input type="text" class="form-control" id="participants1">
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
<textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
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

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mdlkursi" aria-hidden="true" style="display: none;" id="mdkursi">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="mdlkursi">Data Kursi</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<div class="card-body">
					<div class="card-body">
						<div class="col-md-12">
							<button type="button" class="btn btn-success" id="pganti">Ganti</button>
							<div class="text-center">
								<label>Kursi untuk <span id="idpelanggan"></span></label>
								<br>
								<input type="text" name="korsiz" id="korsiz" class="form-control text-center col-md-5 required" placeholder="Kursi yang dipilih akan muncul disini" readonly>
							</div>
						</div>
					</div>
					<div class="row clearfix card-body" id="slimkursi">

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

<?php 
$this->load->view('parts/footer');

?>

<script type="text/javascript">
	$(function(){
		loadedfirst();
	});
	// var kendaraanz, depar_atz, jumlahz = '';
	var jenis = '';
	function detail(kendaraan, depart_at, jumlah){
		if(kendaraan.length == 0){
			kendaraan = '';
		}else{
			kendaraan = 'Kendaraan : ' + kendaraan + ', ';;
		}

		if(depart_at.length == 0){
			depart_at = '';
		}else{
			depart_at = 'Berangkat dari : ' + depart_at + ', ';
		}
		
		if(jumlah.length == 0){
			jumlah = '';
		}else{
			jumlah = 'Jumlah : ' + jumlah + ' Orang';;
		}
		

		$('#detailinfo').text(kendaraan + depart_at + jumlah);
	}
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

		var type = jenis;
		var from = $('#dari').val();
		var to = $('#ke').val();
		var tgl = $('#tanggal').val();
		var jml = $('#Cqty').val();
		if(from=='' || to=='' || tgl=='' || jml==''){
			swal('Error','Harap isi semua field','error');
		}else{
			getresult(type,from,to);
			$('#minimizedcol1').collapse('hide');
			$('#minimizedcol2').collapse('show');
			detail(0,0,jml);
		}
	});
	// $('#cari2').click(function(){
	// 	var nik = $('#nik').val();
	// 	getcustomer(nik);
	// });
	
	$('#minimizedcolz2').collapse('toggle');
	
	


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
		detail(kendaraan,berangkat,$('#Cqty').val());
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
			// $('div.card.korsi').removeClass('selected');
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
				
				// cekkursi3(kode);
				if($(select).hasClass('seat')){
					alert('telah dipesan');
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
					// $(".actions a[href$='#next']").trigger('click');
					// $('#minimizedcol3').collapse('hide');
					// $('#minimizedcol4').collapse('show');
					var idpelanggan = $('#idpelanggan').text();
					$('#'+idpelanggan).find('td:eq(5)').text(kode);
					$('#'+idpelanggan).closest('tr').find('td:eq(6), #korizs').val(kode);
					// cekkursi3(this);
					$(this).toggleClass('seat');
					// $(this).unbind('click');
					// $(this).bind('click',function(){
					// 	var kode = $(this).find('h4').text();
					// 	$.toast({
					// 		heading: 'Informasi',
					// 		text: 'Kursi '+kode+' sudah dipesan',
					// 		position: 'top-right',
					// 		loaderBg:'#ff6849',
					// 		icon: 'warning',
					// 		hideAfter: 3500, 
					// 		stack: 6
					// 	});
					// });

					// $('#mdkursi').modal('hide');
					

				}else{
					$('#kursi2').val('');
					$('#korsiz').val('');
					
				}
			}
		}
			// alert(y);
			// $(this).toggleClass('selected');
		}); 
	}

	// function panggil2(kode){
	// 	$('#card'+kode).click(function(){
	// 		kode = $(this).closest('div').find('h4').text();
	// 		// $(select).removeClass('selected');
	// 		var select = $(this);

	// 		if($('div.card.korsi').hasClass('selected') && !$(select).hasClass('selected')){

	// 			$.toast({
	// 				heading: 'Error',
	// 				text: 'Silahkan unselect terlebih dahulu!',
	// 				position: 'top-right',
	// 				loaderBg:'#ff6849',
	// 				icon: 'error',
	// 				hideAfter: 3500

	// 			});

	// 		}else{
	// 			$(select).toggleClass('selected');
	// 			// $(select).removeClass('selected');
	// 			// $(select).removeClass('seat');
	// 			if($(select).hasClass('selected')){

	// 				$('#kursi2').val(kode);
	// 				$('#korsiz').val(kode);
	// 				$.toast({
	// 					heading: 'Informasi',
	// 					text: 'Kursi yang dipilih : '+ kode,
	// 					position: 'top-right',
	// 					loaderBg:'#ff6849',
	// 					icon: 'success',
	// 					hideAfter: 3500, 
	// 					stack: 6
	// 				});

	// 				var idpelanggan = $('#idpelanggan').text();
	// 				$('#'+idpelanggan).find('td:eq(5)').text(kode);
	// 				$('#'+idpelanggan).closest('tr').find('td:eq(6), input').val(kode);
	// 				// $('#mdkursi').modal('hide');

	// 			}else{

	// 				$('#kursi2').val('');
	// 				$('#korsiz').val('');
	// 			}
	// 		}

	// 	}); 
	// }

	function checkkursi(tgl,rute){
		var tglz = new Date(tgl);
		var day = tglz.getDate();
		var month = tglz.getMonth();
		var year = tglz.getFullYear();
		var tglx = year+month+day;
		var url = "<?php echo site_url('pesan/checkkursi/'); ?>"+tglx+'/'+rute+'/'+jenis;
		$.getJSON(url,function(x){
			$.each(x,function(i,j){
				// alert(j.seat_code);
				// console.log(j.seat_code);
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
		var url = "<?php echo site_url('pesan/multipesan'); ?>";
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
		format: 'dd-mm-yyyy'
	});
	$('#cetak').click(function(){
		window.open("<?php echo site_url('pesan/cetak/'); ?>"+reservationid);
	});

	$('#slimkursi').slimScroll({
		color: '#00f',
		size: '10px',
		height: '320px',
		alwaysVisible: false
	});

	$('#ptambah').click(function(){
		var id = $('#noid').val();
		var kode = $('#nik').val();
		var nama = $('#namalengkap').val();
		var kendaraan = $('#kendaraan2').val();
		var rute = $('#rute2').val();
		// var kursi = $('#kursi2').val();
		var kursi = 'No seat';
		var harga = $('#harga').val();
		var text = '<tr id="'+kode+'">'+
		'<td>'+kode+'</td>'+
		'<td hidden><input type="text" name="kode[]" value="'+id+'"></td>'+
		'<td>'+nama+'</td>'+
		'<td>'+kendaraan+'</td>'+
		'<td>'+rute+'</td>'+
		'<td class="pkorsi">'+kursi+'</td>'+
		'<td hidden><input type="text" name="kursi[]" id="korizs" value="'+kursi+'"></td>'+
		'<td>'+harga+'</td>'+
		'<td>'+
		'<button class="btn btn-danger btn-circle hapus" type="button"><span class="mdi mdi-delete" title="Hapus"></span></button>'+
		'</td>'
		+'</tr>';
		var data = $('#dpesan').find('tr').length;
		var Cqty = $('#Cqty').val();
		var pesan = '';
		if(data < Cqty && $('#'+kode).length==0){
			$('#dpesan').append(text);
		}
		else if(data == Cqty){
			swal('Error','Data melebihi jumlah pemesanan','warning');
		}
		else if(!$('#'+kode).length==0){
			swal('Error','Data sudah ada','warning');
		}
		
		
	});

	function cekkursi2(kode){
		
		if($('#card'+kode).hasClass('seat')){
			$('#card'+kode).addClass('seat');
			$('#card'+kode).removeClass('selected');
		}else{
			$('#card'+kode).addClass('selected');
			$('#card'+$('#korsiz').val()).removeClass('seat');

		// if($('#card'+kode).find('h4').text()==kode){
		// 	$('#card'+kode).addClass('seat');
		// 	$('#card'+kode).removeClass('selected');
		// }else{
		// 	$('#card'+kode).addClass('selected');
		// 	$('#card'+$('#korsiz').val()).removeClass('seat');
			// $('#card'+kode).unbind('click');
			// $('#card'+kode).bind('click',function(){
			// 	var kode = $(this).find('h4').text();
			// 	$.toast({
			// 		heading: 'Informasi',
			// 		text: 'Kursi '+kode+' sudah dipesan',
			// 		position: 'top-right',
			// 		loaderBg:'#ff6849',
			// 		icon: 'warning',
			// 		hideAfter: 3500, 
			// 		stack: 6
			// 	});
			// });
		}
	}
	
	function cekkursi3(kursi){
		for (var i = 1; i <= $('#dpesan').find('tr').length; i++) {
			// if($('#card'+kursi).hasClass('seat')){
			// 	$('#card'+kursi).toggleClass('selected');
			// 	$('#card'+kursi).toggleClass('seat');		
			// }
			if($('#dpesan').find('td:eq(5)').text() == kursi){
				alert('Kursi sudah dipesan');
			}
		}
	}

	$('#dpesan').on('click','.pkorsi',function(e){
		e.preventDefault();
		var id = $(this).closest('tr').find('td:eq(0)').text();
		var kursi = $(this).closest('tr').find('td:eq(5)').text();
		globalkursi = kursi;
		$('#korsiz').val(kursi);
		$('#idpelanggan').text(id);

		$('div.card.korsi').removeClass('selected');
		$('#card'+kursi).toggleClass('selected');
		$('#card'+kursi).toggleClass('seat');
		

		// panggil2(kursi);
		// alert(kursi);
		// cekkursi2(kursi);
		
		// cekkursi3(kursi);
		// if($('div.card.korsi').hasClass('selected')){
		// 	$('div.card.korsi').removeClass('selected');
		// }
		$('#mdkursi').modal('show');
		

	});
	$('#mdkursi').on('hide.bs.modal',function(e){
		var kursi = $('#korsiz').val();
		// $('#card'+kursi).toggleClass('seat');
	});
	var globalkursi = '';
	$('#pganti').click(function(){
		var kursi = globalkursi;
		// $('#card'+kursi).removeClass('seat');
		// $('#card'+kursi).toggleClass('selected');
		// if(!$('#card'+kursi).hasClass('selected') && $('#card'+kursi).hasClass('seat')){
		// 	$('#card'+kursi).toggleClass('selected');
		// 	$('#card'+kursi).toggleClass('seat');
		// }
		// else{
		// 	$('#card'+kursi).toggleClass('selected');
		// 	$('#card'+kursi).toggleClass('seat');
		// }
		$('#card'+kursi).toggleClass('selected');
		$('#card'+kursi).removeClass('seat');

	});
	$('#dpesan').on('click','.hapus',function(e){
		e.preventDefault();
		$(this).closest('td').parent('tr').remove();
		x--;

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

	

	$('.jenis').on('change',function(){
		// alert($(this).val());
		// var jenis = $('.jenis').parent('input').find('value').val();
		// var jenis = $("input[name='jenis']").val();
		if($(this).val()=='Kereta'){
			// alert('Kereta');
			jenis = 'kereta';
		}
		else{
			// alert('Pesawat');
			jenis = 'pesawat';
		}
		// $('#minimize1').trigger('click');
		$('#minimizedcolx1').collapse('hide');
		// $('#minimizedcol1').collapse('hide');
		$('#minimizedcol1').collapse('show');
		// getdataT();
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