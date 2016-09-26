<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name my_model.php
 * @author shambhu
 */
class My_model extends CI_Model {
 function __construct() {
        parent::__construct();
        $this->load->database();
    }
	function get_people() {

		 static $query;
		$this->db->select('id, name');
		$query = $this->db->get('detail');
		#If you don't want to use acrtive record then you can write your own querys aswell
		#example: $query = $this->db->query('SELECT id, name FROM people');
 
		if($query->num_rows() > 0) return $query->result();
		else return FALSE;
	}
 
}