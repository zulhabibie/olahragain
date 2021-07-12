<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Databuku extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('databuku_model');
        
    }

    public function index()
    {
    	$data['title'] = 'Data Cabe';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('userpage/headerAdmin', $data);
		$this->load->view('menu', $data);
		$this->load->view('databuku_view', $data);
		$this->load->view('footer',$data);
    }

    public function daftar_data()
    {
      echo $this->databuku_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->databuku_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->databuku_model->hapus();  
    }

}