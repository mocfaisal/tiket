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
				<div class="form-group">
					<div class="input-daterange input-group" id="date-range">
						<input type="text" class="form-control" name="startdate" id="startdate">
						<span class="input-group-addon bg-info b-0 text-white">to</span>
						<input type="text" class="form-control" name="enddate" id="enddate">
						<button type="button" class="input-group-addon bg-info b-0 text-white" id="cari">Cari</button>
						
					</div>
				</div>
				<div class="table-responsive" id="tpelanggan">
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode</th>
								<th>Waktu</th>
								<th>Tanggal dipesan</th>
								<th>ID Pelanggan</th>
								<th>Kode Kursi</th>
								<th>ID Rute</th>
								<th>Berangkat dari</th>
								<th>Tanggal Berangkat</th>
								<th>Harga</th>
								<th>User</th>
							</tr>
						</thead>
						<tbody>
							
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

?>

<script type="text/javascript">
	$('#cari').click(function(){
		var from = $('#startdate').val();
		var to = $('#enddate').val();
		getpelanggan(from,to);	
	});
	getpelangganfirst();
	function getpelangganfirst(type){
		var url = "<?php echo site_url('report/getpelangganfirst/'); ?>"+'<?php echo $type;?>';
		$.get(url,function(x){
			$('#tpelanggan').html(x);
		});

	}
	function getpelanggan(from,to,type){
		var url = "<?php echo site_url('report/getpelanggan/'); ?>"+from+'/'+to+'/'+'<?php echo $type;?>';
		$.get(url,function(x){
			$('#tpelanggan').html(x);
		});
		datatablepelanggan();
	}
	$('#date-range').datepicker({
		toggleActive : true,
		format: 'yyyy-mm-dd'
	});
	datatablepelanggan();
	function datatablepelanggan(){
		$('.table').DataTable({
			dom: 'Bfrtip',
		// dom: 'T<"clear">lfrtip',
		tableTools: {
			"sSwfPath": "<?php echo base_url('assets/plugins/datatables/Buttons/swf');?>/flashExport.swf"
		},
		buttons: [
		'copy', 'csv', 'excel', 'pdf', 'print'
		]
		// ajax : "<?php echo site_url('report/getpelangganfirst'); ?>"
	});
	}
</script>