<?php
class Publications_model extends CI_Model{
		 public function __construct()
    {
        $this->load->database();
    }

	public function get_data(){
		$query = $this->db->get('publications');
		return $query->result_array();
	}
}
?>