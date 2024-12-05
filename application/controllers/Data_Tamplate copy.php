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
		// var_dump($nomor_perkara);
		// die();
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'No');
		$sheet->setCellValue('B1', 'Nomor Perkara');
		$sheet->setCellValue('C1', 'Kode Perkara');
		$sheet->setCellValue('D1', 'Nama Majelis Hakim');
		$sheet->setCellValue('E1', 'Nama PP');
		$sheet->setCellValue('F1', 'Penerimaan');
		$sheet->setCellValue('G1', 'Penetapan Majelis Hakim');
		$sheet->setCellValue('H1', 'Penetapan Hari Sidang');
		$sheet->setCellValue('I1', 'Sidang I');
		$sheet->setCellValue('J1', 'Diputus');
		$sheet->setCellValue('K1', 'Jenis Putusan');
		$sheet->setCellValue('L1', 'Belum Diputus');
		$sheet->setCellValue('M1', 'Status Pekerjaan');
		$sheet->setCellValue('N1', 'Keterangan');
		$sheet->setCellValue('O1', 'alamat gaib');
		$sheet->setCellValue('P1', 'prodeo');
		$sheet->setCellValue('Q1', 'perkara ecourt');
		$no = 1;
		$row = 2;
		foreach ($this->M_data_template->data_tamplate($nomor_perkara) as $item) {
			var_dump($item);
			$sheet->setCellValue('A' . $row, $no++);
			$sheet->setCellValue('B' . $row, $item->nomor_perkara);
			$sheet->setCellValue('C' . $row, $item->jenis_perkara_nama);
			$sheet->setCellValue('D' . $row, $item->majelis_hakim_nama);
			$sheet->setCellValue('E' . $row, $item->panitera_pengganti_text);
			$sheet->setCellValue('F' . $row, $item->tanggal_pendaftaran);
			$sheet->setCellValue('G' . $row, $item->penetapan_majelis_hakim);
			$sheet->setCellValue('H' . $row, $item->penetapan_hari_sidang);
			$sheet->setCellValue('I' . $row, $item->sidang_pertama);
			$sheet->setCellValue('J' . $row, $item->tanggal_putusan);
			$sheet->setCellValue('K' . $row, $item->amar);
			$sheet->setCellValue('L' . $row, $item->pekerjaan);
			$sheet->setCellValue('M' . $row, $item->alamat_pihak2);
			$sheet->setCellValue('N' . $row, $item->prodeo);
			$sheet->setCellValue('O' . $row, $item->email_pihak1);
			$row++;
		}
		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
		$filename = 'Data Perkara.xlsx';

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
