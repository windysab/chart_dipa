<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CCTVController3 extends CI_Controller
{
	private $model;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CCTVModel3');
		$this->model = new CCTVModel3();
	}
	public function index()
	{
		$year = date('Y', strtotime('first day of last month'));
		$month = date('m', strtotime('first day of last month'));
		$links = $this->model->getLinks();
		$perkaraData = $this->model->getPerkaraData($year, $month);
		$totalPerkaraData = $this->model->getTotalPerkaraData($year, $month) ? $this->model->getTotalPerkaraData($year, $month) : (object)[
			'total_perkara' => 0,
			'total_perkara_ecourt' => 0,
			'persen_perkara_ecourt' => 0,
			'total_perkara_non_ecourt' => 0
		];
		$mediasiData = $this->model->getMediasiData($year, $month) ? $this->model->getMediasiData($year, $month) : ['D' => 0, 'S' => 0, 'T' => 0, 'Y2' => 0, 'Y1' => 0];
		$jumlahPerkaraTerdaftar = $this->model->getJumlahPerkaraTerdaftar($year, $month) ? $this->model->getJumlahPerkaraTerdaftar($year, $month) : 0;
		$jumlahPerkaraDiputus = $this->model->getJumlahPerkaraDiputus($year, $month) ? $this->model->getJumlahPerkaraDiputus($year, $month) : 0;
		$sisaPerkara = $this->model->getSisaPerkara($year, $month) ? $this->model->getSisaPerkara($year, $month) : 0;
		$sisaPerkaraBulanSebelumnya = $this->model->getSisaPerkaraBulanSebelumnya($year, $month) ? $this->model->getSisaPerkaraBulanSebelumnya($year, $month) : 0;
		$this->model->incrementViewCount();
		$viewCount = $this->model->getViewCount();
		$this->load->view('template/header');
		$this->load->view('cctv_view3', [
			'links' => $links,
			'chart_data' => $perkaraData,
			'total_perkara_data' => $totalPerkaraData,
			'mediasi_data' => $mediasiData,
			'jumlah_perkara_terdaftar' => $jumlahPerkaraTerdaftar,
			'jumlah_perkara_diputus' => $jumlahPerkaraDiputus,
			'sisa_perkara' => $sisaPerkara,
			'sisa_perkara_bulan_sebelumnya' => $sisaPerkaraBulanSebelumnya,
			'view_count' => $viewCount
		]);
		$this->load->view('template/footer');
	}
}
