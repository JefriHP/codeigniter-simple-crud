<?php
class barang_model extends CI_Model{
	public function GetAllData(){
		$query = $this->db->get('t_barang');
		return ($query->num_rows() > 0) ? $query->result_array() : FALSE; // Sangat Baik
		//return ($query->num_rows() > 0) ? FALSE : $query->result_array(); // Sangat Baik
	}

	function insert($data) {
		$this->db->insert('t_barang',$data);
		//cek jika ada perubahan data? return: TRUE/FALSE
		return $this->db->affected_rows() > 0; 

	}

	public function update($data,$keyData){
		//Misal diperlukan tambahan input data:
		// $data['UpdateDate']= date('Y-m-d H:i:s');
		// $data['UpdateBy']= 'Ramsdale';       
		// $this->db->where('ID', $this->input->post('ID'));
        // $this->db->update('t_barang', $data);

		$this->db->set($data);
		$this->db->where('ID', $keyData);
		$this->db->update('t_barang');
		return $this->db->affected_rows() > 0; 
    }

	function deleteByID($data) {
		$this->db->delete('t_barang',$data);
		//cek jika ada perubahan data? return: TRUE/FALSE
		return $this->db->affected_rows() > 0; 
	}

	public function getByID($id = null){

		$this->db->select();
		$this->db->from('t_barang');
		if ($id != null) {
			$this->db->where('ID', $id);
		}
		$this->db->order_by('ID', 'ASC');
		$query = $this->db->get()->row_array();
		return $query;

		//row_array() returns a single result 
		//result_array() returns multiple results (usually for use in a loop)

		//contoh join
		// $this->db->select('p_item.*, p_item.stock,  p_category.name as name_category, p_unit.name as name_unit');
        // $this->db->from('p_item');
        // $this->db->join('p_category', 'p_item.category_id = p_category.category_id');
        // $this->db->join('p_unit', 'p_item.unit_id = p_unit.unit_id');
        // if ($id != null) {
        //     $this->db->where('item_id', $id);
        // }
        // $this->db->order_by('barcode', 'ASC');
        // $query = $this->db->get();
        // return $query;
    }
}