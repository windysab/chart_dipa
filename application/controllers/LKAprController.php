<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LKAprController extends CI_Controller {

    public function index() {
        // Memuat view untuk bulan April
        $this->load->view('LK_Apr_view');
    }
}
?>
