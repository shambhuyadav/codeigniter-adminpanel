<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name ajax.php
 * @author shambhu
 */
class Ajax extends CI_Controller 
{
        public function __construct()
        {
                parent::__construct();
                $this->load->model('ajax_model');
                //$this->load->helper('url_helper');
        }

        public function form ()
        {
            $data['title'] = 'Ajax search';

            $this->load->view('tables');
        }


        // function ends

    public function getdata($search = '')
   {
      // Get data from db 
    
    
    $this->load->model('ajax_model');
   
    $abc = $this->ajax_model->search();

    if(empty($search) || empty($abc->result()))
    {
        echo 'No Result Found';
    }
    else
    {
        foreach ($abc->result() as $row)
    { 
        <table style="color:red">
      echo  " 
           <tr>
               <th>name</th>               
               <th>Message</th>               
               <th>phone</th>              
               <th>email</th>
           </tr>
           <tr>
               <td>  $row->name </td>
               <td>  $row->message </td>
               <td>  $row->phone </td>
               <td>  $row->email </td>
           </tr>
       ";
       </table>

    }
    }


   }

}

?>