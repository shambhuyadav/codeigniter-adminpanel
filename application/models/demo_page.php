<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name demo_page.php
 * @author shambhu
 */
  class Demo_page extends CI_Model {
    function __construct()
   {
        parent::__construct();
        $this->load->database();
    }

  function count_items()
   {
        
        $query = $this->db->count_all('detail');
        return $query;
    }

  function get_items($limit, $offset)
   {
      $data = array();
      $this->db->limit($limit, $offset);
      $Q = $this->db->get('detail');
      if($Q->num_rows() > 0){
          foreach ($Q->result_array() as $row){
              $data[] = $row;
          }
      }
      $Q->free_result();
      return $data;
    }
  function search_name($limit, $start, $st = NULL) 
    {
          if ($st == "NIL") $st = "";
        $sql = "select * from detail where name like '%$st%' limit " . $start . "," . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
  function delete_data($id)
    {
    $this->db->where('id', $id);
     $this->db->delete('detail'); 
    } 

  function show_detail(){
    $query = $this->db->get('detail');
    $query_result = $query->result();
    return $query_result;
    }


  function update($options,$id)
    {
    $this->db->where('id', $id);
    $this->db->update('detail',$options);
    return $this->db->affected_rows();
    }

  function update_retrive($userId)
    {
    $this->db->where('id',$this->input->post('id'));
    $this->db->from('detail');
    $q = $this->db->get();
    return $q->result();
    }
  function fetch_data($data)
  {
   $this->db->where('id',$data);
   $this->db->from('detail');
   $q = $this->db->get();
    return $result = $q->result();
  }
 


}