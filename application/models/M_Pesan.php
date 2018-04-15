<?php 

/**
* 
*/
class M_Pesan extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}
	function rand_code($len)
	{
		$min_lenght= 0;
		$max_lenght = 100;
		$bigL = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$smallL = "abcdefghijklmnopqrstuvwxyz";
		$number = "0123456789";
		$bigB = str_shuffle($bigL);
		$smallS = str_shuffle($smallL);
		$numberS = str_shuffle($number);
		$subA = substr($bigB,0,5);
		$subB = substr($bigB,6,5);
		$subC = substr($bigB,10,5);
		$subD = substr($smallS,0,5);
		$subE = substr($smallS,6,5);
		$subF = substr($smallS,10,5);
		$subG = substr($numberS,0,5);
		$subH = substr($numberS,6,5);
		$subI = substr($numberS,10,5);
		$RandCode1 = str_shuffle($subA.$subD.$subB.$subF.$subC.$subE);
		$RandCode2 = str_shuffle($RandCode1);
		$RandCode = $RandCode1.$RandCode2;
		if ($len>$min_lenght && $len<$max_lenght)
		{
			$CodeEX = substr($RandCode,0,$len);
		}
		else
		{
			$CodeEX = $RandCode;
		}
		return $CodeEX;
	}

	function autoreservationid(){
		$tgl=date('Ymd');
		$query=$this->db->query("SELECT IFNULL( MAX( SUBSTRING( reservationid, 9, 3 ) ), 0 ) + 1 AS nourut FROM reservation WHERE SUBSTRING(reservationid,1,8) = '".$tgl."'"); 
		$nourut=$query->row('nourut');
		$hasil = $tgl.sprintf('%03s',$nourut);
		return $hasil;

	}

	function save(){
		$tgl=date('Y-m-d',strtotime($this->input->post('tanggal')));
		$jam=date('H:i:s');
		$data = array(
			'reservationid'=>$this->autoreservationid(),
			'reservation_code'=>$this->rand_code(5),//random code
			'reservation_at'=>$jam,
			'reservation_date'=>$tgl,
			'customerid'=>$this->input->post('noid'),
			'seat_code'=>$this->input->post('kursi2'),
			'ruteid'=>$this->input->post('ruteid2'),
			'depart_at'=>$this->input->post('depart_at2'),
			'depart_date'=>$tgl,
			'price'=>$this->input->post('harga'),
			'userid'=>$this->session->userdata('userid')
		);
		if($this->db->insert('reservation',$data)){
			echo $data['reservationid'];
		}else{
			echo "Gagal";
		}

	}
	function mutisave(){
		$tgl=date('Y-m-d',strtotime($this->input->post('tanggal')));
		$jam=date('H:i:s');
		$kode = $this->input->post('kode');
		foreach ($kode as $key => $value) {
			$data = array(
				'reservationid'=>$this->autoreservationid(),
				'reservation_code'=>$this->rand_code(5),
				'reservation_at'=>$jam,
				'reservation_date'=>$tgl,
				'customerid'=>$value,
				'seat_code'=>$this->input->post('kursi')[$key],
				'ruteid'=>$this->input->post('ruteid2'),
				'depart_at'=>$this->input->post('depart_at2'),
				'depart_date'=>$tgl,
				'price'=>$this->input->post('harga'),
				'userid'=>$this->session->userdata('userid')
			);
			$this->db->insert('reservation',$data);
			
		}
		if(true){
			echo $data['reservationid'];
		}else{
			echo "Gagal";
		}
	}

	function getdataT($tipe){
		$query=$this->db->query("SELECT t.transportationid, r.ruteid, t.description AS nama, t.`code`, r.depart_at, r.rute_from, r.rute_to, t.seat_qty, t.seat_qty AS sisa, r.price FROM transportation AS t INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid INNER JOIN rute AS r ON t.transportationid = r.transportationid WHERE x.transportation_typeid =  '".$tipe."'"); 
		$hasil=$query->result_array();
		$i=1;
		foreach ($hasil as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td hidden>".$data['transportationid']."</td>";
			echo "<td hidden>".$data['ruteid']."</td>";
			echo "<td>".$data['nama']."</td>";
			echo "<td>".$data['code']."</td>";
			echo "<td>".$data['depart_at']."</td>";
			echo "<td>".$data['rute_from']." - ".$data['rute_to']."</td>";
			echo "<td>".$data['seat_qty']."</td>";
			echo "<td>".$data['sisa']."</td>";
			echo "<td>".$data['price']."</td>";
			echo "<td>".
			"<span class='pilih2'><button type='button' class='btn btn-success btn-rounded fa fa-check'></button></span>"
			."</td>";
			echo "</tr>";
			$i++;
		}
	}

	function getid($kota,$type){
		if($type=='kereta'){
			$query=$this->db->query("SELECT DISTINCT id FROM stasiun WHERE city='".$kota."'");	
		}else{
			$query=$this->db->query("SELECT DISTINCT id FROM bandara WHERE city='".$kota."'");
		}
		
		$hasil=$query->row('id');
		return $hasil;	
	}
	function getresult($type,$from,$to){
		if($type=='kereta'){
			$query = $this->db->query("SELECT r.ruteid, t.transportationid, x.transportation_typeid, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, r.price, x.description AS jenis, t.`code`, t.description AS nama, t.seat_qty FROM rute AS r INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid inner join stasiun AS s on r.rute_to = s.id where x.description like '%".$type."%' AND rute_from = '".$this->getid($from,'kereta')."' and rute_to = '".$this->getid($to,'kereta')."'"); 
		}else{
			$query = $this->db->query("SELECT r.ruteid, t.transportationid, x.transportation_typeid, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, r.price, x.description AS jenis, t.`code`, t.description AS nama, t.seat_qty FROM rute AS r INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid inner join bandara AS b on r.rute_to = b.id where x.description like '%".$type."%' AND rute_from = '".$this->getid($from,'pesawat')."' and rute_to = '".$this->getid($to,'pesawat')."'"); 
		}
		$hasil=$query->result_array();
		$i=1;

		foreach ($hasil as $data) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td hidden>".$data['ruteid']."</td>";
			echo "<td>".$data['jenis']."</td>";
			echo "<td>".$data['nama']."</td>";
			// echo "<td hidden>".$data['transportationid']."</td>";
			// echo "<td hidden>".$data['transportation_typeid']."</td>";
			echo "<td>".$this->getcity($data['rute_from'],$type)."</td>";
			echo "<td>".$this->getcity($data['rute_to'],$type)."</td>";
			echo "<td>".$data['time_go']."</td>";
			echo "<td>".$data['time_arrived']."</td>";
			echo "<td>".$data['price']."</td>";
			echo "<td hidden>".$data['seat_qty']."</td>";
			echo "<td>".
			"<span class='pilih2'><button type='button' class='btn btn-success btn-rounded fa fa-check'></button></span>"
			."</td>";
			echo "</tr>";
			$i++;
		}
	}

	
	function checkkursi($tgl,$rute,$type){
		$tgl=date('Y-m-d',strtotime($tgl));
		$query=$this->db->query("SELECT v.depart_date, r.ruteid, v.seat_code FROM reservation AS v INNER JOIN rute AS r ON v.ruteid = r.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid WHERE x.description like '".$type."' AND v.depart_date =  '".$tgl."' AND r.ruteid = '".$rute."'"); 
		$hasil=$query->result_array();
		echo json_encode($hasil);
	}


	function getcustomerfirst(){
		$term=trim(strip_tags($this->input->get('term')));
		$query = $this->db->query("SELECT c.customerid, c.NIK as label, c.`name`, c.address, c.phone, c.gender FROM customer AS c WHERE NIK like '".$term."%'");
		$hasil = $query->result_array();
		echo json_encode($hasil);
	}

	function getcustomer($nik){
		$query = $this->db->query("SELECT c.customerid, c.NIK, c.`name`, c.address, c.phone, c.gender FROM customer AS c WHERE NIK = '".$nik."'"); 
		$jml = $query->num_rows();
		$hasil=$query->result_array();
		if($jml==1){
			$hasil = json_encode($hasil);
		}
		else{
			$hasil = "Nothing";
			// return false;
		}
		echo $hasil;
	}


	function getkota(){
		$term=trim(strip_tags($this->input->get('term')));
		$query=$this->db->query("SELECT DISTINCT s.city as label FROM stasiun s WHERE city like '%".$term."%'"); 
		$hasil=$query->result_array();
		echo json_encode($hasil);
	}

	function getabbr($id,$type){
		if($tipe == 'pesawat'){
			$query=$this->db->query("SELECT DISTINCT abbr FROM bandara  WHERE id='".$id."'");
		}else{
			$query=$this->db->query("SELECT DISTINCT abbr FROM stasiun WHERE id='".$id."'");
		}
		$hasil=$query->row('abbr');
		return $hasil;
	}
	
	function getcity($id,$type){
		if($type=='kereta'){
			$query=$this->db->query("SELECT DISTINCT city FROM stasiun WHERE id='".$id."'");
		}
		else{
			$query=$this->db->query("SELECT DISTINCT city FROM bandara WHERE id='".$id."'");
		}
		$hasil=$query->row('city');
		return $hasil;
	}
	function getname($rutefrom,$ruteto){
		$query=$this->db->query("SELECT DISTINCT * FROM stasiun WHERE id='".$rutefrom."' OR id ='".$ruteto."'");
		$hasil=$query->row('name');
		return $hasil;
	}

	function cetak($id,$type){
		if($type=='kereta'){
			$query=$this->db->query("SELECT v.reservationid, c.NIK, c.`name` AS nama, c.customerid, v.depart_date, v.reservation_date, v.seat_code, r.depart_at, r.rute_to, r.rute_from, x.description AS kendaraan, s.`name`, v.price, u.fullname FROM reservation AS v INNER JOIN customer AS c ON v.customerid = c.customerid INNER JOIN rute AS r ON v.ruteid = r.ruteid INNER JOIN stasiun AS s ON r.rute_to = s.id OR r.rute_from = s.id INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid INNER join `user` u on v.userid = u.userid WHERE x.description like '%".$type."%' AND v.reservationid = '".$id."' GROUP BY v.reservationid"); 
		}
		else{
			$query=$this->db->query("SELECT v.reservationid, c.NIK, c.`name` AS nama, c.customerid, v.depart_date, v.reservation_date, v.seat_code, r.depart_at, r.rute_to, r.rute_from, x.description AS kendaraan, b.`name`, v.price, u.fullname FROM reservation AS v INNER JOIN customer AS c ON v.customerid = c.customerid INNER JOIN rute AS r ON v.ruteid = r.ruteid INNER JOIN bandara AS b ON r.rute_to = b.id OR r.rute_from = b.id INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid INNER JOIN `user` u ON v.userid = u.userid WHERE x.description like '%".$type."%' AND v.reservationid = '".$id."' GROUP BY v.reservationid");
		}
		$hasil=$query->row_array();
		$rute=$this->getcity($hasil['rute_from'],$type).' - '. $this->getcity($hasil['rute_to'],$type);
		$arr=array(
			'reservationid' => $hasil['reservationid'],
			'nik' => $hasil['NIK'],
			'namalengkap' => $hasil['nama'],
			'depart_date' => $hasil['depart_date'],
			'reservation_date' => $hasil['reservation_date'],
			'kursi' => $hasil['seat_code'],
			'depart_at' => $hasil['depart_at'],
			'rute' => $rute,
			'kendaraan' => $hasil['kendaraan'].' - '.$hasil['name'],
			'harga' => $hasil['price'],
			'userz' => $hasil['fullname']
		);
		$this->session->set_userdata($arr);
		// return $dataz;
		// echo '['.json_encode($arr).']';

	}

	function cetak2($id,$type){
		if($type=='kereta'){
			$query=$this->db->query("SELECT v.reservationid, c.NIK, c.`name` AS nama, c.customerid, v.depart_date, v.reservation_date, v.seat_code, r.depart_at, r.rute_to, r.rute_from, x.description AS kendaraan, s.`name`, v.price, u.fullname FROM reservation AS v INNER JOIN customer AS c ON v.customerid = c.customerid INNER JOIN rute AS r ON v.ruteid = r.ruteid INNER JOIN stasiun AS s ON r.rute_to = s.id OR r.rute_from = s.id INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid INNER join `user` u on v.userid = u.userid WHERE x.description like '%".$type."%' AND v.reservationid = '".$id."' GROUP BY v.reservationid"); 
		}
		else{
			$query=$this->db->query("SELECT v.reservationid, c.NIK, c.`name` AS nama, c.customerid, v.depart_date, v.reservation_date, v.seat_code, r.depart_at, r.rute_to, r.rute_from, x.description AS kendaraan, b.`name`, v.price, u.fullname FROM reservation AS v INNER JOIN customer AS c ON v.customerid = c.customerid INNER JOIN rute AS r ON v.ruteid = r.ruteid INNER JOIN bandara AS b ON r.rute_to = b.id OR r.rute_from = b.id INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid INNER JOIN `user` u ON v.userid = u.userid WHERE x.description like '%".$type."%' AND v.reservationid = '".$id."' GROUP BY v.reservationid");
		}
		$hasil=$query->row_array();
		$rute=$this->getcity($hasil['rute_from'],$type).' - '. $this->getcity($hasil['rute_to'],$type);
		$arr=array(
			'reservationid' => $hasil['reservationid'],
			'nik' => $hasil['NIK'],
			'namalengkap' => $hasil['nama'],
			'depart_date' => $hasil['depart_date'],
			'reservation_date' => $hasil['reservation_date'],
			'kursi' => $hasil['seat_code'],
			'depart_at' => $hasil['depart_at'],
			'rute' => $rute,
			'kendaraan' => $hasil['kendaraan'].' - '.$hasil['name'],
			'harga' => $hasil['price'],
			'userz' => $hasil['fullname']
		);
		// $this->session->set_userdata($arr);
		// return $arr;
		echo '['.json_encode($arr).']';

	}

	// end of file

}

?>