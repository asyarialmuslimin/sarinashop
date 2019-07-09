<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Model{
    public function GetChartNumRow($id){
        $this->load->database();
        $data = $this->db->query("SELECT * FROM cart WHERE id_user='$id'");
        return $data->num_rows();
    }

    public function GetChartByUserId($id){
        $this->load->database();
        $query = $this->db->query("SELECT cart.id_cart, produk.nama, produk.foto, produk.harga, cart.id_user from produk, cart, user WHERE produk.id_produk = cart.id_produk AND user.id_user = cart.id_user AND cart.id_user='$id'");
        return $query->result_array();
    }

    public function GetTotalHarga($id_user){
		$total = 0;
        $this->load->database();
        $query = $this->db->query("SELECT cart.id_cart, produk.nama, produk.foto, produk.harga, cart.id_user from produk, cart, user WHERE produk.id_produk = cart.id_produk AND user.id_user = cart.id_user AND cart.id_user='$id_user'");
        foreach ($query->result_array() as $row)
		{
			$total = $total + intval($row['harga']);
		}
		return $total;
    }
}

?>