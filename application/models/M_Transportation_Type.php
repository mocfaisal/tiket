<?php 

/**
* 
*/
class M_Transportation_Type extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}



	function autono(){
		$query=$this->db->query("SELECT IFNULL(MAX(transportation_typeid),0)+1 as nourut FROM transportation_type");
		$nourut=$query->row('nourut');
		$hasil=$nourut;
		return $hasil;
	}
	function insert(){
		$data=array(
			'transportation_typeid'=>$this->autono(),
			'description'=>$this->input->post('desc')
		);

		if($this->db->insert('transportation_type',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}

	}

	function update($kode){
		$data=array(
			'description'=>$this->input->post('desc')
		);

		$this->db->where('transportation_typeid',$kode);
		if($this->db->update('transportation_type',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}

	}

	function delete($kode){
		$this->db->where('transportation_typeid',$kode);
		if($this->db->delete('transportation_type')){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}

	function gettipe(){
		$query=$this->db->query("SELECT * FROM transportation_type");
		$hasil=$query->result_array();
		$i=1;
		foreach ($hasil as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td hidden>".$data['transportation_typeid']."</td>";
			// echo "<td>".$data['code']."</td>";
			echo "<td>".$data['description']."</td>";
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