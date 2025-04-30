<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LKMarModel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function get_financial_data()
	{
		// Data from the PDF for March 2025
		$data = [
			'dipa_number' => 'SP DIPA- 005.01.2.402556/2025',
			'months' => ['Januari', 'Februari', 'Maret', 'April'],
			'categories' => [
				'Belanja Pegawai' => [
					'pagu' => [2760471000, 2760471000, 2760471000, 2760471000],
					'realisasi' => [218691955, 218339233, 437166998, 218949779],
					'percentage' => [7.92, 0, 0, 0],
					'sisa_pagu' => [2541779045, 2323439812, 1886272814, 1667323035]
				],
				'Belanja Barang' => [
					'pagu' => [1312916000, 811077000, 1312916000, 1312916000],
					'realisasi' => [24405000, 64280768, 107981737, 141855558],
					'percentage' => [1.86, 0, 0, 0],
					'sisa_pagu' => [1288511000, 722351716, 1116208979, 974353421]
				],
				'Belanja Modal' => [
					'pagu' => [0, 0, 0, 0],
					'realisasi' => [0, 0, 0, 0],
					'percentage' => [0, 0, 0, 0],
					'sisa_pagu' => [0, 0, 0, 0]
				]
			],
			'totals' => [
				'pagu' => [4198424000, 3571588000, 4198424000, 4198424000],
				'realisasi' => [243136171, 282620001, 545148735, 360805337],
				'percentage' => [5.79, 0, 0, 0],
				'sisa_pagu' => [3955287529, 3045831528, 3127518793, 2766713456]
			],
			'notes' => [
				'Februari' => '(Revisi)',
				'Maret' => '(Revisi)'
			]
		];

		return $data;
	}
}
