<?php 

/**
* 
*/
class M_Customer extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}

	function getdata(){
		$query=$this->db->get('customer');
		
		$i=1;
		foreach($query->result_array() as $data){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['id']."</td>";
			echo "<td>".$data['NIK']."</td>";
			echo "<td>".$data['name']."</td>";
			echo "<td>".$data['address']."</td>";
			echo "<td>".$data['phone']."</td>";
			echo "<td>".$data['gender']."</td>";
			echo "<td>";
			echo "<span class='pilih'>";
			echo "<button class='btn btn-circle btn-info' type='button'  title='Pilih'><i class='fa fa-check'></i></button>";
			echo "</span>";
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	}

	function autono(){
		// R20180119002
		// C20180121001
		$tgl = date('Ymd');
		$query=$this->db->query("SELECT IFNULL( MAX( SUBSTRING( customerid, 10, 3 ) ), 0 ) + 1 AS nourut FROM customer WHERE SUBSTRING( customerid, 2, 8 ) = ".$tgl); 
		$nourut=$query->row('nourut');
		$hasil="C".$tgl.sprintf('%03s',$nourut);
		return $hasil;
	}

	function save(){
		$data=array(
			'customerid'=>$this->autono(),
			'NIK'=>$this->input->post('nik'),
			'name'=>$this->input->post('namalengkap'),
			'address'=>$this->input->post('alamat'),
			'phone'=>$this->input->post('telpon'),
			'gender'=>$this->input->post('jk')
		);

		if($this->db->insert('customer',$data)){
			echo "Berhasil";			
		}
		else{
			echo "Gagal";
		}
	}


	function update(){
		$data2=array(
			'NIK'=>$this->input->post('nik'),
			'name'=>$this->input->post('namalengkap'),
			'address'=>$this->input->post('alamat'),
			'phone'=>$this->input->post('telpon'),
			'gender'=>$this->input->post('jk')
		);

		$this->db->where('nik',$this->input->post('nik'));
		$this->db->where('customerid',$this->input->post('noid'));
		if($this->db->update('customer',$data2)){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}

	function cekcustomer($nik){
		$query=$this->db->query("SELECT NIK FROM customer where nik = '".$nik."'");
		$jml=$query->num_rows();
		if($jml==0){
			echo "Tidak ada";
			return false;
		}
		else{
			echo "Ada";
			return true;
		}
	}

	// end of file
}

?>