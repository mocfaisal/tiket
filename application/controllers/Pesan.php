<?php 

/**
* 
*/
class Pesan extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_Pesan','p');
		$this->load->model('M_Customer','c');
		if(!$this->session->userdata('login')){
			if($this->session->userdata('TypeUser')!='Admin' && $this->session->userdata('TypeUser')!='Operator'){
			// redirect('forbidden');
				redirect('login');
			}
			redirect('login');
		}
	}

	function index(){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('view_pesan2',$data);
	}

	function pesawat(){
		$data['type']='pesawat';
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('view_pesan2',$data);
	}
	function kereta(){
		$data['type']='kereta';
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('view_pesan2',$data);
	}

	function bpesan(){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('view_pesan3',$data);
	}

	

	function getdataC(){
		$this->c->getdata();
	}
	function getdataT($tipe){
		$this->p->getdataT($tipe);
	}

	function pesan(){
		$this->p->save();
	}

	function multipesan(){
		$this->p->mutisave();
	}

	function getresult($type,$from,$to){
		$this->p->getresult($type,$from,$to);
	}

	function getresultPesawat($from,$to){
		$this->p->getresultPesawat($from,$to);
	}

	function getcustomer($nik){
		$this->p->getcustomer($nik);
	}

	function checkkursi($tgl,$rute,$type){
		$this->p->checkkursi($tgl,$rute,$type);
	}

	function getcustomerfirst(){
		$this->p->getcustomerfirst();
	}
	function getkota(){
		$this->p->getkota();
	}

	function savecustomer(){
		$this->c->save();
	}

	function updatecustomer(){
		$this->c->update();
	}

	function cekcustomer($nik){
		$this->c->cekcustomer($nik);
	}

	function cetak($id,$type){
		$this->p->cetak($id,$type);
		// $data['nama']=$this->session->userdata('nama');
		// $data['level']=$this->session->userdata('level');
		// $data['query']=$this->p->cetak($id);
		$this->load->view('view_cetak');
		// $this->load->view('view_cetak');
	}
	// function cetakx($id){
	// 	$this->p->cetak($id);
	// }

// End of file
}

?>