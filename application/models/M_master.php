<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model {

	public function master_produk(){
		$this->db->select("a.id,a.nama_produk,b.tipe");
		$this->db->from("master_produk a");
		$this->db->join("master_tipe_produk b","a.id_tipe=b.id");
		return $this->db->get()->result();
	}

}

/* End of file M_master.php */


?>
