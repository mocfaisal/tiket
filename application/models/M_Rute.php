<?php 

/**
* 
*/
class M_Rute extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}

	function autono(){
		// R20180119002
		$tgl = date('Ymd');
		$query=$this->db->query("SELECT IFNULL( MAX( SUBSTRING( ruteid, 10, 3 ) ), 0 ) + 1 AS nourut FROM rute WHERE SUBSTRING( ruteid, 2, 8 ) = ".$tgl); 
		$nourut=$query->row('nourut');
		$hasil="R".$tgl.sprintf('%03s',$nourut);
		return $hasil;
	}
	function insert(){
		$data=array(
			'ruteid'=>$this->autono(),
			'depart_at'=>$this->input->post('depart'),
			'rute_from'=>$this->input->post('rutedes'),
			'rute_to'=>$this->input->post('ruteto'),
			'time_go'=>$this->input->post('timego'),
			'time_arrived'=>$this->input->post('timearv'),
			'price'=>$this->input->post('harga'),
			'transportationid'=>$this->input->post('idkendaraan')

		);

		if($this->db->insert('rute',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}

	}

	function update($kode){
		$data=array(
			'depart_at'=>$this->input->post('depart'),
			'rute_from'=>$this->input->post('rutedes'),
			'rute_to'=>$this->input->post('ruteto'),
			'time_go'=>$this->input->post('timego'),
			'time_arrived'=>$this->input->post('timearv'),
			'price'=>$this->input->post('harga'),
			'transportationid'=>$this->input->post('idkendaraan')

		);
		$this->db->where('ruteid',$kode);
		if($this->db->update('rute',$data)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}

	}

	function delete($kode){
		$this->db->where('ruteid',$kode);
		if($this->db->delete('rute')){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	function getcity($id,$tipe){
		if($tipe == 'pesawat'){
			$query=$this->db->query("SELECT DISTINCT name FROM bandara WHERE id='".$id."'");
		}else{
			$query=$this->db->query("SELECT DISTINCT name FROM stasiun WHERE id='".$id."'");
		}

		$hasil=$query->row('name');
		return $hasil;
	}

	function getabbr($id,$type){
		if($type == 'pesawat'){
			$query=$this->db->query("SELECT DISTINCT abbr FROM bandara WHERE id='".$id."'");
		}else{
			$query=$this->db->query("SELECT DISTINCT abbr FROM stasiun WHERE id='".$id."'");
		}
		$hasil=$query->row('abbr');
		return $hasil;
	}

	function getrute($tipe){
		// $query=$this->db->query("SELECT * FROM rute");
		if($tipe=='pesawat'){
			$query=$this->db->query("SELECT r.ruteid, t.transportationid, x.transportation_typeid, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, r.price, x.description AS jenis, t.`code`, t.description AS nama, t.seat_qty FROM rute AS r INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid INNER JOIN bandara b ON r.rute_to = b.id WHERE t.transportation_typeid = 1"); 

		}else{
			$query=$this->db->query("SELECT r.ruteid, t.transportationid, x.transportation_typeid, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, r.price, x.description AS jenis, t.`code`, t.description AS nama, t.seat_qty FROM rute AS r INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid INNER JOIN stasiun AS s ON r.rute_to = s.id WHERE t.transportation_typeid = 2"); 
		}
		$hasil=$query->result_array();
		$i=1;
		foreach ($hasil as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td hidden>".$data['ruteid']."</td>";
			echo "<td hidden>".$data['transportationid']."</td>";
			echo "<td>".$data['jenis'].", ".$data['nama'].", ".$data['code']."</td>";
			echo "<td>".$data['depart_at']."</td>";
			if($tipe=='pesawat'){
				echo "<td>".$this->getcity($data['rute_from'],'pesawat').'('.$this->getabbr($data['rute_from'],'pesawat').')'."</td>";
				echo "<td>".$this->getcity($data['rute_to'],'pesawat').'('.$this->getabbr($data['rute_to'],'pesawat').')'."</td>";
			}else{
				echo "<td>".$this->getcity($data['rute_from'],'kereta').'('.$this->getabbr($data['rute_from'],'kereta').')'."</td>";
				echo "<td>".$this->getcity($data['rute_to'],'kereta').'('.$this->getabbr($data['rute_to'],'kereta').')'."</td>";

			}
			echo "<td>".$data['time_go']."</td>";
			echo "<td>".$data['time_arrived']."</td>";
			echo "<td>".$data['price']."</td>";
			echo "<td width='150px'>".
			"<span class='editbtn'><button class='btn btn-warning btn-circle fa fa-pencil'></button></span>".
			"<span class='hapusbtn'><button class='btn btn-danger btn-circle fa fa-close'></button></span>"
			."</td>";
			echo "<td hidden>".$data['jenis']."</td>";
			echo "<td hidden>".$data['rute_from']."</td>";
			echo "<td hidden>".$data['rute_to']."</td>";
			echo "</tr>";
			$i++;
		}
	}

	function getkendaraan($type){
		$query=$this->db->query("SELECT t.transportationid, x.description AS jenis, t.description AS nama, t.`code`, t.seat_qty FROM transportation AS t INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid where x.description like '%".$type."%'");

		$hasil=$query->result_array();
		$i=1;
		foreach ($hasil as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td hidden>".$data['transportationid']."</td>";
			echo "<td>".$data['jenis']."</td>";
			echo "<td>".$data['nama']."</td>";
			echo "<td>".$data['code']."</td>";
			echo "<td>".$data['seat_qty']."</td>";
			echo "<td>".
			"<span class='pilih'><button type='button' class='btn btn-success btn-rounded fa fa-check'></button></span>"
			."</td>";
			echo "</tr>";
			$i++;
		}
	}



	// End of file
}

?>