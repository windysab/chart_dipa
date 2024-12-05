<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller
{


   public function index()
    {
        //$this->load->view('template/header');
        $this->load->view('template/new_header');
        //$this->load->view('template/sidebar');
        $this->load->view('template/new_sidebar'); 
       // $this->load->view('../../assets/pages/tables/data');
        $this->load->view('v_grafik');
        $this->load->view('template/new_footer');
        //$this->load->view('template/footer');   
    }
}
