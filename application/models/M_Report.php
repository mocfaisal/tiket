<?php 

/**
* 
*/
class M_Report extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}

	function getpenjualanfirst($type){
		$query=$this->db->query("SELECT r.ruteid, rs.reservation_date, rs.depart_date, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, Sum(rs.price) AS price, u.fullname FROM reservation AS rs INNER JOIN `user` AS u ON rs.userid = u.userid INNER JOIN rute AS r ON rs.ruteid = r.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid where x.description like '%".$type."%' GROUP BY r.ruteid, rs.reservation_date, rs.depart_date"); 
		$i=1;
		$subtotal = 0;
		echo "<table class='table'>
		<thead>
		<tr>
		<th>No</th>
		<th>ID Rute</th>
		<th>Tanggal dipesan</th>
		<th>Tanggal Berangkat</th>
		<th>Berangkat dari</th>
		<th>Rute</th>
		<th>Waktu</th>
		<th>Harga</th>
		<th>User</th>
		</tr>
		</thead>";
		echo '<tbody>';
		foreach ($query->result_array() as $data){
			$rute=$this->getcity($data['rute_from'],$type).' - '.$this->getcity($data['rute_to'],$type);
			$waktu=$data['time_go'].' - '.$data['time_arrived'];
			echo "<tr>";
			echo '<td>'.$i.'</td>';
			echo '<td>'.$data['ruteid'].'</td>';
			echo '<td>'.$data['reservation_date'].'</td>';
			echo '<td>'.$data['depart_date'].'</td>';
			echo '<td>'.$data['depart_at'].'</td>';
			echo '<td>'.$rute.'</td>';
			echo '<td>'.$waktu.'</td>';
			echo '<td>'.$data['price'].'</td>';
			echo '<td>'.$data['fullname'].'</td>';
			echo "</tr>";
			$i++;
			$subtotal +=$data['price'];
		}
		echo '</tbody>
		<tfoot>
		<tr>';
		echo "<th colspan='7'>Total</th>";
		echo '<th colspan="2">Rp. '.number_format($subtotal).'</th>';
		echo '</tr>
		</tfoot>';
	}

	function getpenjualan($from,$to,$type){
		// $where='';
		if($from=='' AND $to ==''){
			$where='';
		}
		else{
			$where = ' WHERE x.description like "%'.$type.'%" AND depart_date BETWEEN '.date('Ymd',strtotime($from)).' AND '.date('Ymd',strtotime($to)); 
		}
		
		$query=$this->db->query("SELECT r.ruteid, rs.reservation_date, rs.depart_date, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, Sum(rs.price) AS price, u.fullname FROM reservation AS rs INNER JOIN `user` AS u ON rs.userid = u.userid INNER JOIN rute AS r ON rs.ruteid = r.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid".$where." GROUP BY ruteid, rs.reservation_date, rs.depart_date"); 
		$i=1;
		$subtotal = 0;
		echo "<table class='table'>
		<thead>
		<tr>
		<th>No</th>
		<th>ID Rute</th>
		<th>Tanggal dipesan</th>
		<th>Tanggal Berangkat</th>
		<th>Berangkat dari</th>
		<th>Rute</th>
		<th>Waktu</th>
		<th>Harga</th>
		<th>User</th>
		</tr>
		</thead>";
		echo '<tbody>';
		foreach ($query->result_array() as $data){
			$rute=$this->getcity($data['rute_from']).' - '.$this->getcity($data['rute_to']);
			$waktu=$data['time_go'].' - '.$data['time_arrived'];
			echo "<tr>";
			echo '<td>'.$i.'</td>';
			echo '<td>'.$data['ruteid'].'</td>';
			echo '<td>'.$data['reservation_date'].'</td>';
			echo '<td>'.$data['depart_date'].'</td>';
			echo '<td>'.$data['depart_at'].'</td>';
			echo '<td>'.$rute.'</td>';
			echo '<td>'.$waktu.'</td>';
			echo '<td>'.$data['price'].'</td>';
			echo '<td>'.$data['fullname'].'</td>';
			echo "</tr>";
			$i++;
			$subtotal +=$data['price'];
		}
		echo '</tbody>
		<tfoot>
		<tr>';
		echo "<th colspan='7'>Total</th>";
		echo '<th colspan="2">Rp. '.number_format($subtotal).'</th>';
		echo '</tr>
		</tfoot>';
		
	}

	function getpelangganfirst($type){
		$query=$this->db->query("SELECT r.ruteid, c.customerid, c.`name`, rs.depart_date, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, Sum(rs.price) AS price, u.fullname FROM reservation AS rs INNER JOIN `user` AS u ON rs.userid = u.userid INNER JOIN rute AS r ON rs.ruteid = r.ruteid INNER JOIN customer AS c ON rs.customerid = c.customerid INNER JOIN transportation AS t ON r.transportationid = t.transportationid inner JOIN transportation_type AS x on t.transportation_typeid = x.transportation_typeid WHERE x.description like '%".$type."%' GROUP BY r.ruteid, c.customerid, rs.depart_date");
		$i=1;
		$subtotal = 0;
		echo "<table class='table'>
		<thead>
		<tr>
		<th>No</th>
		<th>ID Rute</th>
		<th>ID Pelanggan</th>
		<th>Nama Pelanggan</th>
		<th>Tanggal</th>
		<th>Berangkat dari</th>
		<th>Rute</th>
		<th>Waktu</th>
		<th>Harga</th>
		<th>User</th>
		</tr>
		</thead>";
		echo '<tbody>';
		foreach ($query->result_array() as $data){
			$rute=$this->getcity($data['rute_from'],$type).' - '.$this->getcity($data['rute_to'],$type);
			$waktu=$data['time_go'].' - '.$data['time_arrived'];
			echo "<tr>";
			echo '<td>'.$i.'</td>';
			echo '<td>'.$data['ruteid'].'</td>';
			echo '<td>'.$data['customerid'].'</td>';
			echo '<td>'.$data['name'].'</td>';
			echo '<td>'.$data['depart_date'].'</td>';
			echo '<td>'.$data['depart_at'].'</td>';
			echo '<td>'.$rute.'</td>';
			echo '<td>'.$waktu.'</td>';
			echo '<td>'.$data['price'].'</td>';
			echo '<td>'.$data['fullname'].'</td>';
			echo "</tr>";
			$i++;
			$subtotal +=$data['price'];
		}
		echo '</tbody>
		<tfoot>
		<tr>';
		echo "<th colspan='8'>Total</th>";
		echo '<th colspan="2">Rp. '.number_format($subtotal).'</th>';
		echo '</tr>
		</tfoot>';
	}

	function getpelanggan($from,$to,$type){
		// $where='';
		if($from=='' AND $to ==''){
			$where='';
		}
		else{
			$where = ' WHERE x.description like "%'.$type.'%" AND depart_date BETWEEN '.date('Ymd',strtotime($from)).' AND '.date('Ymd',strtotime($to)); 
		}
		
		$query=$this->db->query("SELECT r.ruteid, c.customerid, c.`name`, rs.depart_date, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, Sum(rs.price) AS price, u.fullname FROM reservation AS rs INNER JOIN `user` AS u ON rs.userid = u.userid INNER JOIN rute AS r ON rs.ruteid = r.ruteid INNER JOIN customer AS c ON rs.customerid = c.customerid INNER JOIN transportation AS t ON r.transportationid = t.transportationid inner JOIN transportation_type AS x on t.transportation_typeid = x.transportation_typeid ".$where." GROUP BY ruteid, c.customerid, rs.depart_date");
		$i=1;
		$subtotal = 0;
		echo "<table class='table'>
		<thead>
		<tr>
		<th>No</th>
		<th>ID Rute</th>
		<th>ID Pelanggan</th>
		<th>Nama Pelanggan</th>
		<th>Tanggal</th>
		<th>Berangkat dari</th>
		<th>Rute</th>
		<th>Waktu</th>
		<th>Harga</th>
		<th>User</th>
		</tr>
		</thead>";
		echo '<tbody>';
		foreach ($query->result_array() as $data){
			$rute=$this->getcity($data['rute_from'],$type).' - '.$this->getcity($data['rute_to'],$type);
			$waktu=$data['time_go'].' - '.$data['time_arrived'];
			echo "<tr>";
			echo '<td>'.$i.'</td>';
			echo '<td>'.$data['ruteid'].'</td>';
			echo '<td>'.$data['customerid'].'</td>';
			echo '<td>'.$data['name'].'</td>';
			echo '<td>'.$data['depart_date'].'</td>';
			echo '<td>'.$data['depart_at'].'</td>';
			echo '<td>'.$rute.'</td>';
			echo '<td>'.$waktu.'</td>';
			echo '<td>'.$data['price'].'</td>';
			echo '<td>'.$data['fullname'].'</td>';
			echo "</tr>";
			$i++;
			$subtotal +=$data['price'];
		}
		echo '</tbody>
		<tfoot>
		<tr>';
		echo "<th colspan='8'>Total</th>";
		echo '<th colspan="2">Rp. '.number_format($subtotal).'</th>';
		echo '</tr>
		</tfoot>';
	}

	function getrutefirst($type){
		$query=$this->db->query("SELECT r.ruteid, rs.depart_date, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, Sum(rs.price) AS price, u.fullname FROM reservation AS rs INNER JOIN `user` AS u ON rs.userid = u.userid INNER JOIN rute AS r ON rs.ruteid = r.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid where x.description like '%".$type."%' GROUP BY r.ruteid, rs.depart_date");
		$i=1;
		$subtotal = 0;
		echo "<table class='table'>
		<thead>
		<tr>
		<th>No</th>
		<th>ID Rute</th>
		<th>Tanggal</th>
		<th>Berangkat dari</th>
		<th>Rute</th>
		<th>Waktu</th>
		<th>Harga</th>
		<th>User</th>
		</tr>
		</thead>";
		echo '<tbody>';
		foreach ($query->result_array() as $data){
			$rute=$this->getcity($data['rute_from'],$type).' - '.$this->getcity($data['rute_to'],$type);
			$waktu=$data['time_go'].' - '.$data['time_arrived'];
			echo "<tr>";
			echo '<td>'.$i.'</td>';
			echo '<td>'.$data['ruteid'].'</td>';
			echo '<td>'.$data['depart_date'].'</td>';
			echo '<td>'.$data['depart_at'].'</td>';
			echo '<td>'.$rute.'</td>';
			echo '<td>'.$waktu.'</td>';
			echo '<td>'.$data['price'].'</td>';
			echo '<td>'.$data['fullname'].'</td>';
			echo "</tr>";
			$i++;
			$subtotal +=$data['price'];
		}
		echo '</tbody>
		<tfoot>
		<tr>';
		echo "<th colspan='6'>Total</th>";
		echo '<th colspan="2">Rp. '.number_format($subtotal).'</th>';
		echo '</tr>
		</tfoot>';
	}

	function getrute($from,$to,$type){
		// $where='';
		if($from=='' AND $to ==''){
			$where='';
		}
		else{
			$where = ' WHERE x.description like "%'.$type.'%" AND depart_date BETWEEN '.date('Ymd',strtotime($from)).' AND '.date('Ymd',strtotime($to)); 
		}
		
		$query=$this->db->query("SELECT r.ruteid, rs.depart_date, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, Sum(rs.price) AS price, u.fullname FROM reservation AS rs INNER JOIN `user` AS u ON rs.userid = u.userid INNER JOIN rute AS r ON rs.ruteid = r.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid".$where." GROUP BY ruteid, depart_date"); 
		$i=1;
		$subtotal = 0;
		echo "<table class='table'>
		<thead>
		<tr>
		<th>No</th>
		<th>ID Rute</th>
		<th>Tanggal</th>
		<th>Berangkat dari</th>
		<th>Rute</th>
		<th>Waktu</th>
		<th>Harga</th>
		<th>User</th>
		</tr>
		</thead>";
		echo '<tbody>';
		foreach ($query->result_array() as $data){
			$rute=$this->getcity($data['rute_from'],$type).' - '.$this->getcity($data['rute_to'],$type);
			$waktu=$data['time_go'].' - '.$data['time_arrived'];
			echo "<tr>";
			echo '<td>'.$i.'</td>';
			echo '<td>'.$data['ruteid'].'</td>';
			echo '<td>'.$data['depart_date'].'</td>';
			echo '<td>'.$data['depart_at'].'</td>';
			echo '<td>'.$rute.'</td>';
			echo '<td>'.$waktu.'</td>';
			echo '<td>'.$data['price'].'</td>';
			echo '<td>'.$data['fullname'].'</td>';
			echo "</tr>";
			$i++;
			$subtotal +=$data['price'];
		}
		echo '</tbody>
		<tfoot>
		<tr>';
		echo "<th colspan='6'>Total</th>";
		echo '<th colspan="2">Rp. '.number_format($subtotal).'</th>';
		echo '</tr>
		</tfoot>';
		
	}
	function reserved1($ruteid){
		$query=$this->db->query("SELECT DISTINCT r.ruteid, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, r.price, v.reservation_date, v.depart_date, Count( v.seat_code ) AS reserved, t.seat_qty FROM rute AS r INNER JOIN reservation AS v ON r.ruteid = v.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid WHERE v.ruteid='".$ruteid."'  GROUP BY v.ruteid, v.reservation_date, v.depart_date"); 
		$hasil=$query->row('reserved');
		return $hasil;
	}

	function reserved($ruteid,$from,$to){
		$query=$this->db->query("SELECT DISTINCT r.ruteid, r.depart_at, r.rute_from, r.rute_to, r.time_go, r.time_arrived, r.price, v.reservation_date, v.depart_date, Count( v.seat_code ) AS reserved, t.seat_qty FROM rute AS r INNER JOIN reservation AS v ON r.ruteid = v.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid WHERE v.ruteid='".$ruteid."' AND v.reservation_date BETWEEN '".$from."' AND '".$to."' GROUP BY v.ruteid, v.reservation_date, v.depart_date"); 
		$hasil=$query->row('reserved');
		if($hasil==0){
			$hasil=0;
		}
		return $hasil;
	}
	function getabbr($id,$type){
		if($type=='kereta'){
			$query=$this->db->query("SELECT DISTINCT abbr FROM stasiun WHERE id='".$id."'");
		}
		else{
			$query=$this->db->query("SELECT DISTINCT abbr FROM bandara WHERE id='".$id."'");
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
	function getname($rutefrom,$ruteto,$type){
		if($type=='kereta'){
			$query=$this->db->query("SELECT DISTINCT * FROM stasiun WHERE id='".$rutefrom."' OR id ='".$ruteto."'");
		}
		else{
			$query=$this->db->query("SELECT DISTINCT * FROM bandara WHERE id='".$rutefrom."' OR id ='".$ruteto."'");	
		}
		$hasil=$query->row('name');
		return $hasil;
	}

	function getjadwalfirst($type){
		if($type=='kereta'){
			$query=$this->db->query("SELECT r.ruteid, r.depart_at, r.rute_from, s.`name`, r.rute_to, s.abbr, rs.depart_date, r.time_go, r.time_arrived, r.price, t.seat_qty, Count( t.seat_qty ) AS reserved FROM stasiun AS s INNER JOIN rute AS r ON s.id = r.rute_to INNER JOIN reservation AS rs ON r.ruteid = rs.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid GROUP BY rs.ruteid, rs.depart_date"); 	
		}
		else{
			$query=$this->db->query("SELECT r.ruteid, r.depart_at, r.rute_from, b.`name`, r.rute_to, b.abbr, rs.depart_date, r.time_go, r.time_arrived, r.price, t.seat_qty, Count( t.seat_qty ) AS reserved FROM bandara AS b INNER JOIN rute AS r ON b.id = r.rute_to INNER JOIN reservation AS rs ON r.ruteid = rs.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid GROUP BY rs.ruteid, rs.depart_date"); 
		}
		$i=1;
		$subtotal = 0;
		echo "<table class='table'>
		<thead>
		<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Depart From</th>";
		if($type=='kereta'){
			echo "<th>Trail Name</th>";
		}else{
			echo "<th>Airline Name</th>";
		}
		echo "<th>Depart to</th>
		<th>Time</th>
		<th>Harga</th>
		<th>Seat</th>
		<th>Reserved</th>
		</tr>
		</thead>";
		echo '<tbody>';
		foreach ($query->result_array() as $data){
			$from =$data['rute_from'];
			$to = $data['rute_to'];
			$rute=$data['ruteid'];
			echo "<tr>";
			echo '<td>'.$i.'</td>';
			echo '<td>'.$data['depart_date'].'</td>';
			echo '<td>'.$this->getcity($data['rute_from'],$type).' ('.$this->getabbr($data['rute_from'],$type).') '.$data['depart_at'].'</td>';
			echo '<td>'.$this->getname($from,$to,$type).'</td>';
			echo '<td>'.$this->getcity($data['rute_to'],$type).' ('.$this->getabbr($data['rute_to'],$type).') '.$data['depart_at'].'</td>';
			echo '<td>'.$data['time_go'].' - '.$data['time_arrived'].'</td>';
			echo '<td>'.$data['price'].'</td>';
			echo '<td>'.$data['seat_qty'].'</td>';
			echo '<td>'.$data['reserved'].'</td>';
			// echo "<td>".$this->reserved1($rute)."</td>";
			echo "</tr>";
			$i++;
			$subtotal +=$data['price'];
		}
		echo '</tbody>
		<tfoot>
		<tr>';
		echo "<th colspan='7'>Total</th>";
		echo '<th colspan="2">Rp. '.number_format($subtotal).'</th>';
		echo '</tr>
		</tfoot>';
	}

	function getjadwal($from,$to,$type){
		// $where='';
		if($from=='' AND $to ==''){
			$where='';
		}
		else{
			$where = ' WHERE depart_date BETWEEN '.date('Ymd',strtotime($from)).' AND '.date('Ymd',strtotime($to)); 
		}
		if($type=='kereta'){
			$query=$this->db->query("SELECT r.ruteid, r.depart_at, r.rute_from, s.`name`, r.rute_to, s.abbr, rs.depart_date, r.time_go, r.time_arrived, r.price, t.seat_qty, Count( t.seat_qty ) AS reserved FROM stasiun AS s INNER JOIN rute AS r ON s.id = r.rute_to INNER JOIN reservation AS rs ON r.ruteid = rs.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid".$where." GROUP BY rs.ruteid, rs.depart_date"); 
		}else{
			$query=$this->db->query("SELECT r.ruteid, r.depart_at, r.rute_from, b.`name`, r.rute_to, s.abbr, rs.depart_date, r.time_go, r.time_arrived, r.price, t.seat_qty, Count( t.seat_qty ) AS reserved FROM bandara AS b INNER JOIN rute AS r ON b.id = r.rute_to INNER JOIN reservation AS rs ON r.ruteid = rs.ruteid INNER JOIN transportation AS t ON r.transportationid = t.transportationid".$where." GROUP BY rs.ruteid, rs.depart_date"); 
		}

		$i=1;
		$subtotal = 0;
		echo "<table class='table'>
		<thead>
		<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Depart From</th>";
		if($type=='kereta'){
			echo "<th>Trail Name</th>";
		}else{
			echo "<th>Airline Name</th>";
		}
		echo "<th>Depart to</th>
		<th>Time</th>
		<th>Harga</th>
		<th>Seat</th>
		<th>Reserved</th>
		</tr>
		</thead>";
		echo '<tbody>';
		foreach ($query->result_array() as $data){
			$from =$data['rute_from'];
			$to = $data['rute_to'];
			$rute=$data['ruteid'];
			echo "<tr>";
			echo '<td>'.$i.'</td>';
			echo '<td>'.$data['depart_date'].'</td>';
			echo '<td>'.$this->getcity($data['rute_from'],$type).' ('.$this->getabbr($data['rute_from'],$type).') '.$data['depart_at'].'</td>';
			echo '<td>'.$this->getname($from,$to,$type).'</td>';
			echo '<td>'.$this->getcity($data['rute_to'],$type).' ('.$this->getabbr($data['rute_to'],$type).') '.$data['depart_at'].'</td>';
			echo '<td>'.$data['time_go'].' - '.$data['time_arrived'].'</td>';
			echo '<td>'.$data['price'].'</td>';
			echo '<td>'.$data['seat_qty'].'</td>';
			echo '<td>'.$data['reserved'].'</td>';
			// echo "<td>".$this->reserved($rute,$from,$to)."</td>";
			echo "</tr>";
			$i++;
			$subtotal +=$data['price'];
		}
		echo '</tbody>
		<tfoot>
		<tr>';
		echo "<th colspan='7'>Total</th>";
		echo '<th colspan="2">Rp. '.number_format($subtotal).'</th>';
		echo '</tr>
		</tfoot>';

	}


	function getperkota($type){
		$query = $this->db->query("SELECT rs.reservationid, b.`name`, b.city, b.abbr, r.rute_from, r.rute_to, r.ruteid, Sum(rs.price) AS price FROM reservation AS rs INNER JOIN rute AS r ON rs.ruteid = r.ruteid INNER JOIN bandara AS b on b.id = r.rute_to INNER JOIN transportation AS t ON r.transportationid = r.transportationid INNER JOIN transportation_type AS x ON t.transportation_typeid = x.transportation_typeid where x.description like '%".$type."%' GROUP BY abbr ");
		$i=1;
		$subtotal = 0;
		echo "<table class='table'>
		<thead>
		<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Depart From</th>";
		if($type=='kereta'){
			echo "<th>Trail Name</th>";
		}else{
			echo "<th>Airline Name</th>";
		}
		echo "<th>Depart to</th>
		<th>Time</th>
		<th>Harga</th>
		<th>Seat</th>
		<th>Reserved</th>
		</tr>
		</thead>";
		echo '<tbody>';
		foreach ($query->result_array() as $data){
			$from =$data['rute_from'];
			$to = $data['rute_to'];
			$rute=$data['ruteid'];
			echo "<tr>";
			echo '<td>'.$i.'</td>';
			echo '<td>'.$data['depart_date'].'</td>';
			echo '<td>'.$this->getcity($data['rute_from'],$type).' ('.$this->getabbr($data['rute_from'],$type).') '.$data['depart_at'].'</td>';
			echo '<td>'.$this->getname($from,$to,$type).'</td>';
			echo '<td>'.$this->getcity($data['rute_to'],$type).' ('.$this->getabbr($data['rute_to'],$type).') '.$data['depart_at'].'</td>';
			echo '<td>'.$data['time_go'].' - '.$data['time_arrived'].'</td>';
			echo '<td>'.$data['price'].'</td>';
			echo '<td>'.$data['seat_qty'].'</td>';
			echo '<td>'.$data['reserved'].'</td>';
			// echo "<td>".$this->reserved1($rute)."</td>";
			echo "</tr>";
			$i++;
			$subtotal +=$data['price'];
		}
		echo '</tbody>
		<tfoot>
		<tr>';
		echo "<th colspan='7'>Total</th>";
		echo '<th colspan="2">Rp. '.number_format($subtotal).'</th>';
		echo '</tr>
		</tfoot>';

	}


	// end of file
}

?>