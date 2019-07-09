<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superuser extends CI_Controller{

    public function index(){

        error_reporting(0);
        $id = $this->encrypt->decode($this->session->userdata('user_id'));
        $ceklogin = $this->session->userdata('islogin');
        $this->load->model('user');
        $cek = $this->user->GetLevelUser($id);
        foreach ($cek->result() as $row)
            {
                    $level = $row->level;
            }

        if($ceklogin == "1" && $level == "Admin"){
            $this->load->view("adminuser/head.php");
            $this->load->view("adminuser/navbar.php");
            $this->load->view("adminuser/sidebar.php");
            $this->load->view("adminuser/beranda.php");
            $this->load->view("adminuser/footer.php");
            $this->load->view("adminuser/scrolltop.php");
            $this->load->view("adminuser/modal.php");
            $this->load->view("adminuser/js.php");
        }else{
            redirect(base_url());
        }
    }

    public function user(){
        error_reporting(0);
        $this->load->model('user');
        $data['user'] = $this->user->GetUser();
        $data['alert'] = $_SESSION['alert'];
        unset($_SESSION['alert']);
        $this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/user/showall.php", $data);
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }

    public function tambahuser(){
        $this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/user/adduser.php");
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }

    public function adduser(){
		$this->load->database();
		$data = array(
			'id_user' => uniqid(),
			'nama_user' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level') 
		);
        $this->db->insert('user', $data);
        $_SESSION['alert'] = "add";
		redirect(base_url('/index.php/superuser/user'));
	}

    public function showuser($id)
	{
		$this->load->database();
		$query = $this->db->select('*')->from('user')->where('id_user',$id)->get();

		foreach ($query->result() as $row)
		{
				$data['id_user'] = $row->id_user;
				$data['nama'] = $row->nama_user;
				$data['alamat'] = $row->alamat;
				$data['telepon'] = $row->telepon;
				$data['email'] = $row->email;
		}

		$this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/user/edituser.php", $data);
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }
    
    public function edituser(){
        $this->load->database();
        $id = $this->input->post('id_user');
		if($this->input->post('password') == null && $this->input->post('level') == ""){
			$data = array(
                'id_user' => $id,
				'nama_user' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon'),
				'email' => $this->input->post('email'),
			);
		}elseif($this->input->post('password') == null){
			$data = array(
                'id_user' => $id,
				'nama_user' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon'),
				'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'level' => $this->input->post('level')
            );	
		}elseif($this->input->post('level') == ""){
            $data = array(
                'id_user' => $id,
				'nama_user' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon'),
				'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')) 
            );
        }else{
            $data = array(
            'id_user' => $id,
            'nama_user' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level')
            );
        }
        $this->db->update('user', $data, array('id_user' => $id));
        $_SESSION['alert'] = "edit";
		redirect(base_url('/index.php/superuser/user'));
    }

    public function deleteuser($id){
		$this->load->database();
        $this->db->delete('user', array("id_user" => $id));
        $_SESSION['alert'] = "hapus";
		redirect(base_url('/index.php/superuser/user'));
    }
    
    public function produk(){
		$this->load->model('produk');
        $data['produk'] = $this->produk->GetProduk();
        error_reporting(0);
        $data['alert'] = $_SESSION['alert'];
        unset($_SESSION['alert']);

        $this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/produk/showall.php", $data);
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }
    
    public function addproduk(){
        $this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/produk/addproduk.php");
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }

    public function newproduk(){

        $gambar = "default.jpg";
		$config['upload_path']          = './upload/gambar_produk/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->input->post('id_produk');
		$config['overwrite']			= true;
		$config['max_size']             = 1024;
        
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = $this->upload->display_errors();
            print_r($error);
        } else {
			$gambar = $this->upload->data("file_name");
			echo $gambar;
        }

		$this->load->model('produk');
		$this->load->database();
		$data = array(
			'id_produk' => $this->input->post('id_produk'),
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
            'deskripsi' => $this->input->post('deskripsi'),
            'diskon' => $this->input->post('diskon'),
			'stok' => $this->input->post('stok'),
			'kategori' => $this->input->post('kategori'),
			'terjual' => 0,
			'foto' => $gambar,
			'waktu_upload' => null
		);
        $this->db->insert('produk', $data);
        $_SESSION['alert'] = "add";
		redirect(base_url('/index.php/superuser/produk'));
    }
    
    public function showproduk($id)
	{
		$this->load->database();
		$query = $this->db->select('*')->from('produk')->where('id_produk',$id)->get();

		foreach ($query->result() as $row)
		{
				$data['id_produk'] = $row->id_produk;
				$data['nama'] = $row->nama;
				$data['harga'] = $row->harga;
				$data['deskripsi'] = $row->deskripsi;
				$data['diskon'] = $row->diskon;
				$data['stok'] = $row->stok;
				$data['kategori'] = $row->kategori;
				$data['foto'] = $row->foto;
		}

		$this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/produk/editproduk.php", $data);
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }
    
    public function updateproduk(){
        $id = $this->input->post('id_produk');
		$this->load->database();
		if (!empty($_FILES["image"]["name"])) {

			$gambar = "default.jpg";
			$config['upload_path']          = './upload/gambar_produk/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']            = $id;
			$config['overwrite']			= true;
			$config['max_size']             = 1024; // 1MB
			// load library upload
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				print_r($error);
			} else {
				$image = $this->upload->data("file_name");
				echo $image;
			}

		} else {
			$image = $this->input->post('old_image');
			echo $image;
        }
        
        if($this->input->post("kategori") == null){
            $data = array(
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'diskon' => $this->input->post('diskon'),
                'stok' => $this->input->post('stok'),
                'foto' => $image
            );
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'diskon' => $this->input->post('diskon'),
                'stok' => $this->input->post('stok'),
                'kategori' => $this->input->post('kategori'),
                'foto' => $image
            );
        }

        $this->db->update('produk', $data, array('id_produk' => $id));
        $_SESSION['alert'] = "edit";
		redirect(base_url('/index.php/superuser/produk'));
    }
    
    public function deleteproduk($id){
		$this->load->database();
		$this->deleteImage($id);
        $this->db->delete('produk', array("id_produk" => $id));
        $_SESSION['alert'] = "hapus";
		redirect(base_url('/index.php/superuser/produk'));
    }
    

    private function deleteImage($id)
	{
        $this->load->model('produk');
		$product = $this->produk->GetProdukById($id);
		if ($product->foto != "default.jpg") {
			$filename = explode(".", $product->foto)[0];
			return array_map('unlink', glob(FCPATH."upload/gambar_produk/$filename.*"));
		}
    }

    public function order(){
        
        $this->load->model('order');
        $data['order'] = $this->order->GetOrder();

        $this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/order/order.php", $data);
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }

    public function deleteorder($id){
        $this->load->database();
		$this->db->delete('pembayaran', array("id_pembayaran" => $id));
		redirect($_SERVER['HTTP_REFERER']);
    }

    public function antrian($id){
        
        $this->load->model('order');
        $data['order'] = $this->order->GetAntrian($id);

        $this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/order/antrian.php", $data);
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }

    public function deleteantrian($id){
        $this->load->database();
		$this->db->delete('antrian', array("id_antrian" => $id));
		redirect($_SERVER['HTTP_REFERER']);
    }

    public function konfirmasi(){
        $this->load->model('konfirmasi');
        $data['konfirmasi'] = $this->konfirmasi->GetKonfirmasi();
        error_reporting(0);
        $data['alert'] = $_SESSION['alert'];
        unset($_SESSION['alert']);

        $this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/konfirmasi/listkonfirmasi.php", $data);
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }

    public function billkonfirmasi($id){
        $this->load->model('konfirmasi');
        $getidpembayaran = $this->konfirmasi->GetIdPembayaran($id);

		foreach ($getidpembayaran->result_array() as $row)
		{
				$id_pembayaran = $row['id_pembayaran'];
        }

        $getidproduk = $this->konfirmasi->GetProduk($id_pembayaran);

        foreach($getidproduk as $row){
            $id_produk = $row['id_produk'];
            $query = $this->db->query("SELECT stok, terjual FROM produk WHERE id_produk = '$id_produk'");
            foreach($query->result_array() as $row){
                $stok = intval($row['stok']);
                $stok = $stok - 1;

                $terjual = intval($row['terjual']);
                $terjual = $terjual + 1;

                $this->db->query("UPDATE `produk` SET `stok` = '$stok', `terjual` = '$terjual' WHERE `produk`.`id_produk` = '$id_produk'");
            }
        }
        
        $this->db->query("UPDATE pembayaran SET keterangan = 'Lunas' WHERE pembayaran.id_pembayaran = '$id_pembayaran'");
        $this->db->delete('konfirmasi', array("id_konfirmasi" => $id));
        $_SESSION['alert'] = "terbayar";
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function pengiriman(){
        error_reporting(0);
        $this->load->database();
        $query = $this->db->query("SELECT id_pembayaran FROM `pembayaran` where keterangan='Lunas'");
        $data['id_pembayaran'] = $query->result_array();
        $data['alert'] = $_SESSION['alert'];
        unset($_SESSION['alert']);
        $this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/konfirmasi/pengiriman.php", $data);
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }

    public function kirimpesanan(){
        $this->load->database();
        if($this->input->post('ekspedisi') == "" || $this->input->post('id_pembayaran') == ""){
            $_SESSION['alert'] = "error";
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->load->model('order');
            $getid = $this->order->GetIdUser($this->input->post('id_pembayaran'));

            foreach($getid as $row){
                $id_user = $row['id_user'];
            }

            $data = array(
                'id_pengiriman' => uniqid(),
                'nama_ekspedisi' => $this->input->post('ekspedisi'),
                'resi' => $this->input->post('resi'),
                'id_pembayaran' => $this->input->post('id_pembayaran'),
                'id_user' => $id_user
            );
            $this->db->insert('pengiriman', $data);
            $_SESSION['alert'] = "add";
            redirect(base_url('index.php/superuser/listpengiriman'));
        }
    }

    public function listpengiriman(){
        error_reporting(0);
        $this->load->database();
        $data['pengiriman'] = $this->db->query("SELECT * FROM pengiriman")->result_array();
        $data['alert'] = $_SESSION['alert'];
        unset($_SESSION['alert']);
        $this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/konfirmasi/listpengiriman.php", $data);
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }

    public function editpengiriman($id){
        error_reporting(0);
        $this->load->database();
        $query = $this->db->select('*')->from('pengiriman')->where('id_pengiriman',$id)->get();

		foreach ($query->result() as $row)
		{
				$data['id_pengiriman'] = $row->id_pengiriman;
				$data['resi'] = $row->resi;
        }
        
        $query = $this->db->query("SELECT id_pembayaran FROM `pembayaran` where keterangan='Lunas'");
        $data['id_pembayaran'] = $query->result_array();

        $data['alert'] = $_SESSION['alert'];
        unset($_SESSION['alert']);
        $this->load->view("adminuser/head.php");
        $this->load->view("adminuser/navbar.php");
        $this->load->view("adminuser/sidebar.php");
        $this->load->view("adminuser/konfirmasi/editpengiriman.php", $data);
        $this->load->view("adminuser/footer.php");
        $this->load->view("adminuser/scrolltop.php");
        $this->load->view("adminuser/modal.php");
        $this->load->view("adminuser/js.php");
    }

    public function updatepengiriman(){
        $this->load->database();
        if($this->input->post('ekspedisi') == ""){
            $data = array(
                'id_pengiriman' => $this->input->post('id_pengiriman'),
				'resi' => $this->input->post('resi'),
            );
        }else{
            $data = array(
                'id_pengiriman' => $this->input->post('id_pengiriman'),
                'resi' => $this->input->post('resi'),
                'ekspedisi' => $this->input->post('ekspedisi')
            );
        }
        $id_pembayaran = $this->input->post('id_pembayaran');
        $this->db->update('pengiriman', $data, array('id_pengiriman' => $this->input->post('id_pengiriman')));
        $this->db->query("UPDATE `pembayaran` SET `keterangan` = 'Dikirim' WHERE `pembayaran`.`id_pembayaran` = '$id_pembayaran'");
        $_SESSION['alert'] = "edit";
        redirect(base_url('index.php/superuser/listpengiriman'));
    }

    public function deletepengiriman($id){
		$this->load->database();
        $this->db->delete('pengiriman', array("id_pengiriman" => $id));
        $_SESSION['alert'] = "hapus";
		redirect(base_url('index.php/superuser/listpengiriman'));
    }

}

?>