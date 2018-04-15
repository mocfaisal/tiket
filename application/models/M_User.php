<?php 

/**
* 
*/
class M_User extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}

	function autono(){
		$query=$this->db->query("SELECT IFNULL(MAX(userid),0)+1 as nourut FROM user");
		$nourut=$query->row('nourut');
		$hasil=$nourut;
		return $hasil;
	}

	function insert(){
		$data=array(
			'userid'=>$this->autono(),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'fullname'=>$this->input->post('nama'),
			'level'=>'Operator'//$this->input->post()
		);

		if($this->db->insert('user',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}

	function update($kode){
		$data=array(
			'username'=>$this->input->post('username'),
			// 'password'=>$this->input->post(),
			'fullname'=>$this->input->post('nama')
			// 'level'=>$this->input->post()
		);
		$this->db->where('userid',$kode);
		if($this->db->update('user',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}

	function delete($kode){
		$this->db->where('userid',$kode);
		if($this->db->delete('user')){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}

	function getuser(){
		$query=$this->db->query("SELECT * FROM user");
		$hasil=$query->result_array();
		$i=1;
		foreach ($hasil as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td hidden>".$data['userid']."</td>";
			echo "<td>".$data['fullname']."</td>";
			echo "<td>".$data['username']."</td>";
			echo "<td>".$data['level']."</td>";
			echo "<td>".
			"<span class='editbtn'><button class='btn btn-warning btn-circle fa fa-pencil'></button></span>".
			"<span class='hapusbtn'><button class='btn btn-danger btn-circle fa fa-close'></button></span>"
			."</td>";
			echo "</tr>";
			$i++;
		}
	}


	// End of file
}

?>