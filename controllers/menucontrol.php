<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Menucontrol extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('menucontrol_model');
    }

    public function index()
    {
    	$data['title'] = 'Menu Control';
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['menu2'] = $this->db->get('user_menu2')->result_array();
        $data['menu3'] = $this->db->get('user_menu3')->result_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('headercontrol', $data);
		$this->load->view('menu', $data);
		$this->load->view('menucontrol_view', $data);
		$this->load->view('footer',$data);
    }

}