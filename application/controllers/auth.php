<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('name')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        if ($this->form_validation->run() == false) {
            $data['tittle'] = 'login page';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('template/auth_footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {

        $nama = $this->input->post('name');
        $password = $this->input->post('password');

        $login = $this->db->get_where('login', ['name' => $nama])->row_array();

        if ($login) {
            if ($login['is_active'] == 1) {
                if (password_verify($password, $login['password'])) {
                    $data = [
                        'name' => $login['name'],
                        'role_id' => $login['role_id'],
                    ];
                    $this->session->set_userdata($data);
                    if ($login['role_id'] == 1) {
                        redirect('admin');
                    } elseif ($login['role_id'] == 2) {
                        redirect('user');
                    } elseif ($login['role_id'] == 3) {
                        redirect('guru_mapel');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               password kamu salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
           nama kamu telah tidak aktif!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
       nama kamu tidak terdaftar di data kami!</div>');
            redirect('auth');
        }
    }


    public function regis()
    {
        if ($this->session->userdata('name')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[login.email]',
            [
                'is_unique' => 'this email is already registered!'
            ]
        );
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['tittle'] = 'registration';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/regis');
            $this->load->view('template/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => 2,
                'is_active' => 1,
            ];
            $this->db->insert('login', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Congratulations! your account has been already created. please login!</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        selamat anda berhasil keluar!</div>');
        redirect('auth');
    }
}
