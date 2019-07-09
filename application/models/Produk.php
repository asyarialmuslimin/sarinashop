<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Model{

    public function GetProduk(){
        $this->load->database();
        $data = $this->db->query("SELECT * FROM produk ORDER BY waktu_upload DESC");
        return $data->result_array();
    }

    public function GetProdukById($id){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM produk WHERE id_produk='$id'");
        return $query->result_array();
    }

    public function GetProdukByKategori($kategori){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM produk WHERE kategori='$kategori'");
        return $query->result_array();
    }

    public function GetProdukByNama($nama, $kategori){
        $this->load->database();
        if ($kategori == "") {
            $query = $this->db->query("SELECT * FROM produk WHERE nama LIKE '%$nama%'");
        }else{
            $query = $this->db->query("SELECT * FROM produk WHERE kategori='$kategori' AND nama LIKE '%$nama%'");
        }
        return $query->result_array();
    }

    public function GetTerbaru(){
        $this->load->database();
        $data = $this->db->query("SELECT * FROM produk ORDER BY waktu_upload DESC LIMIT 5");
        return $data->result_array();
    }
    
    public function GetTerlaris(){
        $this->load->database();
        $data = $this->db->query("SELECT * FROM produk ORDER BY terjual DESC LIMIT 5");
        return $data->result_array();
    }

    public function DeleteById($id){
        $q = $this->db->delete('produk')->where('id_user', $id);
    }

}

?>