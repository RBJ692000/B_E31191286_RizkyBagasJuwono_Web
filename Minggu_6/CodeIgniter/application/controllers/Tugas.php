<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Tugas extends CI_Controller {
        public function index(){
            $this->load->model('Tugas_model');

            $model = $this->Tugas_model;

            $a = $model->txt;
            $b = $model->txt2;
            $c = $model->txt3;

            $data = array ('teks' => $a, 'teks2'=>$b, 'teks3'=>$c);

            $this->load->view('Tugasview', $data);
        }
    }
?>