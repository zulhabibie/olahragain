<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Controlkeluar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('controlkeluar_model');
    }

    public function index()
    {
        $data['datanamacabe'] = $this->controlkeluar_model->getData2();
    	$data['title'] = 'Data Cabe';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('headercontrol', $data);
        $this->load->view('menu', $data);
        $this->load->view('controlkeluar_view', $data);
        $this->load->view('footer',$data);
    }

    public function daftar_data()
    {
      echo $this->controlkeluar_model->getData();
    }
    
    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->controlkeluar_model->add();
    }
   
    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->controlkeluar_model->hapus();  
    }

}