<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AgendaSatkerAgusController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Agenda Kegiatan Satker PA Amuntai - Juli 2025';
        $this->load->view('template/header', $data);
        $this->load->view('agenda_satker_agus_view');
        $this->load->view('template/footer');
    }
}
