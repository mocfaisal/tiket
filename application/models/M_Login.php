<?php 

/**
* 
*/
class M_Login extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}

	function cek(){
		$this->db->select('*');
		$this->db->where('username',$this->input->post('Username'));
		$this->db->where('password',$this->input->post('Password'));
		$query=$this->db->get('user');
		$jml=$query->num_rows();
		
		if($jml==1){
			$hasil=$query->row_array();
			$data = array(
				'nama'=>$hasil['fullname'],
				'userid'=>$hasil['userid'],
				'level'=>$hasil['level'],
				'login'=>true
			);
			$this->session->set_userdata($data);
			
			// echo $jml;
			// print_r($data);
			echo "Berhasil";
			redirect('?');
			return true;
		}
		else{
			echo "Gagal";
			redirect('login');
			return false;
		}

	}

	function logout(){
		session_destroy();
	}

	// End of file
}
?>