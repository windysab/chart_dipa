<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Lipa1 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_lipa1");

		
	}



	public function index()
	{
		
		$lap_bulan = $this->input->post('lap_bulan');
		$lap_tahun = $this->input->post('lap_tahun');
		$data['datafilter'] = $this->M_lipa1->getData($lap_tahun, $lap_bulan);
		$this->load->view('template/new_header');
		$this->load->view('template/new_sidebar');
		$this->load->view('v_lipa1', $data);
		$this->load->view('template/new_footer');
	}
}
