<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Model{
    public function GetOrder(){
        $this->load->database();
        $data = $this->db->query("SELECT pembayaran.id_pembayaran, pembayaran.total, pembayaran.keterangan, pembayaran.tanggal, user.nama_user FROM pembayaran, user WHERE pembayaran.id_user = user.id_user");
        return $data->result_array();
    }
    public function GetAntrian($id){
        $this->load->database();
        $data = $this->db->query("SELECT antrian.id_antrian, produk.nama, pembayaran.keterangan, user.nama_user, pembayaran.tanggal FROM antrian, produk, pembayaran, user WHERE antrian.id_produk = produk.id_produk AND antrian.id_pembayaran = pembayaran.id_pembayaran AND antrian.id_user = user.id_user AND antrian.id_produk = produk.id_produk AND antrian.id_pembayaran = '$id'");
        return $data->result_array();
    }
    
    public function GetPembayaran($id)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM `pembayaran` where id_user='$id'");
        return $query->result_array();
    }

    public function GetIdPembayaran($id)
    {
        $this->load->database();
        $query = $this->db->query("SELECT id_pembayaran FROM `pembayaran` where id_user='$id'");
        return $query->result_array();
    }

    public function GetListPesanan($id)
    {
        $this->load->database();
        $query = $this->db->query("SELECT produk.nama, produk.foto, produk.harga FROM produk, antrian WHERE antrian.id_produk = produk.id_produk AND antrian.id_pembayaran='$id'");
        return $query->result_array();
    }

    public function GetTotal($id_user, $id_pembayaran){
        $total = 0;
        $this->load->database();
        $query = $this->db->query("SELECT * FROM pembayaran where id_user='$id_user' AND id_pembayaran='$id_pembayaran'");
        foreach ($query->result_array() as $row);
		{
			$total = $total + intval($row['total']);
		}
		return $total;
    }

    public function GetIdUser($id_pembayaran){
        $this->load->database();
        $query = $this->db->query("SELECT id_user FROM pembayaran WHERE id_pembayaran = '$id_pembayaran'");
        return $query->result_array();
    }

    public function GetPengiriman($id){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM pengiriman WHERE id_user ='$id'");
        return $query->result_array();
    }
}

?>