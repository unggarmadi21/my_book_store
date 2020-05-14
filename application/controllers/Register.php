<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    // public function registration()
    // {

    //     if ($this->session->userdata('email')) {
    //         redirect('register');
    //     }
    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
    //         'is_unique' => 'This email has already registered!'
    //     ]);
    //     //|is_unique[user.email]
    //     $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password]', [
    //         'matches' => 'Password dont match!'
    //         //,
    //         //'min_lenght' => 'Password too short!'
    //     ]);
    //     $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password1]');

    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = 'Registration !';
    //         $this->load->view("templates/nav_log", $data);
    //         $this->load->view("templates/auth_header", $data);
    //         $this->load->view("register/register_page");
    //         $this->load->view("templates/footer");
    //     } else {
    //         $email = $this->input->post('email', true);
    //         $data = [
    //             //menghindari crosssizescripting
    //             'name' => htmlspecialchars($this->input->post('name', true)),
    //             'email' => htmlspecialchars($email),
    //             'password' => password_hash(
    //                 $this->input->post('password'),
    //                 PASSWORD_DEFAULT
    //             ),
    //             'users_id' => 1,
    //             'is_active' => 0,
    //             'created_at' => time()
    //         ];

    //         // siapkan token
    //         $token = base64_encode(random_bytes(32));
    //         $user_token = [
    //             'email' => $email,
    //             'password' => $token,
    //             'date_created' => time()
    //         ];

    //         $this->db->insert('users', $data);
    //         $this->db->insert('password', $user_token);

    //         // $this->_sendEmail($token, 'verify');

    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! Your account has been created! Please activate your account!</div>');

    //         redirect('awal');
    //     }
    // }


    public function index()
    {

        $data['title'] = 'Join Us!';

        $this->load->view('templates_ms/nav_log', $data);
        $this->load->view('templates_ms/header', $data);
        $this->load->view('register/register_page', $data);
        $this->load->view('templates_ms/footer');
    }
}
