<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Statcontrol extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('statcontrol_model');
    }

    public function index()
    {
    	$data['title'] = 'Data Cabe';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('header', $data);
		$this->load->view('statcontrol_view', $data);
		$this->load->view('footer',$data);
    }

    public function daftar_data()
    {
      echo $this->statcontrol_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->statcontrol_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->statcontrol_model->hapus();  
    }

    public function daftar_data2()
    {
      echo $this->statcontrol_model->getData2();
    }

    public function add2()
    {
      if (!isset($_POST))
        show_404();
        
        $this->statcontrol_model->add2();
    }

    public function hapus2()
    {
        if (!isset($_POST))
        show_404();
        $this->statcontrol_model->hapus2();  
    }

    public function daftar_data3()
    {
      echo $this->statcontrol_model->getData3();
    }

    public function add3()
    {
      if (!isset($_POST))
        show_404();
        
        $this->statcontrol_model->add3();
    }

    public function hapus3()
    {
        if (!isset($_POST))
        show_404();
        $this->statcontrol_model->hapus3();  
    }

    public function daftar_data4()
    {
      echo $this->statcontrol_model->getData4();
    }

    public function add4()
    {
      if (!isset($_POST))
        show_404();
        
        $this->statcontrol_model->add4();
    }

    public function hapus4()
    {
        if (!isset($_POST))
        show_404();
        $this->statcontrol_model->hapus4();  
    }

}