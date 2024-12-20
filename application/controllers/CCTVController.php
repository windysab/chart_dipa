<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CCTVController extends CI_Controller {
    private $model;

    public function __construct() {
        parent::__construct();
        $this->load->model('CCTVModel');
        $this->model = new CCTVModel();
    }

    public function index() {
        $links = $this->model->getLinks();
        $this->load->view('cctv_view', ['links' => $links]);
		$this->load->view('template/new_header');
        $this->load->view('template/new_sidebar');
       
        $this->load->view('template/new_footer');

		
    }
}
?>
