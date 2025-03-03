<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistikFebController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('StatistikModel');
    }

    public function index() {
        $data = []; // Initialize the $data variable
        // $data['statistics'] = $this->StatistikModel->get_statistics();
        $this->load->view('Lipa_8_Feb_view', $data);
    }
}
?>
