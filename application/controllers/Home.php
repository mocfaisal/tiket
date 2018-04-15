<?php 

/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_Login','l');
		$this->load->model('M_Home','h');
		if(!$this->session->userdata('login')){
			if($this->session->userdata('TypeUser')!='Admin' && $this->session->userdata('TypeUser')!='Operator'){
			// redirect('forbidden');
				redirect('login');
			}
			redirect('login');
		}
	}

	function index(){
		// echo "Hola ticketing project! :D";
		$data['nama']=$this->session->userdata('nama');
		$data['level']=$this->session->userdata('level');
		$this->load->view('view_home',$data);
	}
	function logout(){
		$this->l->logout();
		redirect('login');
	}
	function data($id){
		$this->h->getdatapenjualan($id);
	}
	function data2($id){
		$this->h->getdatatiket2($id);
	}
	function data3(){
		$this->h->getdatareserved2();
	}

	function auto(){
		$this->load->view('view_auto');
	}

	// end of file
}

?>