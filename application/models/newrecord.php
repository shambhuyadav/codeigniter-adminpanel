<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name newrecord.php
 * @author shambhu
 */
class Newrecord extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_record($data) {
      $q =$this->db->insert('detail', $data);  

       if(!$q)
       {
        return 0;
       }
       else
       {
       return 1;
       }
     }
}
