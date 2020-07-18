<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	function get_data($table){
		return $this->db->get($table);
		}
	   
		function insert_data($data,$table){
		$this->db->insert($table,$data);
		return $this->db->affected_rows();
		}
		
		function find($where,$table){
		return $this->db->get_where($table,$where);
		
		}
	   
		function delete_data($where,$table){
		$this->db->delete($table,$where);
		return $this->db->affected_rows();
		}
	   
		function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
		return $this->db->affected_rows();
		}

}

/* End of file M_crud.php */



?>
