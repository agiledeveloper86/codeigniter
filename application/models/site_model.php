<?php
class Site_model extends CI_Model{
	public function getAll() {
		$q = $this->db->get('test');
		
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
		return $data;
		}
	}
}