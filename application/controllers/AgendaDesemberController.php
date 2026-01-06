<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AgendaDesemberController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Agenda Kerja Pimpinan - Desember 2025';
        $this->load->view('template/header', $data);
        $this->load->view('agenda_desember_view');
        $this->load->view('template/footer');
    }
}
