<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Shopuser_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function show_data(){
    	return $this->db->get_where("produk_kita", array(
    		'kategori_cabe' => 'cabe_merah'));
    }

    public function show_data2(){
    	return $this->db->get_where("produk_kita", array(
    		'kategori_cabe' => 'cabe_ijo'));
    }

    public function show_data3(){
    	return $this->db->get_where("produk_kita", array(
    		'kategori_cabe' => 'cabe_pedes'));
    }

    public function show_data4(){
    	return $this->db->get_where("produk_kita", array(
    		'kategori_cabe' => 'cabe_lain'));
    }

    public function detail_produk($kode_cabe)
    {
       $result = $this->db->where('kode_cabe',$kode_cabe)->get('produk_kita');
       if($result->num_rows() > 0){
           return $result->result();
       }else{
           return false;
       }
    }

}