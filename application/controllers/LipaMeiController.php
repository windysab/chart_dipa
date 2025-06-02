<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LipaMeiController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Laporan Keuangan Perkara Mei 2025';
		$this->load->view('template/header', $data);
		$this->load->view('LK_Mei_Perkara_view');
		$this->load->view('template/footer');
	}
}
