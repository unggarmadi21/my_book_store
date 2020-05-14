<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awal extends CI_Controller
{
    public function index()
    {

        $data['title'] = 'Madi Store';


        $this->load->view('templates_ms/header', $data);
        $this->load->view('templates_ms/topbar', $data);
        $this->load->view('templates_ms/sidebar', $data);
        $this->load->view('templates_ms/footer');
    }



    public function support()
    {

        $data['title'] = 'Support';

        $this->load->view('templates/nav_log', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
    }

    public function templates()
    {

        $data['title'] = 'Templates';

        $this->load->view('templates/nav_log', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
    }
}
