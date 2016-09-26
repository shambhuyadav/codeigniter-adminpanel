<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name delete_data.php
 * @author shambhu
 */
class Delete_data extends CI_Controller
{

    
public function delete($id) {

        $this->load->model('demo_page');
        $this->demo_page->delete_data($id);
        redirect($_SERVER['HTTP_REFERER']);  

      }

public function update()
{
$id = $this->uri->segment(3);	
$data= array(
	'id' => $id );
$this->load->helper('url');
$id = $this->uri->segment(3);	
$this->load->model("demo_page");
$data['result'] = $this->demo_page->fetch_data($id);
$this->load->view('edit.php',$data);
// $this->load->view('edit.php',$data);	

}    
  function updated()
  {
  	$options = array(
	'id'    =>$this->input->post('id'),
	'name' => $this->input->post('name'),
	'message' => $this->input->post('message'),
	'phone' => $this->input->post('phone'),
	'email' => $this->input->post('email')
	);
	$id = $this->input->post('id');
	$this->load->model("demo_page");
    $affected = $this->demo_page->update($options,$id);
   if ($affected) redirect('/home/tables/', 'location'); 
	
  }
}
