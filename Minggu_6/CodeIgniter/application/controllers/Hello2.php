<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Hello2 extends CI_Controller{
        public function index(){
            // echo "<h2>Hello world!</h2>";
            $this->load->view('helloview2');
        }
    }
?>