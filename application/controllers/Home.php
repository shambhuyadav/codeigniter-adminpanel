<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Home.php
 * @author shambhu
 */
class Home extends CI_Controller
{

    function __construct() {
        parent::__construct();
    if(empty($this->session->userdata('id'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
    }
    public function index() {

        $this->load->view('home');
      }
    public function logout() {
        $data = ['id', 'username'];
        $this->session->unset_userdata($data);

        redirect('login');
      }   
    public function blank()
      {
        $this->load->view('blank');
      }

    public function flot()
      {
        $this->load->view('flot');
      }  

    public function forms()
      {
        $data ='active';
        $this->load->view('forms',$data);
      }
       public function tables($sortfield='id',$order='asc')
    {

        $this->load->library('pagination');
        $this->load->library('table');
        $this->load->model('demo_page');
        // pagination settings
        $config['base_url'] = base_url() . 'index.php/home/tables/';
        $config['total_rows'] = $this->demo_page->count_items();
        $config['per_page'] = "4";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);
        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '«';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '»';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config); 
        $this->db->order_by("id", "desc"); 
        $this->db->get('detail');      
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;        
       

        $data['name'] = $this->demo_page->search_name($config["per_page"], $data['page'], NULL);        
        $data['pagination'] = $this->pagination->create_links();        
        // load view
        $this->load->view('tables',$data);
    }
    
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

      echo" <table class='table table-striped table-bordered table-hover'>
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
       </table>";

    }
    }


   }
    public function panels()
      {
        $this->load->view('panels');
      }  
    public function buttons()
      {
        $this->load->view('buttons');
      }  
    public function notification()
      {
        $this->load->view('notifications');
      }  
    public function typography()
      {
        $this->load->view('typography');
      }  
    public function icons()
      {
        $this->load->view('icons');
      }  
    public function grid()
      {
        $this->load->view('grid');
      }  
}
