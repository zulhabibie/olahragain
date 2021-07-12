<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Keranjang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('keranjang_model');
    }

    public function index()
    {
    	$data['title'] = 'Data Pemesanan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('header', $data);
		$this->load->view('keranjang_view', $data);
		$this->load->view('footer',$data);
    }

    public function daftar_data()
    {
      echo $this->keranjang_model->getData();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->keranjang_model->hapus();  
    }

    public function daftar_data2()
    {
      echo $this->keranjang_model->getData2();
    }

    public function hapus2()
    {
        if (!isset($_POST))
        show_404();
        $this->keranjang_model->hapus2();  
    }

    public function daftar_data3()
    {
      echo $this->keranjang_model->getData3();
    }

     public function add3()
    {
      if (!isset($_POST))
        show_404();
        
        $this->keranjang_model->add3();
    }

    public function daftar_data4()
    {
      echo $this->keranjang_model->getData4();
    }

}