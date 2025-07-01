<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AgendaController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Agenda Kerja Pimpinan';
        $this->load->view('template/header', $data);
        $this->load->view('agenda_view');
        $this->load->view('template/footer');
    }

    public function juni()
    {
        $data['title'] = 'Agenda Kerja Pimpinan - Juni 2025';
        $this->load->view('template/header', $data);
        $this->load->view('agenda_juni_view');
        $this->load->view('template/footer');
    }
}
