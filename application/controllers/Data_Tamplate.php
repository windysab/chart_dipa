<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;

defined('BASEPATH') or exit('No direct script access allowed');

class Data_Tamplate extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_data_template");
	}
	public function index()
	{
		$nomor_perkara = $this->input->post('nomor_perkara');
		$data['nomor_perkara'] = $nomor_perkara;
		$data['datafilter'] = $this->M_data_template->data_tamplate($nomor_perkara);
		$this->load->view('template/new_header');
		$this->load->view('template/new_sidebar');
		$this->load->view('v_tamplate', $data);
		$this->load->view('template/new_footer');
		$this->load->helper('url');
	}

	public function export_excel($nomor_perkara)
	{
		$nomor_perkara = str_replace('-', '/', $nomor_perkara);

		// Load template file dari disk
		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(__DIR__ . '/../../template/Cover.xlsx');
		$sheet = $spreadsheet->getActiveSheet();


		$row = 2;
		foreach ($this->M_data_template->data_tamplate($nomor_perkara) as $item) {

			$sheet->setCellValue('H' . $row, $item->nomor_perkara);

			function tanggal_indo($tanggal)
			{
				$bulan = array(
					1 =>   'Januari',
					'Februari',
					'Maret',
					'April',
					'Mei',
					'Juni',
					'Juli',
					'Agustus',
					'September',
					'Oktober',
					'November',
					'Desember'
				);
				$pecahkan = explode('-', $tanggal);

				// Cek jika pecahkan memiliki setidaknya 3 elemen
				if (count($pecahkan) >= 3) {
					// variabel pecahkan 0 = tahun
					// variabel pecahkan 1 = bulan
					// variabel pecahkan 2 = tanggal

					return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
				} else {
					// Kembalikan string kosong atau nilai default lainnya
					return "";
				}
			}
			$sheet->setCellValue('H' . 4, tanggal_indo($item->tanggal_pendaftaran));
			$sheet->setCellValue('H' . 5, tanggal_indo($item->tanggal_transaksi));
			$sheet->setCellValue('H' . 6, tanggal_indo($item->tanggal_pendaftaran));

			$sheet->setCellValue('H' . 7, tanggal_indo($item->penetapan_majelis_hakim));
			$lines = explode("</br>", $item->majelis_hakim_text);
			if (isset($lines[0])) {
				$result = str_replace("Hakim Ketua: ", "", trim($lines[0]));
				$sheet->setCellValue('H' . 8, $result);
			}

			if (isset($lines[1])) {
				$result = str_replace("Hakim Anggota 1: ", "", trim($lines[1]));
				$sheet->setCellValue('H' . 9, $result);
			}
			if (isset($lines[2])) {
				$result = str_replace("Hakim Anggota 2: ", "", trim($lines[2]));
				$sheet->setCellValue('H' . 10, $result);
			}
			$panitera = explode("</br>", $item->panitera_pengganti_text);
			if (isset($panitera[0])) {
				$result = str_replace("Panitera Pengganti: ", "", trim($panitera[0]));
				$sheet->setCellValue('H' . 11, $result);
			}
			$jurusita = explode("</br>", $item->jurusita_text);
			if (isset($jurusita[0])) {
				$result = str_replace("Juru Sita Pengganti: ", "", trim($jurusita[0]));
				$sheet->setCellValue('H' . 12, $result);
			}

			$sheet->setCellValue('H' . 13, tanggal_indo($item->penetapan_hari_sidang));
			$sheet->setCellValue('H' . 14, tanggal_indo($item->sidang_pertama));
			$sheet->setCellValue('H' . 15, tanggal_indo($item->mediator_text));
			$amarValue = $item->amar;
			if ($amarValue == 'Dikabulkan') {
				$amarValue = 'Putus';
			} elseif ($amarValue == 'Dicabut') {
				$amarValue = 'Cabut';
			} elseif ($amarValue == 'Dinyatakan Gugur') {
				$amarValue = 'Gugur';
			} // else case is not needed because $amarValue is already set to $item->amar

			$sheet->setCellValue('H' . 16, $amarValue);
			$sheet->setCellValue('H' . 17, $item->faktor_perceraian);
			$jumlahBiaya = "Rp. " . number_format($item->jumlah_biaya, 2, ',', '.');
			$sheet->setCellValue('H' . 18, $jumlahBiaya);
			$sheet->setCellValue('H' . 19, tanggal_indo($item->tanggal_minutasi));
			$sheet->setCellValue('H' . 20, tanggal_indo($item->tanggal_putusan));
			$sheet->setCellValue('H' . 21, tanggal_indo($item->tanggal_bht));
			$tanggalPenetapan = $item->tanggal_penetapan_sidang_ikrar;
			$formattedTanggalPenetapan = ($tanggalPenetapan != null && $tanggalPenetapan != '0000-00-00') ? date('d-m-Y', strtotime($tanggalPenetapan)) : '';
			$sheet->setCellValue('H' . 22, $formattedTanggalPenetapan);
			$tanggalIkrarTalak = $item->tgl_ikrar_talak;
			$formattedTanggalIkrarTalak = ($tanggalIkrarTalak != null && $tanggalIkrarTalak != '0000-00-00') ? date('d-m-Y', strtotime($tanggalIkrarTalak)) : '';
			$sheet->setCellValue('H' . 23, $formattedTanggalIkrarTalak);
			$sheet->setCellValue('H' . 24, $item->nomor_akta_cerai);
			// Sisanya kode Anda...
			$row++;
		}

		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
		$filename = 'Cover Perkara NO.'  . $nomor_perkara . '.xlsx';

		// Clean the output buffer
		if (ob_get_contents()) ob_end_clean();

		// Set the correct headers
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $filename . '"');
		header('Cache-Control: max-age=0');

		// Output the Excel file
		$writer->save('php://output');
	}
}
