<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Home.php
 * @author shambhu
 */

class Ajax_model extends CI_Model
{
    public function __construct()
        {
                $this->load->database();
        }

    public function search(){
        $this->load->helper('url');
        $search = $this->uri->segment(3);       
        $this->db->select('name,message,phone,email');
        $search = str_replace('%20', " ", $search);
        $this->db->like('name', $search);
        return $this->db->get('detail');
    
        
    }

}

?>