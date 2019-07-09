<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller{
    public function index(){
        error_reporting(0);
        $this->load->model('produk');
        $this->load->model('cart');
        $this->load->model('user');
        $data['terbaru'] = $this->produk->GetTerbaru();
        $data['terlaris'] = $this->produk->GetTerlaris();
        $this->load->view('awal/head');
        $ceklogin = $this->session->userdata('islogin');
        $id = $this->encrypt->decode($this->session->userdata('user_id'));
        if($ceklogin == "1"){
            $data['numrow'] = $this->cart->GetChartNumRow($id);
            $data['cart'] = $this->cart->GetChartByUserId($id);
            $data['total'] = $this->cart->GetTotalHarga($id);
            $level = $this->user->GetLevelUser($id);
            foreach($level->result_array() as $row){
                $data['level'] = $row['level'];
            }

            $this->load->view('awal/navbar-2', $data);
        } else {
            $this->load->view('awal/navbar');
        }
        $this->load->view('awal/konten/awal', $data);
        $this->load->view('awal/footer');
        $this->load->view('awal/js');
    }
    public function addcart($id_produk){
        $ceklogin = $this->session->userdata('islogin');
        if($ceklogin == "1"){
            $id = $this->encrypt->decode($this->session->userdata('user_id'));
            $this->load->database();
            $data = array(
                'id_cart' => uniqid(),
                'id_user' => $id,
                'id_produk' => $id_produk
            );
            echo $id_produk;
            $this->db->insert('cart', $data);
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delcart($id_cart){
        $this->load->database();
        $this->db->delete('cart', array("id_cart" => $id_cart));
		redirect($_SERVER['HTTP_REFERER']);
    }

    public function viewproduk($id){
        $this->load->model('cart');
        $this->load->model('produk');
        $listproduk = $this->produk->GetProdukById($id);

        foreach ($listproduk as $row)
		{
				$data['id_produk'] = $row['id_produk'];
				$data['foto'] = $row['foto'];
                $data['nama'] = $row['nama'];
                $data['harga'] = $row['harga'];
				$data['deskripsi'] = $row['deskripsi'];
        }
        
        $id_user = $this->encrypt->decode($this->session->userdata('user_id'));
        $this->load->view('awal/head');
        $ceklogin = $this->session->userdata('islogin');
        if($ceklogin == "1"){
            $data['numrow'] = $this->cart->GetChartNumRow($id_user);
            $data['cart'] = $this->cart->GetChartByUserId($id_user);
            $data['total'] = $this->cart->GetTotalHarga($id_user);
            $this->load->model('user');
            $level = $this->user->GetLevelUser($id);
            foreach($level->result_array() as $row){
                $data['level'] = $row['level'];
            }
            $this->load->view('awal/navbar-2', $data);
        } else {
            $this->load->view('awal/navbar');
        }
        $this->load->view('awal/konten/view-produk', $data);
        $this->load->view('awal/footer');
        $this->load->view('awal/js');
    }

    public function allproduk(){
        error_reporting(0);
        $id = $this->encrypt->decode($this->session->userdata('user_id'));
        $this->load->model('produk');
        $this->load->model('cart');
        $data['produk'] = $this->produk->GetProduk();
        $this->load->view('awal/head');
        $ceklogin = $this->session->userdata('islogin');
        if($ceklogin == "1"){
            $data['numrow'] = $this->cart->GetChartNumRow($id);
            $data['cart'] = $this->cart->GetChartByUserId($id);
            $data['total'] = $this->cart->GetTotalHarga($id);
            $this->load->model('user');
            $level = $this->user->GetLevelUser($id);
            foreach($level->result_array() as $row){
                $data['level'] = $row['level'];
            }
            $this->load->view('awal/navbar-2', $data);
        } else {
            $this->load->view('awal/navbar');
        }
        $this->load->view('awal/konten/allproduk', $data);
        $this->load->view('awal/footer');
        $this->load->view('awal/js');
    }

    public function cariproduk(){

        $kategori = $this->input->post('kategori');
        $nama = $this->input->post('nama');
        $id = $this->encrypt->decode($this->session->userdata('user_id'));
        $this->load->model('produk');
        $this->load->model('cart');
        $data['produk'] = $this->produk->GetProdukByNama($nama, $kategori);
        $this->load->view('awal/head');
        $ceklogin = $this->session->userdata('islogin');
        if($ceklogin == "1"){
            $data['numrow'] = $this->cart->GetChartNumRow($id);
            $data['cart'] = $this->cart->GetChartByUserId($id);
            $data['total'] = $this->cart->GetTotalHarga($id);
            $this->load->model('user');
            $level = $this->user->GetLevelUser($id);
            foreach($level->result_array() as $row){
                $data['level'] = $row['level'];
            }
            $this->load->view('awal/navbar-2', $data);
        } else {
            $this->load->view('awal/navbar');
        }
        $this->load->view('awal/konten/allproduk', $data);
        $this->load->view('awal/footer');
        $this->load->view('awal/js');
    }

    public function showkategori($kategori){
        error_reporting(0);
        $id = $this->encrypt->decode($this->session->userdata('user_id'));
        $this->load->model('produk');
        $this->load->model('cart');
        $data['produk'] = $this->produk->GetProdukByKategori(str_replace('%20', ' ', $kategori));
        $this->load->view('awal/head');
        $ceklogin = $this->session->userdata('islogin');
        if($ceklogin == "1"){
            $data['numrow'] = $this->cart->GetChartNumRow($id);
            $data['cart'] = $this->cart->GetChartByUserId($id);
            $data['total'] = $this->cart->GetTotalHarga($id);
            $this->load->model('user');
            $level = $this->user->GetLevelUser($id);
            foreach($level->result_array() as $row){
                $data['level'] = $row['level'];
            }
            $this->load->view('awal/navbar-2', $data);
        } else {
            $this->load->view('awal/navbar');
        }
        $this->load->view('awal/konten/allproduk', $data);
        $this->load->view('awal/footer');
        $this->load->view('awal/js');
    }

    public function checkout(){
        error_reporting(0);
        $this->load->model('cart');
        $id = $this->encrypt->decode($this->session->userdata('user_id'));
        $data['numrow'] = $this->cart->GetChartNumRow($id);
        $data['cart'] = $this->cart->GetChartByUserId($id);
        $data['total'] = $this->cart->GetTotalHarga($id);
        $data['total'] = $this->cart->GetTotalHarga($id);
        $this->load->view('awal/head');
        $ceklogin = $this->session->userdata('islogin');
        if($ceklogin == "1"){
            $data['numrow'] = $this->cart->GetChartNumRow($id);
            $data['cart'] = $this->cart->GetChartByUserId($id);
            $data['total'] = $this->cart->GetTotalHarga($id);
            $this->load->model('user');
            $level = $this->user->GetLevelUser($id);
            foreach($level->result_array() as $row){
                $data['level'] = $row['level'];
            }
            $this->load->view('awal/navbar-2', $data);
        } else {
            $this->load->view('awal/navbar');
        }
        $this->load->view('awal/konten/checkout', $data);
        $this->load->view('awal/footer');
        $this->load->view('awal/js');
    }

    public function pendingbill(){
        error_reporting(0);
        $this->load->model('cart');
		$id = $this->encrypt->decode($this->session->userdata('user_id'));
		$id_pembayaran = uniqid();
        $data = array(
			'id_pembayaran' => $id_pembayaran,
            'total' => $this->cart->GetTotalHarga($id),
            'keterangan' => "Belum Lunas",
            'id_user' => $id,
		);
		$this->db->insert('pembayaran', $data);
		$query = $this->db->query("SELECT produk.id_produk, cart.id_cart from produk, cart, user WHERE produk.id_produk = cart.id_produk AND user.id_user = cart.id_user AND cart.id_user='$id'");
		foreach ($query->result_array() as $row)
		{
			$data = array(
				'id_antrian' => uniqid(),
				'id_produk' => $row['id_produk'],
                'id_pembayaran' => $id_pembayaran,
                'id_user' => $id
			);
			$this->db->insert('antrian', $data);
			$this->db->delete('cart', array("id_cart" => $row['id_cart']));
        }
        redirect(base_url('index.php/dashboard/konfirmasipesanan/').$id_pembayaran);
    }

    public function login(){
        error_reporting(0);
        $data['alert'] = $_SESSION['alert'];
        $data['pesan'] = $_SESSION['pesan'];
        unset($_SESSION['alert']);
        unset($_SESSION['pesan']);
        $this->load->view('login', $data);
    }

    public function registrasi(){
        error_reporting(0);
        $data['alert'] = $_SESSION['alert'];
        unset($_SESSION['alert']);
        unset($_SESSION['pesan']);
        $this->load->view('registrasi', $data);
    }

    public function checklogin(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('user');
        $cek = $this->user->CekUser($email, md5($password));
        $getuser = $this->user->GetUserIdUser($email, md5($password));

        if($cek > 0){
            foreach ($getuser->result() as $row)
            {
                    $id_user = $row->id_user;
                    $level = $row->level;
            }
            $key = $this->encrypt->encode($id_user);
            $this->session->set_userdata('islogin', "1");
            $this->session->set_userdata('user_id', $key);
            if($level == "Admin"){
                redirect(base_url('index.php/superuser'));
            } else {
                redirect(base_url());
            }

		}else{
            $_SESSION['alert'] = "error";
            $_SESSION['pesan'] = "Email / Password Salah";
            $this->session->set_userdata('alert', "error");
			redirect($_SERVER['HTTP_REFERER']);
		}
        
    }

    public function prosesregister(){
        $this->load->database();
		$data = array(
			'id_user' => uniqid(),
			'nama_user' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
            'level' => "User" 
		);
        $this->db->insert('user', $data);
        $_SESSION['alert'] = "reg";
		redirect(base_url('/index.php/awal/login'));
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

?>