<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Controller
{
    public function index()
    {
        $data['title'] = ('Portfolio');
        $this->load->view('portfolio/port');
    }
}
