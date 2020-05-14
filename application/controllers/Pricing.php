<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pricing extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['title'] = 'Purchase';

        $this->load->view('templates_ms/header', $data);
        $this->load->view('templates_ms/topbar', $data);
        $this->load->view('pricing/pricing_page', $data);
        $this->load->view('templates_ms/footer');
    }
}
