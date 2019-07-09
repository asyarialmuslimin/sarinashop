<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
    public function GetUser(){
        $this->load->database();
        $data = $this->db->query("SELECT * FROM user");
        return $data->result_array();
    }

    public function CekUser($email, $password){
            $this->load->database();
            $data = $this->db->query("SELECT * FROM user WHERE email='$email' AND password='$password'");
            return $data->num_rows();
    }

    public function GetUserIdUser($email, $password){
        $this->load->database();
        $data = $this->db->query("SELECT id_user, level FROM user WHERE email='$email' AND password='$password'");
        return $data;
    }

    public function GetLevelUser($id){
        $this->load->database();
        $data = $this->db->query("SELECT level FROM user WHERE id_user='$id'");
        return $data;
    }

    public function SearchUser($tabel, $nama){
        $this->load->database();
        $q = $this->db->query("SELECT * FROM user WHERE  $tabel LIKE \"%$nama%\" ");
        return $q->result_array();
    }

    public function GetById($id){
        $this->load->database();
        $q = $this->db->select('*')->from('user')->where('id_user',$id)->get();
        return $q;
    }

    public function DeleteById($id){
        $q = $this->db->delete('user')->where('id_user', $id);
    }
}
?>