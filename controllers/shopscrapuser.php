<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Shopscrapuser extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('shopscrap_model');
    }

	public function index()
	{	
		$this->load->view('userpage/headeruserWithUser');
      	$this->load->view('shopscrap_view');
      	$this->load->view('userpage/footeruser');
	}

}