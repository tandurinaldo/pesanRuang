<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_m');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['tittle'] = 'user';
        $data['login'] = $this->db->get_where('login', ['name' =>
        $this->session->userdata('name')])->row_array();
        $data['data_m'] = $this->data_m->menu_sub();
        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }
    public function cekJadwal()
    {
        $data['tittle'] = 'Cek Jadwal';
        $data['login'] = $this->db->get_where('login', ['name' =>
        $this->session->userdata('name')])->row_array();
        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/cekJadwal', $data);
        $this->load->view('template/footer');
    }
    public function sedia()
    {
        $data['tittle'] = 'tersedia';
        $data['login'] = $this->db->get_where('login', ['name' =>
        $this->session->userdata('name')])->row_array();
        // $this->form_validation->set_rules('')
        // if ($this->form_validation->run() == true) {
        $data['data_m'] = $this->data_m->menu_sub();
        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/sedia', $data);
        $this->load->view('template/footer');
        // } else {

    }
    public function menu()
    {
        $data['tittle'] = 'Menu Management User';
        $data['login'] = $this->db->get_where('login', ['name' =>
        $this->session->userdata('name')])->row_array();
        $data['data_m'] = $this->data_m->user_menu();
        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/menu', $data);
        $this->load->view('template/footer');
    }
    public function edit($id)
    {
        $data['tittle'] = 'Edit Data';
        $data['user_menu2'] = $this->data_m->user($id);
        $data['login'] = $this->db->get_where('login', ['name' =>
        $this->session->userdata('name')])->row_array();
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('nip', 'nip', 'required|numeric');
        $this->form_validation->set_rules('opd', 'opd', 'required|numeric');
        $this->form_validation->set_rules('username', 'username', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/head', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_m->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('user/menu');
        }
    }
    public function hapus($id)
    {
        $this->data_m->hapusData($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('user/menu');
    }
}
