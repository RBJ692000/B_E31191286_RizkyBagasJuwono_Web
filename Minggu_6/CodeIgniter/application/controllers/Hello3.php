<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Hello3 extends CI_Controller {
        public function index(){
            $this->load->model('Hello_model');

            $model = $this->Hello_model;

            $a = $model->txt;

            $data['teks'] = $a;

            $this->load->view('helloview3', $data);
        }
    }
?>