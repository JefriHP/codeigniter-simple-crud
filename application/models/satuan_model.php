<?php
class satuan_model extends CI_Model{
	public function GetAllData(){
		$query = $this->db->get('t_satuan');
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return FALSE;
		}
	}
}