<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {

    public function index()
    {
        $this->load->model('M_Statistik_chart');

        $year = $this->input->get('year') ?: date('Y');
        $month = $this->input->get('month') ?: date('m');

        $data['chart_data'] = $this->M_Statistik_chart->get_chart_data($year, $month);
        $this->load->view('template/new_header');
        $this->load->view('template/new_sidebar');
        $this->load->view('v_statistik', $data);
        $this->load->view('template/new_footer');
    }
}
?>
