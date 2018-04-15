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
				<div class="table-responsive" id="tjadwal">
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Depart From</th>
								<th>Nama Kereta</th>
								<th>Depart to</th>
								<th>Time</th>
								<th>Harga</th>
								<th>Seat</th>
								<th>Reserved</th>
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
		getjadwal(from,to);	
	});
	getjadwalfirst();
	function getjadwalfirst(type){
		var url = "<?php echo site_url('report/getjadwalfirst/'); ?>"+'<?php echo $type;?>';
		$.get(url,function(x){
			$('#tjadwal').html(x);
		});

	}
	function getjadwal(from,to,type){
		var url = "<?php echo site_url('report/getjadwal/'); ?>"+from+'/'+to+'/'+'<?php echo $type;?>';
		$.get(url,function(x){
			$('#tjadwal').html(x);
		});
		datatablejadwal();
	}
	$('#date-range').datepicker({
		toggleActive : true,
		format: 'yyyy-mm-dd'
	});
	datatablejadwal();
	function datatablejadwal(){
		$('.table').DataTable({
			dom: 'Bfrtip',
		// dom: 'T<"clear">lfrtip',
		tableTools: {
			"sSwfPath": "<?php echo base_url('assets/plugins/datatables/Buttons/swf');?>/flashExport.swf"
		},
		buttons: [
		'copy', 'csv', 'excel', 'pdf', 'print'
		]
		// ajax : "<?php echo site_url('report/getjadwalfirst'); ?>"
	});
	}
</script>