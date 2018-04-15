<?php 
$this->load->view('parts/header');
// $this->load->view('parts/navigation');

?>
<body onload="window.print()" onbeforeunload="clear()">
	<!-- <body onload=""> -->
		<div id="dcetak">

			<div class="">
				<div class="row clearfix"></div>

				<div class="col-md-12">
					<div class="card card-body printableArea">
						<h3><b>No Faktur</b> <span class="pull-right"><?php echo $_SESSION['reservationid'];?></span></h3>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<div class="pull-left">
									<address>
										<h3> &nbsp;<b class="text-danger">Online Tiket</b></h3>
										<p class="text-muted m-l-5"><?php echo $_SESSION['userz'];?>
											<!-- <br/> Nr' Viswakarma Temple,
											<br/> Talaja Road,
											<br/> Bhavnagar - 364002</p> -->
										</address>
									</div>
									<div class="pull-right text-right">
										<address>
											<h3>Kepada,</h3>
											<h4 class="font-bold"><?php echo $_SESSION['namalengkap'];?>,</h4>
											<p class="text-muted m-l-30"><?php echo $_SESSION['nik'];?>
                                            <!--     <br/> Nr' Viswakarma Temple,
                                                <br/> Talaja Road,
                                                <br/> Bhavnagar - 364002</p> -->
                                                <p class="m-t-30"><b>Tanggal Pesan :</b> <i class="fa fa-calendar"></i> <?php echo $_SESSION['reservation_date'];?></p>
                                                <p><b>Tanggal Berangkat :</b> <i class="fa fa-calendar"></i> <?php echo $_SESSION['depart_date'];?></p>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    	<div class="table-responsive m-t-40" style="clear: both;">
                                    		<table class="table table-hover">
                                    			<thead>
                                    				<tr>

                                    					<th>Kendaraan</th>
                                    					<th>Rute</th>
                                    					<th>Kursi</th>
                                    				</tr>
                                    			</thead>
                                    			<tbody>
                                    				<tr>

                                    					<td><?php echo $_SESSION['kendaraan'];?></td>
                                    					<td><?php echo $_SESSION['rute'];?></td>
                                    					<td> <?php echo $_SESSION['kursi'];?></td>
                                    				</tr>
                                    			</tbody>
                                    		</table>
                                    	</div>
                                    </div>
                                    <div class="col-md-12">
                                    	<div class="pull-right m-t-30 text-right">

                                    		<hr>
                                    		<h3><b>Harga :</b> Rp. <?php echo number_format($_SESSION['harga']);?>,-</h3>
                                    	</div>
                                    	<div class="clearfix"></div>
                                    	<hr>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </body>
            <?php 
	// $this->load->view('parts/footer');

            ?>
            <script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
            <script type="text/javascript">
            	function clear(){
            		alert('Clear');
            	}

		// window.onbeforeunload = clear();
		// window.onunload = clear();
		$(window).on('beforeunload', function(){ alert ('Bye now')});

	</script>