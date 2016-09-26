<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name insert.php
 * @author shambhu
 */
class Insert extends CI_Controller
{

    function __construct() {
        parent::__construct();
    if(empty($this->session->userdata('id'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
    }

    public function newrecord() {
        $this->load->view('newrecord.php');
    } 
    public function insert_record()
    {
	    $this->load->helper(array('form', 'url'));	
	   	$this->load->library('form_validation');
	    $this->form_validation->set_rules('name','name', 'required');
	    $this->form_validation->set_rules('message','message', 'required');
	    $this->form_validation->set_rules('phone','phone', 'required');
	    $this->form_validation->set_rules('email','email', 'required');	
	     
	        if ($this->form_validation->run() == FALSE)
	            {
	                $this->load->view('newrecord');
	            }
	            else
	            {
                $data = array(
				'name' => $this->input->post('name'),
				'message' => $this->input->post('message'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email')
				); 
				     $this->load->model('newrecord');
			     $q = $this->newrecord->insert_record($data);
			    
			     if($q)	 
			     {
			     	redirect('home/tables');
			     }
			     else
			     {
			     	redirect('insert/newrecord');
			     }
			    }  
    }
  //    
   

}
