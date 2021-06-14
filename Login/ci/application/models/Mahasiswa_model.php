<?php
    defined('BASEPATH') OR exit ('No direct script access allowed');
    class Mahasiswa_model extends CI_Model {
        function getAll(){
            $this->db->select('*'); //digunakan sebagai fungsi select, yaitu menampilkan data
            $this->db->from('tm_user'); //digunakan untuk mengambil data dari tabel tm_user
            $this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup'); //untuk menggabungkan 
            //antara tabel tm_user dan tm_grup berdasarkan grup
            $query = $this->db->get(); //merupakan fungsi eksekusi query sama seperti mysqli_query. 
            return $query; //mengembalikan nilai tersebeut ke $query
        }
        function input_data ($data,$table) {
            $this->db->insert($table,$data); //menambahkan data pada tabel
        }
        public function hapus_data($where,$table){
		    $this->db->where($where);
		    $this->db->delete($table);
	    }

        public function login($user,$pass,$table) {
            $this->db->select('*'); //digunakan sebagai fungsi select, yaitu menampilkan data
            $this->db->from('tm_user'); //digunakan untuk mengambil data dari tabel tm_user
            $this->db->where('username', $user);
            $this->db->where('password', $pass);
            $query = $this->db->get(); //merupakan fungsi eksekusi query sama seperti mysqli_query.
            return $query; //mengembalikan nilai tersebeut ke $query
        }

        public function getAllGrup(){
		
            $this->db->select('*');
            $this->db->from('tm_grup');
            $query = $this->db->get(); 
            return $query;
        }
        public function input_data_grup($data,$table){
            $this->db->insert($table,$data);
        }
        public function edit_data_grup($where,$table){
            return $this->db->get_where($table,$where);
        } 
        public function update_data_grup($where,$data,$table){
            
            $this->db->where($where);
            
            $this->db->update($table,$data);
        }
        public function hapus_data_grup($where,$table){
            $this->db->where($where);   
            $this->db->delete($table);
        } 
    }
?>