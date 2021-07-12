<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Bukutamu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('bukutamu_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('header', $data);
        $this->load->view('bukutamu_view', $data);
        $this->load->view('footer',$data);
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->bukutamu_model->add();
    }

}