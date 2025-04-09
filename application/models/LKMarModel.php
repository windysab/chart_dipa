<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LKMarModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_financial_data() {
        // Data from the PDF for March 2025
        $data = [
            'dipa_number' => 'SP DIPA- 005.01.2.402556/2025',
            'months' => ['Januari', 'Februari', 'Maret'],
            'categories' => [
                'Belanja Pegawai' => [
                    'pagu' => [2760471000, 2760471000, 2760471000],
                    'realisasi' => [218691955, 218339233, 0],
                    'percentage' => [7.92, 0, 0],
                    'sisa_pagu' => [2541779045, 2323439812, 0]
                ],
                'Belanja Barang' => [
                    'pagu' => [1312916000, 811077000, 811077000],
                    'realisasi' => [24405000, 64280768, 0],
                    'percentage' => [1.86, 0, 0],
                    'sisa_pagu' => [1288511000, 722351716, 0]
                ],
                'Belanja Modal' => [
                    'pagu' => [0, 0, 0],
                    'realisasi' => [0, 0, 0],
                    'percentage' => [0, 0, 0],
                    'sisa_pagu' => [0, 0, 0]
                ]
            ],
            'totals' => [
                'pagu' => [4198424000, 3571588000, 0],
                'realisasi' => [243136171, 282620001, 0],
                'percentage' => [5.79, 0, 0],
                'sisa_pagu' => [3955287529, 3045831528, 0]
            ],
            'notes' => [
                'Februari' => '(Revisi)'
            ]
        ];
        
        return $data;
    }
}
