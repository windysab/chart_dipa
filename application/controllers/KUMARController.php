<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KUMARController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('LKMarModel');
	}

	public function index()
	{
		$data['title'] = 'Laporan Keuangan April 2025';
		$data['financial_data'] = $this->LKMarModel->get_financial_data();
		$this->load->view('template/header', $data);
		// $this->load->view('template/new_sidebar');
		$this->load->view('LKMar_view', $data);
		$this->load->view('template/footer');
	}

	public function showChart($month_index, $category)
	{
		$data['title'] = 'Detail Chart';
		$data['financial_data'] = $this->LKMarModel->get_financial_data();
		$data['month_index'] = $month_index;
		$data['category'] = urldecode($category);

		// Convert month index to month name
		$data['month_name'] = $data['financial_data']['months'][$month_index];

		$this->load->view('template/header', $data);
		$this->load->view('chart_detail_view', $data);
		$this->load->view('template/footer');
	}
}
