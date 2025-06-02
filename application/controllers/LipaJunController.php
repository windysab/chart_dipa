<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LipaJunController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Laporan Perkara Juni 2025';
		$this->load->view('template/header', $data);
		$this->load->view('Lipa_Jun_view');
		$this->load->view('template/footer');
	}
}
