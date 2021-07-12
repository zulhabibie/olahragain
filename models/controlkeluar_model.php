<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Controlkeluar_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $produk_keluar = $this->db->query("SELECT * from produk_keluar");
        
        foreach($produk_keluar->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'>Edit</i></span></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'>Hapus</i></span></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->tanggal;
            $row[] = $rowa->kategori_cabe;
            $row[] = $rowa->nama_cabe;
            $row[] = $rowa->jumlah_keluar;
            $row[] = $rowa->keterangan;
            $row[] = $akses;
            $row[] = $rowa->id_keluar;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $tanggal = $this->input->post('txtDate');
        $kategoriCabeKeluar = $this->input->post('txtKategoriCabeKeluar');
        $namaCabeKeluar = $this->input->post('txtNamaCabeKeluar');
        $jumlahKeluar = $this->input->post('txtJumlahKeluar');
        $keterangan = $this->input->post('txtKeterangan');
        $idCabeKeluar = $this->input->post('txtKodeKeluar');

        $sql = "SELECT * FROM produk_keluar WHERE id_keluar ='$idCabeKeluar'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE produk_keluar
                    SET tanggal = '$tanggal', kategori_cabe = '$kategoriCabeKeluar' , nama_cabe = '$namaCabeKeluar', jumlah_keluar = '$jumlahKeluar', keterangan = '$keterangan'
                    WHERE id_keluar='$idCabeKeluar'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if($this->db->simple_query("INSERT INTO produk_keluar(tanggal, kategori_cabe, nama_cabe, jumlah_keluar, keterangan)
                    VALUES ('$tanggal', '$kategoriCabeKeluar', '$namaCabeKeluar', '$jumlahKeluar', '$keterangan')")){       
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

    public function hapus()
    {
        $idCabeKeluar = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM produk_keluar WHERE id_keluar = '$idCabeKeluar'")){       
                $data['msg'][0] = "hapus";
                $data['msg'][1] = "Data berhasil dihapus.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        echo json_encode($data);
    }

    public function getData2()
    {
        $query = $this->db->query("SELECT * FROM produk_kita ORDER BY nama_cabe ASC");

        return $query->result();
    }

}