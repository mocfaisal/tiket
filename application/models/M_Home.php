<?php 

/**
* 
*/
class M_Home extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}

	function getdatapen($bulan,$name){
		$tgl=date('Y-'.$bulan);
		$query = $this->db->query("SELECT IFNULL( rs.reservation_date, 0 ) AS reservation_date, IFNULL( Sum( rs.price ), 0 ) AS price, x.description FROM reservation AS rs INNER JOIN `user` AS u ON rs.userid = u.userid INNER JOIN rute AS r ON rs.ruteid = r.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid WHERE x.description like '%".$name."%' AND rs.reservation_date like '".$tgl."%'");
		$hasil=$query->row('price');
		return $hasil;
	}

	function getdatatiket($bulan,$name){
		$tgl=date('Y-'.$bulan);
		$query=$this->db->query("SELECT Count(v.seat_code) AS reserved, v.reservation_date, v.depart_date FROM rute AS r INNER JOIN reservation AS v ON r.ruteid = v.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid WHERE x.description LIKE '%".$name."%' and v.reservation_date like '".$tgl."%'"); 
		$hasil=$query->row('reserved');
		// if(is_null($hasil)){
		// 	$hasil=0;
		// }
		return $hasil;
	}

	function getdatareserved($bulan){
		$tgl=date('Y-'.$bulan);
		$query=$this->db->query("SELECT r.ruteid, r.depart_at, r.price, v.reservation_date, v.depart_date, Count( v.seat_code ) AS reserved, t.seat_qty FROM rute AS r INNER JOIN reservation AS v ON r.ruteid = v.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid WHERE v.reservation_date like '".$tgl."%' GROUP BY v.reservation_date"); 
		return true;
	}

	function getdatatiket2($name){
		echo $this->getdatatiket('01',$name);
		echo ",";
		echo $this->getdatatiket('02',$name);
		echo ",";
		echo $this->getdatatiket('03',$name);
		echo ",";
		echo $this->getdatatiket('04',$name);
		echo ",";
		echo $this->getdatatiket('05',$name);
		echo ",";
		echo $this->getdatatiket('06',$name);
		echo ",";
		echo $this->getdatatiket('07',$name);
		echo ",";
		echo $this->getdatatiket('08',$name);
		echo ",";
		echo $this->getdatatiket('09',$name);
		echo ",";
		echo $this->getdatatiket('10',$name);
		echo ",";
		echo $this->getdatatiket('11',$name);
		echo ",";
		echo $this->getdatatiket('12',$name);
	}

	function getdatapenjualan($name){
		// echo "<pre>";
		echo $this->getdatapen('01',$name);
		echo ",";
		echo $this->getdatapen('02',$name);
		echo ",";
		echo $this->getdatapen('03',$name);
		echo ",";
		echo $this->getdatapen('04',$name);
		echo ",";
		echo $this->getdatapen('05',$name);
		echo ",";
		echo $this->getdatapen('06',$name);
		echo ",";
		echo $this->getdatapen('07',$name);
		echo ",";
		echo $this->getdatapen('08',$name);
		echo ",";
		echo $this->getdatapen('09',$name);
		echo ",";
		echo $this->getdatapen('10',$name);
		echo ",";
		echo $this->getdatapen('11',$name);
		echo ",";
		echo $this->getdatapen('12',$name);
		// echo "</pre>";

	}

	function getdatareserved2(){
		echo $this->getdatareserved('01');
		echo ",";
		echo $this->getdatareserved('02');
		echo ",";
		echo $this->getdatareserved('03');
		echo ",";
		echo $this->getdatareserved('04');
		echo ",";
		echo $this->getdatareserved('05');
		echo ",";
		echo $this->getdatareserved('06');
		echo ",";
		echo $this->getdatareserved('07');
		echo ",";
		echo $this->getdatareserved('08');
		echo ",";
		echo $this->getdatareserved('09');
		echo ",";
		echo $this->getdatareserved('10');
		echo ",";
		echo $this->getdatareserved('11');
		echo ",";
		echo $this->getdatareserved('12');
	}


// end of file
}

?>