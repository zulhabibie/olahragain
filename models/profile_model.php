<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Profile_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function add()
    {
        $nama = $this->input->post('txtNama');
        $id = $this->input->post('txtId');
        $img = $this->input->post('txtImg');

        $sql = "SELECT * FROM user WHERE id ='$id'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE user
                    SET name = '$nama', image = '$img' 
                    WHERE id='$id'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
           if($this->db->simple_query("INSERT INTO produk_kita(kategori_cabe, nama_cabe, img, harga, stok)
                    VALUES ('$kategoriCabe', '$namaCabe', '$gambar', '$harga', '$stok')")){       
               $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil ditambahkan.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        }

        echo json_encode($data);
    }

}