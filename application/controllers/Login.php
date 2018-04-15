<?php 

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_Login','l');
		if($this->session->userdata('login')){
			redirect('?');
		}
	}

	function index(){
		$this->load->view('view_login');
	}
	function cek(){
		$this->l->cek();
	}

// End of file
}

?>