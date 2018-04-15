<?php 

/**
* 
*/
class M_Transportation extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}


	function autono(){
		$tgl=date('Ymd');
		$query=$this->db->query("SELECT IFNULL( MAX( SUBSTRING( transportationid, 10, 3 ) ), 0 ) + 1 AS nourut FROM transportation WHERE SUBSTRING( transportationid, 2, 8 ) = ".$tgl); 
		$nourut=$query->row('nourut');
		$hasil="T".$tgl.sprintf('%03s',$nourut);
		return $hasil;
	}
	function insert(){
		$data=array(
			'transportationid'=>$this->autono(),
			'code'=>$this->input->post('kode'),
			'description'=>$this->input->post('desc'),
			'seat_qty'=>$this->input->post('jumlah'),
			'transportation_typeid'=>$this->input->post('tipe')
		);

		if($this->db->insert('transportation',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}

	}

	function update($kode){
		$data=array(
			'code'=>$this->input->post('kode'),
			'description'=>$this->input->post('desc'),
			'seat_qty'=>$this->input->post('jumlah'),
			'transportation_typeid'=>$this->input->post('tipe')

		);
		$this->db->where('transportationid',$kode);
		if($this->db->update('transportation',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}

	}

	function delete($kode){
		$this->db->where('transportationid',$kode);
		if($this->db->delete('transportation')){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}

	function gettransportasi(){
		$query=$this->db->query("SELECT t.transportationid, x.transportation_typeid, x.description AS jenis, t.description AS nama, t.`code`, t.seat_qty FROM transportation AS t INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid"); 
		$hasil=$query->result_array();
		$i=1;
		foreach ($hasil as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td hidden>".$data['transportationid']."</td>";
			echo "<td hidden>".$data['transportation_typeid']."</td>";
			echo "<td>".$data['jenis']."</td>";
			echo "<td>".$data['nama']."</td>";
			echo "<td>".$data['code']."</td>";
			echo "<td>".$data['seat_qty']."</td>";
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