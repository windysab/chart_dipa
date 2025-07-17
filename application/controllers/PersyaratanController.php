<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PersyaratanController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$data['title'] = 'Persyaratan Mengajukan Perkara Cerai (Talak/Gugat)';

		// $this->load->view('template/new_header', $data);
		// $this->load->view('template/new_sidebar');
		$this->load->view('persyaratan_perkara');
		$this->load->view('template/new_footer');
	}
}
