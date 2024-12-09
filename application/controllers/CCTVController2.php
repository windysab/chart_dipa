<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CCTVController extends CI_Controller {
    private $model;

    public function __construct() {
        parent::__construct();
        $this->load->model('CCTVModel2');
        $this->model = new CCTVModel2();
    }

    public function index() {
        $links = $this->model->getLinks();
        $perkaraData = $this->model->getPerkaraData();
        $this->load->view('cctv_view2', ['links' => $links, 'perkaraData' => $perkaraData]);

		$this->load->view('template/new_header');
        $this->load->view('template/new_sidebar');
        
        $this->load->view('template/new_footer');

    }
}
?>
