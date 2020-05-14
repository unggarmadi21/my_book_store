<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }

    public function index()
    {

        // if ($this->session->userdata('email')) {
        //     redirect('login');
        // }

        // if ($this->form_validation->run() == false) {

        if ($this->input->post()) {
            if ($this->user_model->doLogin()) redirect(base_url('awal'));
        }


        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        //     // tampilkan halaman login
        $data['title'] = 'login!';

        $this->load->view('templates_ms/nav_log', $data);
        $this->load->view('templates_ms/header', $data);
        $this->load->view('admin_ms/login', $data);
        $this->load->view('templates_ms/footer');
        //     } else {
        //         // validasinya success
        //         $this->_login();
        //     }
        // }
        // private function _login()
        // {
        //     $email = $this->input->post('email');
        //     $password = $this->input->post('password');

        //     $user = $this->db->get_where('users', ['email' => $email])->row_array();

        //     // jika usernya ada
        //     if ($user) {
        //         // jika usernya aktif
        //         if ($user['is_active'] == 1) {
        //             //cek password
        //             if (password_verify($password, $user['password'])) {
        //                 $data = [
        //                     'email' => $user['email'],
        //                     'users_id' => $user['users_id']
        //                 ];
        //                 $this->session->set_userdata($data);
        //                 if ($user['users_id'] == 1) {
        //                     redirect('awal');
        //                 } else {
        //                     redirect('home');
        //                 }
        //             } else {
        //                 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
        //             }
        //         } else {
        //             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
        //         }
        //     } //jika usernya tidak ada
        //     else {
        //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
        //     }
    }
}


    // public function logout()
    // {
    //     // hancurkan semua sesi
    //     $this->session->sess_destroy();
    //     redirect(base_url('admin/login'));
    // }
