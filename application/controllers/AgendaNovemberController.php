<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AgendaNovemberController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Agenda Kerja Pimpinan - November 2025';
        $this->load->view('template/header', $data);
        $this->load->view('agenda_november_view');
        $this->load->view('template/footer');
    }
}
