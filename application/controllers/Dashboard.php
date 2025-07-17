<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CCTVModel3');
		$this->load->database();
	}

	public function index()
	{
		$year = date('Y');
		$month = date('n');

		// Get data from CCTVModel3
		$data['perkara_data'] = $this->CCTVModel3->getPerkaraData($year, $month);
		$data['total_perkara_data'] = $this->CCTVModel3->getTotalPerkaraData($year, $month);
		$data['mediasi_data'] = $this->CCTVModel3->getMediasiData($year, $month);
		$data['jumlah_terdaftar'] = $this->CCTVModel3->getJumlahPerkaraTerdaftar($year, $month);
		$data['jumlah_diputus'] = $this->CCTVModel3->getJumlahPerkaraDiputus($year, $month);
		$data['sisa_perkara'] = $this->CCTVModel3->getSisaPerkara($year, $month);
		$data['efiling_data'] = $this->CCTVModel3->getEfilingData($year, $month);

		// Current year and month data
		$data['current_year'] = $year;
		$data['current_month'] = $month;
		$data['current_month_name'] = date('F');

		// Yearly totals
		$query_yearly = $this->db->query("
			SELECT 
				COUNT(perkara.perkara_id) AS total_perkara,
				COUNT(perkara_efiling_id.perkara_id) AS total_perkara_ecourt,
				(COUNT(perkara_efiling_id.perkara_id) * 100.0 / COUNT(perkara.perkara_id)) AS persen_perkara_ecourt,
				(COUNT(perkara.perkara_id) - COUNT(perkara_efiling_id.perkara_id)) AS total_perkara_non_ecourt
			FROM 
				perkara
			LEFT JOIN 
				perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
			WHERE 
				YEAR(perkara.tanggal_pendaftaran) = ?
		", [$year]);
		$data['yearly_data'] = $query_yearly->row();

		// Monthly statistics for chart
		$query_monthly = $this->db->query("
			SELECT 
				(SELECT COUNT(*) FROM perkara WHERE MONTH(tanggal_pendaftaran) = ? AND YEAR(tanggal_pendaftaran) = ?) AS diterima,
				(SELECT COUNT(*) FROM perkara_putusan WHERE MONTH(tanggal_putusan) = ? AND YEAR(tanggal_putusan) = ?) AS putus,
				(SELECT COUNT(*) FROM perkara_putusan WHERE MONTH(tanggal_minutasi) = ? AND YEAR(tanggal_minutasi) = ?) AS minutasi,
				(SELECT COUNT(*) FROM perkara LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id WHERE tanggal_putusan IS NULL AND MONTH(tanggal_pendaftaran) = ? AND YEAR(tanggal_pendaftaran) = ?) AS sisa
		", [$month, $year, $month, $year, $month, $year, $month, $year]);
		$data['monthly_stats'] = $query_monthly->row();

		$this->load->view('template/new_header');
		$this->load->view('template/new_sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('template/new_footer');
	}
}
