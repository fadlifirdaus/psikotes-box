<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_admin extends CI_Model
{
	// public function getuSer(){
	// 	$query	= "SELECT `user`.*, `user_role`.`role`
	// 			   FROM `user` JOIN `user_role`
	// 			   ON `user`.`id` = `user_role`.`id`";
				   
	// 	return $this->db->query($query)->result_array();
	// }

	public function tampil_data(){
		return $this->db->get('user');
	}

	public function tampil($limit, $start, $keyword = null){
		if ($keyword) {
			$this->db->like('name', $keyword);
			$this->db->or_like('email', $keyword);
		}
		return $this->db->get('user', $limit, $start)->result_array();
	}

	public function countAll(){
		return $this->db->get('user')->num_rows();
	}

	public function input_data($data,$table){
	//public function input_data($data,$table);

		$this->db->insert($table, $data);
		// $this->db->insert('user', $data);
	}

	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where, $table){
		return $this->db->get_where($table,$where);
		
	}

	public function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function detail_data($id = null){
			$query = $this->db->get_where('user', array('id' => $id))->row();
			return $query;
	}

	public function get_keyword(){
			$this->db->select('*');
			$this->db->from('user');
			// $this->db->like('name', $keyword);
			// $this->db->or_like('email', $keyword);
			// $this->db->or_like('role_id', $keyword);
			// $this->db->or_like('is_active', $keyword);
			// $this->db->or_like('date_created', $keyword);

			// return $this->db->get()->result();

		if ($keyword) {
			$this->db->like('name', $keyword);
		}

		return $this->db->get()->result_array();
	}
}
?>