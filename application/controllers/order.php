<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        $this->load->model('user_model');
        if ($this->user_model->is_NotLogin()) redirect(base_url('admin/login'));
    }

    public function index()
    {
        $this->load->view('admin/order');
    }
}
