<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }

    public function signup()
    {
        $this->load->view('auth/signup');
    }

    public function do_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->AuthModel->login($username, $password)) {
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('auth/login');
        }
    }

    public function do_signup()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->AuthModel->signup($username, $password)) {
            redirect('auth/login');
        } else {
            $this->session->set_flashdata('error', 'Failed to create account');
            redirect('auth/signup');
        }
    }
}
