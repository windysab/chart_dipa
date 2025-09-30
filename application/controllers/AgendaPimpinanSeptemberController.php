<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AgendaPimpinanSeptemberController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Agenda Kerja Pimpinan - September 2025';
		$this->load->view('template/header', $data);
		$this->load->view('agenda_pimpinan_september_view');
		$this->load->view('template/footer');
	}
}
