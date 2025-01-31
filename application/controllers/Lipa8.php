<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lipa8 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Lipa8_model');
    }

    public function index() {
        $data['report_data'] = $this->Lipa8_model->get_report_data();
        $this->load->view('Lipa8_view', $data);
    }
}
?>
