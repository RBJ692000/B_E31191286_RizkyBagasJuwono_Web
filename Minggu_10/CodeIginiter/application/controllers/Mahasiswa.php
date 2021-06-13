<?php
    defined('BASEPATH') OR exit ('No direct script access allowed');
    class Mahasiswa extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Mahasiswa_model');//digunakan untuk meload model Mahasiswa_model
        }
        public function index(){
            $data['user']=$this->Mahasiswa_model->getAll()->result();//memanggil data pada database melalui 
            //fungsi getAll() pada Mahasiswa_model

            $this->template->views('crud/home_mahasiswa',$data);//menampilkan tampilan home_mahasiswa 
            //dan data yang telah dipanggil sebelumnya
        }
        
        public function tambah() {
            $this->template->views('crud/tambah_mahasiswa');//digunakan untuk menampilkan view tambah_mahasiswa
        }
        public function input() {
            //mendeklarasikan variabel yang nantinya digunakan untuk menampung nilai yang di inputkan
            $username = $this->input->post('username');
            $password = $this->input->post('pass');
            $nama = $this->input->post('nama');
            $grup = $this->input->post('grup');

            //lalu dimasukkan kedalam array untuk dikirimkan lagi ke Mahasiswa_model
            $data = array (
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'grup' => $grup
            );
            //memanggil fungsi input_data pada mahasiswa_model yang digunakan untuk menambahkan 
            //data ke tabel tm_user pada database
            $this->Mahasiswa_model->input_data($data, 'tm_user');
            //mengembalikan lagi data pada fungsi index pada Mahasiswa yang digunakan untuk menampilkan 
            //pada tabel di home_mahasiswa
            redirect('Mahasiswa/index');
        }
    }
?>