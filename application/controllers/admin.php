<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_m');
    }
    public function index()
    {
        $data['tittle'] = 'Dashboard';
        $data['login'] = $this->db->get_where('login', ['name' =>
        $this->session->userdata('name')])->row_array();
        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template/footer');
    }
    public function dataPesanan()
    {
        $data['tittle'] = 'Data Pesanan';
        $data['login'] = $this->db->get_where('login', ['name' =>
        $this->session->userdata('name')])->row_array();
        $data['data_m'] = $this->data_m->index();
        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/pesan', $data);
        $this->load->view('template/footer');
    }
    public function detail($id)
    {

        $data['menu'] = $this->data_m->getPesanById($id);
        $ruang['menu'] = $this->data_m->index();
        $data['tittle'] = 'Detail Pesanan';
        $data['login'] = $this->db->get_where('login', ['name' =>
        $this->session->userdata('name')])->row_array();
        $this->session->set_userdata($data);
        // if ($ruang['ruang' == ]) {
        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('template/footer');
    }
    // else {
    //     $this->dataPesanan();
    // }
    public function menuManagement()
    {
        $data['tittle'] = 'Menu Management Admin';
        $data['login'] = $this->db->get_where('login', ['name' =>
        $this->session->userdata('name')])->row_array();
        $data['data_m'] = $this->data_m->user_menu();
        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/menuManagement', $data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $data['tittle'] = 'Tambah';
        $data['login'] = $this->db->get_where('login', ['name' =>
        $this->session->userdata('name')])->row_array();
        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/tambah', $data);
        $this->load->view('template/footer');
    }
}
