<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Model{
    public function GetKonfirmasiNum(){
        $this->load->database();
        $data = $this->db->query("SELECT * FROM konfirmasi");
        return $data->num_rows();
    }

    public function GetKonfirmasi(){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM konfirmasi");
        return $query->result_array();
    }

    public function GetProduk($id){
        $this->load->database();
        $query = $this->db->query("SELECT id_produk FROM antrian WHERE id_pembayaran = '$id'");
        return $query->result_array();
    }

    public function GetIdPembayaran($id){
        $this->load->database();
        $query = $this->db->query("SELECT id_pembayaran FROM konfirmasi WHERE id_konfirmasi='$id'");
        return $query;
    }
}

?>