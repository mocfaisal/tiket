<?php 

/**
* 
*/
class Report extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_Report','r');
		$this->load->model('M_Pesan','p');
		if(!$this->session->userdata('login')){
			if($this->session->userdata('TypeUser')!='Admin' && $this->session->userdata('TypeUser')!='Operator'){
			// redirect('forbidden');
				redirect('login');
			}
			redirect('login');
		}
	}

	function index(){
		// echo "Hola :D";
	}

	function penjualan($type){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$data['type'] = $type;
		$this->load->view('laporan/penjualan',$data);
	}
	function getpenjualanfirst($type){
		$this->r->getpenjualanfirst($type);
	}
	function getpenjualan($from,$to){
		$this->r->getpenjualan($from,$to);
	}

	function pelanggan($type){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$data['type'] = $type;
		$this->load->view('laporan/pelanggan',$data);
	}
	function getpelangganfirst($type){
		$this->r->getpelangganfirst($type);
	}
	function getpelanggan($from,$to,$type){
		$this->r->getpelanggan($from,$to,$type);
	}

	function rute($type){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$data['type'] = $type;
		$this->load->view('laporan/rute',$data);
	}
	function getrutefirst($type){
		$this->r->getrutefirst($type);
	}
	function getrute($from,$to,$type){
		$this->r->getrute($from,$to,$type);
	}

	function jadwal($type){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$data['type'] = $type;
		$this->load->view('laporan/jadwal',$data);
	}
	function getjadwalfirst($type){
		$this->r->getjadwalfirst($type);
	}
	function getjadwal($from,$to,$type){
		$this->r->getjadwal($from,$to,$type);
	}

	function faktur(){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('laporan/faktur',$data);
	}
	function getfaktur($id,$type){
		$this->p->cetak2($id,$type);
	}
	function cetakfaktur($id,$type){
		$this->p->cetak($id,$type);

		$this->load->view('view_cetak');
	}


// end of file
}

?>