<?php 
/**
 * 
 */
 Class Mahasiswa_model extends CI_model
{
	
	public function getAllMahasiwa(){

		return $this->db->get('mahasiswa')->result_array();

	}
}

 ?>