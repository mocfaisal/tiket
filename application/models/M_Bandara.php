<?php 

/**
* 
*/
class M_Bandara extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}


	function autoid($abbr){
		$query=$this->db->query("SELECT IFNULL( MAX( RIGHT ( id, 3 ) ), 0 ) + 1 AS nourut FROM bandara WHERE abbr = '".$abbr."'"); 
		$nourut=$query->row('nourut');
		$hasil='BU'.$abbr.sprintf('%03s',$nourut);
		return $hasil;
	}
	function tambah(){
		$abbr=strtoupper($this->input->post('abbr'));
		$data=array(
			'id'=>$this->autoid($abbr),
			'name'=>$this->input->post('name'),
			'city'=>$this->input->post('city'),
			'abbr'=>$abbr
		);
		if($this->db->insert('bandara',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}


	function edit($kode){
		$abbr=strtoupper($this->input->post('abbr'));
		$data=array(
			'id'=>$this->autoid($abbr),
			'name'=>$this->input->post('name'),
			'city'=>$this->input->post('city'),
			'abbr'=>$abbr
		);
		$this->db->where('id',$kode);
		if($this->db->update('bandara',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}

	function hapus($kode){
		$this->db->where('id',$kode);
		if($this->db->delete('bandara')){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	function getkota(){
		$query=$this->db->query("SELECT DISTINCT * FROM bandara b"); 
		$hasil=$query->result_array();
		echo json_encode($hasil);
	}

	function getdata(){
		$query=$this->db->query("SELECT * FROM bandara");
		$hasil=$query->result_array();
		$i=1;
		foreach ($hasil as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['id']."</td>";
			echo "<td>".$data['name']."</td>";
			echo "<td>".$data['city']."</td>";
			echo "<td>".$data['abbr']."</td>";
			echo "<td>".
			"<span class='editbtn'><button class='btn btn-warning btn-circle fa fa-pencil'></button></span>".
			"<span class='hapusbtn'><button class='btn btn-danger btn-circle fa fa-close'></button></span>".
			"</td>";
			echo "</tr>";
			$i++;
		}

	}

}

?>