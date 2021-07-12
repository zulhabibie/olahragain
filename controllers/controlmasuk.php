<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Controlmasuk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('controlmasuk_model');
    }

    public function index()
    {
        $data['datanamacabe'] = $this->controlmasuk_model->getData2();
    	$data['title'] = 'Data Cabe';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('headercontrol', $data);
        $this->load->view('menu', $data);
        $this->load->view('controlmasuk_view', $data);
        $this->load->view('footer',$data);
    }

    public function daftar_data()
    {
      echo $this->controlmasuk_model->getData();
    }
    
    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->controlmasuk_model->add();
    }
   
    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->controlmasuk_model->hapus();  
    }

}