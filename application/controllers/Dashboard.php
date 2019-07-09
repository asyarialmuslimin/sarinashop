<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function index(){
        error_reporting(0);
        $id = $this->encrypt->decode($this->session->userdata('user_id'));
        $this->load->model('user');
        $getuser = $this->user->GetById($id);

        foreach ($getuser->result() as $row)
		{
				$data['id_user'] = $row->id_user;
				$data['nama'] = $row->nama_user;
				$data['alamat'] = $row->alamat;
				$data['telepon'] = $row->telepon;
				$data['email'] = $row->email;
		}

        $this->load->view("userdashboard/head");
        $this->load->view("userdashboard/navbar");
        $this->load->view("userdashboard/sidebar");
        $this->load->view("userdashboard/konten/editprofil", $data);
        $this->load->view("userdashboard/footer");
        $this->load->view("userdashboard/scrolltop");
        $this->load->view("userdashboard/modal");
        $this->load->view("userdashboard/js");
    }

    public function edituser(){
        $id = $this->input->post('id_user');
        $this->load->database();
		if($this->input->post('password') == null){
			$data = array(
				'nama_user' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon'),
				'email' => $this->input->post('email'),
			);
		}else{
			$data = array(
				'nama_user' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')));	
		}
		$this->db->update('user', $data, array('id_user' => $id));
		redirect($_SERVER['HTTP_REFERER']);
    }

    public function daftarpesanan(){
        error_reporting(0);
        $this->load->model('order');
        $id = $this->encrypt->decode($this->session->userdata('user_id'));
        $data['pembayaran'] = $this->order->GetPembayaran($id);

        $this->load->view("userdashboard/head");
        $this->load->view("userdashboard/navbar");
        $this->load->view("userdashboard/sidebar");
        $this->load->view("userdashboard/konten/listpesanan", $data);
        $this->load->view("userdashboard/footer");
        $this->load->view("userdashboard/scrolltop");
        $this->load->view("userdashboard/modal");
        $this->load->view("userdashboard/js");
    }

    public function listkonfirmasi(){
        error_reporting(0);
        $this->load->database();
        $id = $this->encrypt->decode($this->session->userdata('user_id'));
        $query = $this->db->query("SELECT * FROM pembayaran WHERE id_user='$id' AND keterangan='Belum Lunas'");
        $data['konfirmasi'] = $query->result_array();
        $this->load->view("userdashboard/head");
        $this->load->view("userdashboard/navbar");
        $this->load->view("userdashboard/sidebar");
        $this->load->view("userdashboard/konten/listkonfirmasi", $data);
        $this->load->view("userdashboard/footer");
        $this->load->view("userdashboard/scrolltop");
        $this->load->view("userdashboard/modal");
        $this->load->view("userdashboard/js");
    }

    public function konfirmasipesanan($id_pesanan){
        error_reporting(0);
        $id = $this->encrypt->decode($this->session->userdata('user_id'));
        $this->load->model('order');
        $data['total'] = $this->order->GetTotal($id, $id_pesanan);
        $data['id_pembayaran'] = $id_pesanan;

        $this->load->view("userdashboard/head");
        $this->load->view("userdashboard/navbar");
        $this->load->view("userdashboard/sidebar");
        $this->load->view("userdashboard/konten/konfirmasi", $data);
        $this->load->view("userdashboard/footer");
        $this->load->view("userdashboard/scrolltop");
        $this->load->view("userdashboard/modal");
        $this->load->view("userdashboard/js");
    }

    public function konfirmasipending(){
        $this->load->database();
        $data = array(
            'id_konfirmasi' => $this->input->post('id_konfirmasi'),
            'rekening' => $this->input->post('bank'),
            'norek' => $this->input->post('norek'),
            'nama_rekening' => $this->input->post('nama'),
            'id_pembayaran' => $this->input->post('id_pembayaran'),
        );
        $this->db->insert('konfirmasi', $data);

        $data2 = array(
            'keterangan' => "Menunggu Konfirmasi"
        );
        $this->db->update('pembayaran', $data2, array('id_pembayaran' => $this->input->post('id_pembayaran')));
        redirect(base_url('index.php/dashboard/daftarpesanan'));
    }

    public function daftarorder($id_pembayaran){
        $this->load->model('order');
        $data['produk'] = $this->order->GetListPesanan($id_pembayaran);

        $this->load->view("userdashboard/head");
        $this->load->view("userdashboard/navbar");
        $this->load->view("userdashboard/sidebar");
        $this->load->view("userdashboard/konten/daftarorder", $data);
        $this->load->view("userdashboard/footer");
        $this->load->view("userdashboard/scrolltop");
        $this->load->view("userdashboard/modal");
        $this->load->view("userdashboard/js");
    }

    public function listpengiriman(){
        error_reporting(0);
        $id = $this->encrypt->decode($this->session->userdata('user_id'));
        $this->load->model('order');
        $data['pengiriman'] = $this->order->GetPengiriman($id);
        $this->load->view("userdashboard/head");
        $this->load->view("userdashboard/navbar");
        $this->load->view("userdashboard/sidebar");
        $this->load->view("userdashboard/konten/listpengiriman", $data);
        $this->load->view("userdashboard/footer");
        $this->load->view("userdashboard/scrolltop");
        $this->load->view("userdashboard/modal");
        $this->load->view("userdashboard/js");
    }
}

?>