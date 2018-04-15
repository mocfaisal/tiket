<?php 

/**
* 
*/
class Data extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_Rute','r');
		$this->load->model('M_Transportation','t');
		$this->load->model('M_Transportation_Type','x');
		$this->load->model('M_user','u');
		$this->load->model('M_Stasiun','s');
		$this->load->model('M_Pesan','p');
		$this->load->model('M_Bandara','b');
		if(!$this->session->userdata('login')){
			if($this->session->userdata('TypeUser')!='Admin' && $this->session->userdata('TypeUser')!='Operator'){
			// redirect('forbidden');
				redirect('login');
			}
			redirect('login');
		}
	}

	// view data

	function user(){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('master/view_user',$data);
	}

	function rute($tipe){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$data['tipe'] = $tipe;
		$this->load->view('master/view_rute',$data);
	}

	function transportasi(){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('master/view_transportasi',$data);
	}

	function tipe(){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('master/view_tipe',$data);
	}
	function customer(){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('master/view_customer',$data);	
	}
	function stasiun(){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('master/view_stasiun',$data);	
	}
	function bandara(){
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('master/view_bandara',$data);	
	}



// getdata

	function getuser(){
		$this->u->getuser();
	}
	function getrute($tipe){
		$this->r->getrute($tipe);
	}
	function gettransportasi(){
		$this->t->gettransportasi();
	}
	function gettipe(){
		$this->x->gettipe();
	}

	function getkendaraan($type){
		$this->r->getkendaraan($type);
	}
	function getstasiun(){
		$this->s->getdata();
	}
	function getbandara(){
		$this->b->getdata();
	}
	function getkota($tipe){
		if($tipe == 'pesawat'){
			$this->b->getkota();
		}
		else{
			$this->s->getkota();
		}
	}


// tambah data
	function tambahuser(){
		$this->u->insert();
	}
	function tambahrute(){
		$this->r->insert();
	}
	function tambahtransportasi(){
		$this->t->insert();
	}
	function tambahtipe(){
		$this->x->insert();
	}
	function tambahstasiun(){
		$this->s->tambah();
	}
	function tambahbandara(){
		$this->b->tambah();
	}

// edit data
	function edituser($kode){
		$this->u->update($kode);
	}
	function editrute($kode){
		$this->r->update($kode);
	}
	function edittransportasi($kode){
		$this->t->update($kode);
	}
	function edittipe($kode){
		$this->x->update($kode);
	}
	function editstasiun($kode){
		$this->s->edit($kode);
	}
	function editbandara($kode){
		$this->b->edit($kode);
	}

// hapus data
	function hapususer($kode){
		$this->u->delete($kode);
	}
	function hapusrute($kode){
		$this->r->delete($kode);
	}
	function hapustransportasi($kode){
		$this->t->delete($kode);
	}
	function hapustipe($kode){
		$this->x->delete($kode);
	}
	function hapusstasiun($kode){
		$this->s->hapus($kode);
	}
	function hapusbandara($kode){
		$this->b->hapus($kode);
	}
	// End of file
}

?>