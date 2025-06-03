<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AgendaSatkerController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Agenda Kegiatan Satker PA Amuntai';
        $this->load->view('template/header', $data);
        $this->load->view('agenda_satker_view');
        $this->load->view('template/footer');
    }
}
