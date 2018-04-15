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

	<!-- column -->
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body resizemargin" style="margin-right: 200px;">
				<h4 class="card-title">Laporan Penjualan Tahun <?php echo date('Y');?></h4>
				<div id="bar-chartz" style="width:100%; height:400px;"></div>
			</div>
		</div>
	</div>
	<!-- column -->
	<!-- column -->
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body resizemargin" style="margin-right: 200px;">
				<h4 class="card-title">Laporan Penjualan Tiket Tahun <?php echo date('Y');?></h4>
				<div id="mainz" style="width:100%; height:400px;"></div>
			</div>
		</div>
	</div>
	<!-- column -->
	<!-- column -->
	<!-- <div class="col-lg-6">
		<div class="card">
			<div class="card-body resizemargin" style="margin-right: 100px;">
				<h4 class="card-title">Monthly Salary Chart</h4>
				<div id="pie-chart" style="width:100%; height:400px;"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body resizemargin" style="margin-right: 200px;">
				<h4 class="card-title">Infographic Chart</h4>
				<div id="donuteinfographic" style="width:100%; height:400px;"></div>
			</div>
		</div>
	</div> -->
	<!-- column -->
	<!-- column -->
	<!-- <div class="col-lg-12">
		<div class="card">
			<div class="card-body resizemargin" style="margin-right: 200px;">
				<h4 class="card-title">Basic Bar Chart</h4>
				<div id="basic-bar" style="width:100%; height:400px;"></div>
			</div>
		</div>
	</div> -->
	<!-- column -->
	<!-- column -->
	<!-- <div class="col-lg-6">
		<div class="card">
			<div class="card-body resizemargin" style="margin-right: 100px;">
				<h4 class="card-title">Radar Chart</h4>
				<div id="radar-chart" style="width:100%; height:400px;"></div>
			</div>
		</div>
	</div> -->
	<!-- column -->
	<!-- column -->
	<!-- <div class="col-lg-6">
		<div class="card">
			<div class="card-body resizemargin" style="margin-right: 100px;">
				<h4 class="card-title">Doughnut Chart</h4>
				<div id="doughnut-chart" style="width:100%; height:400px;"></div>
			</div>
		</div>
	</div> -->
	<!-- column -->
	<!-- column -->
	<!-- <div class="col-lg-6">
		<div class="card">
			<div class="card-body resizemargin" style="margin-right: 200px;">
				<h4 class="card-title">Internet Speed</h4>
				<div id="gauge-chart" style="width:100%; height:400px;"></div>
			</div>
		</div>
	</div> -->
	<!-- column -->
	<!-- column -->
	<!-- <div class="col-lg-6">
		<div class="card">
			<div class="card-body resizemargin" style="margin-right: 100px;">
				<h4 class="card-title">Market Rates</h4>
				<div id="gauge2-chart" style="width:100%; height:400px;"></div>
			</div>
		</div>
	</div> -->
	<!-- column -->
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
<script src="<?php echo base_url('assets'); ?>/plugins/echarts/echarts-all.js"></script>
<!-- <script src="<?php echo base_url('assets'); ?>/plugins/echarts/echarts-init.js"></script> -->

<script type="text/javascript">

	//Bar chart
	var myChart = echarts.init(document.getElementById('bar-chartz'));
	
	// specify chart configuration item and data
	option = {
		tooltip : {
			trigger: 'axis'
		},
		legend: {
			data:['Pesawat','Kereta']
		},
		toolbox: {
			show : true,
			feature : {

				magicType : {show: true, type: ['line', 'bar']},
				restore : {show: true},
				saveAsImage : {show: true}
			}
		},
		color: ["#55ce63", "#009efb"],
		calculable : true,
		xAxis : [
		{
			type : 'category',
			data : ['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec']
		}
		],
		yAxis : [
		{
			type : 'value'
		}
		],
		series : [
		{
			name:'Pesawat',
			type:'bar',
			data:[<?php echo $this->h->getdatapenjualan('Pesawat'); ?>],
			markPoint : {
				data : [
				{type : 'max', name: 'Max'},
				{type : 'min', name: 'Min'}
				]
			},
			markLine : {
				data : [
				{type : 'average', name: 'Average'}
				]
			}
		},
		{
			name:'Kereta',
			type:'bar',
			data:[<?php echo $this->h->getdatapenjualan('Kereta'); ?>],
			markPoint : {
				data : [
				{type : 'max', name: 'Max'},
				{type : 'min', name: 'Min'}
				]
			},
			markLine : {
				data : [
				{type : 'average', name : 'Average'}
				]
			}
		}
		]
	};


// use configuration item and data specified to show chart
myChart.setOption(option, true), $(function() {
	function resize() {
		setTimeout(function() {
			myChart.resize()
		}, 100)
	}
	$(window).on("resize", resize), $(".sidebartoggler").on("click", resize)
});

// ============================================================== 
// Line chart
// ============================================================== 
var dom = document.getElementById("mainz");
var mytempChart = echarts.init(dom);
var app = {};
option = null;
option = {
	
	tooltip : {
		trigger: 'axis'
	},
	legend: {
		data:['Pesawat','Kereta']
	},
	toolbox: {
		show : true,
		feature : {
			magicType : {show: true, type: ['line', 'bar']},
			restore : {show: true},
			saveAsImage : {show: true}
		}
	},
	color: ["#55ce63", "#009efb"],
	calculable : true,
	xAxis : [
	{
		type : 'category',

		boundaryGap : false,
		data : ['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec']
	}
	],
	yAxis : [
	{
		type : 'value'		
	}
	],

	series : [
	{
		name:'Pesawat',
		type:'line',
		color:['#000'],
		data:[<?php echo $this->h->getdatatiket2('Pesawat'); ?>],
		markPoint : {
			data : [
			{type : 'max', name: 'Max'},
			{type : 'min', name: 'Min'}
			]
		},
		itemStyle: {
			normal: {
				lineStyle: {
					shadowColor : 'rgba(0,0,0,0.3)',
					shadowBlur: 10,
					shadowOffsetX: 8,
					shadowOffsetY: 8 
				}
			}
		},        
		markLine : {
			data : [
			{type : 'average', name: 'Average'}
			]
		}
	},
	{
		name:'Kereta',
		type:'line',
		data:[<?php echo $this->h->getdatatiket2('Kereta'); ?>],
		itemStyle: {
			normal: {
				lineStyle: {
					shadowColor : 'rgba(0,0,0,0.3)',
					shadowBlur: 10,
					shadowOffsetX: 8,
					shadowOffsetY: 8 
				}
			}
		}, 
		markLine : {
			data : [
			{type : 'average', name : 'Average'}
			]
		}
	}
	]
};

if (option && typeof option === "object") {
	mytempChart.setOption(option, true), $(function() {
		function resize() {
			setTimeout(function() {
				mytempChart.resize()
			}, 100)
		}
		$(window).on("resize", resize), $(".sidebartoggler").on("click", resize)
	});
}


$(window).on("resize",function(){
	$('.resizemargin').css('margin-right',0);
});
</script>