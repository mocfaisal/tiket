
<body class="fix-sidebar fix-header logo-center card-no-border">
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
		<svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
		</div>
		<!-- ============================================================== -->
		<!-- Main wrapper - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<div id="main-wrapper">
			<!-- ============================================================== -->
			<!-- Topbar header - style you can find in pages.scss -->
			<!-- ============================================================== -->
			<header class="topbar">
				<nav class="navbar top-navbar navbar-expand-md navbar-light">
					<!-- ============================================================== -->
					<!-- Logo -->
					<!-- ============================================================== -->
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo base_url('?'); ?>">
							<!-- Logo icon -->
							<b>
								<!-- <i class="icon-location-pin"></i> -->
								<!-- Dark Logo icon -->
								<img src="<?php echo base_url('assets'); ?>/images/logo-icon.png" alt="homepage" class="dark-logo" />
								<!-- Light Logo icon -->
								<img src="<?php echo base_url('assets'); ?>/images/logo-light-icon.png" alt="homepage" class="light-logo" />
							</b>
							<!--End Logo icon -->
							<!-- Logo text -->
							<span>
								<!-- dark Logo text -->
								<img src="<?php echo base_url('assets'); ?>/images/logo-text.png" alt="homepage" class="dark-logo" height="35px" />
								<!-- Light Logo text -->    
								<img src="<?php echo base_url('assets'); ?>/images/logo-light-text.png" class="light-logo" alt="homepage" height="35px" /></span> </a>
							</div>
							<!-- ============================================================== -->
							<!-- End Logo -->
							<!-- ============================================================== -->
							<div class="navbar-collapse">
								<!-- ============================================================== -->
								<!-- toggle and nav items -->
								<!-- ============================================================== -->
								<ul class="navbar-nav mr-auto mt-md-0">
									<!-- This is  -->
									<li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
									<li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
									<!-- ============================================================== -->

								</ul>
								<!-- ============================================================== -->
								<!-- User profile and search -->
								<!-- ============================================================== -->
								<ul class="navbar-nav my-lg-0">
									<!-- ============================================================== -->
									<!-- Comment -->
									<!-- ============================================================== -->

									<!-- ============================================================== -->
									<!-- End Messages -->
									<!-- ============================================================== -->

									<!-- ============================================================== -->
									<!-- Profile -->
									<!-- ============================================================== -->
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('assets'); ?>/images/users/1.jpg" alt="user" class="profile-pic" /></a>
										<div class="dropdown-menu dropdown-menu-right scale-up">
											<ul class="dropdown-user">
												<li>
													<div class="dw-user-box">
														<div class="u-img"><img src="<?php echo base_url('assets'); ?>/images/users/1.jpg" alt="user"></div>
														<div class="u-text">
															<h4><?php echo $nama; ?></h4>
															<p class="text-muted"><?php echo $level; ?></p>
															<!-- <a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a> -->
														</div>
													</div>
												</li>
												<li role="separator" class="divider"></li>
											<!-- 	<li><a href="#"><i class="ti-user"></i> My Profile</a></li>
												<li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
												<li><a href="#"><i class="ti-email"></i> Inbox</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="#"><i class="ti-settings"></i> Account Setting</a></li> -->
												<li role="separator" class="divider"></li>
												<li><a href="<?php echo site_url('home/Logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
											</ul>
										</div>
									</li>
									<!-- ============================================================== -->
									<!-- Language -->
									<!-- ============================================================== -->

								</ul>
							</div>
						</nav>
					</header>
					<!-- ============================================================== -->
					<!-- End Topbar header -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- Left Sidebar - style you can find in sidebar.scss  -->
					<!-- ============================================================== -->
					<aside class="left-sidebar">
						<!-- Sidebar scroll-->
						<div class="scroll-sidebar">
							<!-- User profile -->
							<div class="user-profile" style="background: url(<?php echo base_url('assets'); ?>/images/background/user-info.jpg) no-repeat;">
								<!-- User profile image -->
								<div class="profile-img"> <img src="<?php echo base_url('assets'); ?>/images/users/1.jpg" alt="user" /> </div>
								<!-- User profile text-->
								<div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo $nama; ?> <span class="caret"></span></a>
									<div class="dropdown-menu animated flipInY">
									<!-- 	<a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
										<a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
										<a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
										<div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a> -->
										<!-- <div class="dropdown-divider"></div>  -->
										<a href="<?php echo site_url('home/logout'); ?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
									</div>
								</div>
							</div>
							<!-- End User profile text-->
							<!-- Sidebar navigation-->
							<nav class="sidebar-nav">
								<ul id="sidebarnav">
									<li class="nav-small-cap">PERSONAL</li>
									<li>
										<a href="<?php echo base_url('?'); ?>" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Home</span></a>
									</li>    
									<li class="nav-devider"></li>
									<li class="nav-small-cap">Master Data</li>
									<li>
										<a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-buffer"></i><span class="hide-menu">Data</span></a>
										<ul aria-expanded="false" class="collapse">
											<li>
												<a class="has-arrow " href="#" aria-expanded="false"><span class="hide-menu">Rute</span></a>
												<ul aria-expanded="false" class="collapse">
													<li><a href="<?php echo site_url('data/rute/kereta'); ?>">Rute Kereta</a></li>
													<li><a href="<?php echo site_url('data/rute/pesawat'); ?>">Rute Pesawat</a></li>
												</ul>
											</li>

											<li><a href="<?php echo site_url('data/transportasi'); ?>">Transportasi</a></li>
											<li><a href="<?php echo site_url('data/tipe'); ?>">Tipe Transportasi</a></li>
											<li><a href="<?php echo site_url('data/stasiun'); ?>">Stasiun</a></li>
											<li><a href="<?php echo site_url('data/bandara'); ?>">Bandara</a></li>
											<li><a href="<?php echo site_url('data/user'); ?>">User</a></li>
										</ul>
									</li>
									<li class="nav-devider"></li>
									<li class="nav-small-cap">Pemesanan Tiket</li>
									<li>

										<a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Pesan Tiket</span></a>
										<ul aria-expanded="false" class="collapse">
											<li><a href="<?php echo site_url('pesan/pesawat'); ?>">Pesawat</a></li>
											<li><a href="<?php echo site_url('pesan/kereta'); ?>">Kereta</a></li>
											<li><a href="<?php echo site_url('pesan/bpesan'); ?>">Multi</a></li>
										</ul>
									</li>

								</li>
								<li class="nav-devider"></li>
								<li class="nav-small-cap">Laporan</li>
								<li>
									<a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span class="hide-menu">Laporan</span></a>
									<ul aria-expanded="false" class="collapse">
										<li>
											<a class="has-arrow " href="#" aria-expanded="false"><span class="hide-menu">Penjualan Tiket</span></a>
											<ul aria-expanded="false" class="collapse">
												<li><a href="<?php echo site_url('report/penjualan/kereta'); ?>">Kereta</a></li>
												<li><a href="<?php echo site_url('report/penjualan/pesawat'); ?>">Pesawat</a></li>
											</ul>
										</li>

										<li>
											<a class="has-arrow " href="#" aria-expanded="false"><span class="hide-menu">Pelanggan</span></a>
											<ul aria-expanded="false" class="collapse">
												<li><a href="<?php echo site_url('report/pelanggan/kereta'); ?>">Kereta</a></li>
												<li><a href="<?php echo site_url('report/pelanggan/pesawat'); ?>">Pesawat</a></li>
											</ul>
										</li>

										<li>
											<a class="has-arrow " href="#" aria-expanded="false"><span class="hide-menu">Rute</span></a>
											<ul aria-expanded="false" class="collapse">
												<li><a href="<?php echo site_url('report/rute/kereta'); ?>">Kereta</a></li>
												<li><a href="<?php echo site_url('report/rute/pesawat'); ?>">Pesawat</a></li>
											</ul>
										</li>


										<li>
											<a class="has-arrow " href="#" aria-expanded="false"><span class="hide-menu">Jadwal</span></a>
											<ul aria-expanded="false" class="collapse">
												<li><a href="<?php echo site_url('report/jadwal/kereta'); ?>">Kereta</a></li>
												<li><a href="<?php echo site_url('report/jadwal/pesawat'); ?>">Pesawat</a></li>
											</ul>
										</li>

										

										<li><a href="<?php echo site_url('report/faktur'); ?>">Faktur</a></li>
									</ul>
								</li>
							</ul>
						</nav>
						<!-- End Sidebar navigation -->
					</div>
					<!-- End Sidebar scroll-->
					<!-- Bottom points-->
					<div class="sidebar-footer">
						<!-- item-->
						<a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
						<!-- item-->
						<a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
						<!-- item-->
						<a href="<?php echo site_url('home/Logout'); ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
					</div>
					<!-- End Bottom points-->
				</aside>
				<!-- ============================================================== -->
				<!-- End Left Sidebar - style you can find in sidebar.scss  -->
				<!-- ============================================================== -->
				<!-- ============================================================== -->
				<!-- Page wrapper  -->
				<!-- ============================================================== -->
				<div class="page-wrapper">
					<!-- ============================================================== -->
					<!-- Container fluid  -->
					<!-- ============================================================== -->
					<div class="container-fluid">
						<!-- ============================================================== -->
						<!-- Bread crumb and right sidebar toggle -->
						<!-- ============================================================== -->
						<div class="row page-titles">
							<div class="col-md-5 col-8 align-self-center">
								<?php 
								$posisi1='';
								$posisi2='';

																		// data master
								if($this->uri->segment(1)=='data' && $this->uri->segment(2)=='rute'){
									$posisi1='data';
									$posisi2='rute';
								}
								elseif($this->uri->segment(1)=='data' && $this->uri->segment(2)=='transportasi'){
									$posisi1='data';
									$posisi2='transportasi';
								}
								elseif($this->uri->segment(1)=='data' && $this->uri->segment(2)=='tipe'){
									$posisi1='data';
									$posisi2='tipe transportasi';
								}
								elseif($this->uri->segment(1)=='data' && $this->uri->segment(2)=='stasiun'){
									$posisi1='data';
									$posisi2='stasiun';
								}
								elseif($this->uri->segment(1)=='data' && $this->uri->segment(2)=='user'){
									$posisi1='data';
									$posisi2='user';
								}

								elseif($this->uri->segment(1)=='pesan' && $this->uri->segment(2)=='pesawat'){
									$posisi1='transaksi';
									$posisi2='pesan tiket pesawat';
								}	
								elseif($this->uri->segment(1)=='pesan' && $this->uri->segment(2)=='kereta'){
									$posisi1='transaksi';
									$posisi2='pesan tiket kereta';
								}
								elseif($this->uri->segment(1)=='pesan' && $this->uri->segment(2)=='bpesan'){
									$posisi1='transaksi';
									$posisi2='pesan tiket banyak';
								}

																// laporan
								elseif($this->uri->segment(1)=='report' && $this->uri->segment(2)=='penjualan'){
									$posisi1='laporan';
									$posisi2='penjualan';
								}
								elseif($this->uri->segment(1)=='report' && $this->uri->segment(2)=='pelanggan'){
									$posisi1='laporan';
									$posisi2='pelanggan';
								}
								elseif($this->uri->segment(1)=='report' && $this->uri->segment(2)=='rute'){
									$posisi1='laporan';
									$posisi2='rute';
								}
								elseif($this->uri->segment(1)=='report' && $this->uri->segment(2)=='jadwal'){
									$posisi1='laporan';
									$posisi2='jadwal';
								}
								elseif($this->uri->segment(1)=='report' && $this->uri->segment(2)=='faktur'){
									$posisi1='laporan';
									$posisi2='faktur';
								}

								else{
									$posisi1='home';
									$posisi2='dashboard';
								}
								if($this->uri->segment(1)=='' && $this->uri->segment(2)==''){
									echo '<h3 class="text-themecolor m-b-0 m-t-0">'.ucwords($posisi2).'</h3>';
									echo '<ol class="breadcrumb">';
									echo "<li class='breadcrumb-item'>".ucwords($posisi1)."</li>";
									echo "<li class='breadcrumb-item active'>";
// <a href='".base_url('?')."'>".
									echo ucwords($posisi2);
// </a>
									echo "</li>";
								}
								else{
									echo '<h3 class="text-themecolor m-b-0 m-t-0">'.ucwords($posisi2).'</h3>';
									echo '<ol class="breadcrumb">';
									echo "<li class='breadcrumb-item'>".ucwords($posisi1)."</li>";
									echo "<li class='breadcrumb-item active'>";
// <a href='".site_url($posisi1."/".$posisi2)."'>".
									echo ucwords($posisi2);
// </a>
									echo "</li>";
								}


								?>
																			<!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
																				<li class="breadcrumb-item active">Dashboard</li> -->
																			</ol>
																		</div>
																		<div class="col-md-7 col-4 align-self-center"><!-- 
																			<div class="d-flex m-t-10 justify-content-end">
																				<div class="d-flex m-r-20 m-l-10 hidden-md-down">
																					<div class="chart-text m-r-10">
																						<h6 class="m-b-0"><small>THIS MONTH</small></h6>
																						<h4 class="m-t-0 text-info">$58,356</h4></div>
																						<div class="spark-chart">
																							<div id="monthchart"></div>
																						</div>
																					</div>
																					<div class="d-flex m-r-20 m-l-10 hidden-md-down">
																						<div class="chart-text m-r-10">
																							<h6 class="m-b-0"><small>LAST MONTH</small></h6>
																							<h4 class="m-t-0 text-primary">$48,356</h4></div>
																							<div class="spark-chart">
																								<div id="lastmonthchart"></div>
																							</div>
																						</div>
																					</div>
																				--></div>
																			</div>