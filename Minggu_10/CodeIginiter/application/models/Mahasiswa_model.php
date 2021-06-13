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
    }
?>