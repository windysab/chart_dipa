<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CCTVController2 extends CI_Controller {
    private $model;

    public function __construct() {
        parent::__construct();
        $this->load->model('CCTVModel2');
        $this->model = new CCTVModel2();
    }

	
	public function index() {
		$year = date('Y', strtotime('first day of last month'));
		$month = date('m', strtotime('first day of last month'));
		$links = $this->model->getLinks();
		$perkaraData = $this->model->getPerkaraData($year, $month);
		$totalPerkaraData = $this->model->getTotalPerkaraData($year, $month);
		$this->load->view('template/new_header');
		$this->load->view('template/new_sidebar');
		$this->load->view('cctv_view2', [
			'links' => $links, 
			'chart_data' => $perkaraData,
			'total_perkara_data' => $totalPerkaraData
		]);
		$this->load->view('template/new_footer');
	}
}
?>
