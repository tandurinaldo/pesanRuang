<?php

class data_m extends CI_Model
{
    public function index()
    {
        return $this->db->get('menu');
    }
    public function getPesanById($id)
    {
        return $this->db->get_where('menu', ['id' => $id])->row_array();
    }
    public function menu_sub()
    {
        return $this->db->get('menu_sub');
    }
    public function user_menu()
    {
        return $this->db->get('user_menu2');
    }
    public function user($id)
    {
        return $this->db->get_where('user_menu2', ['id' => $id])->row_array();
    }
    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu2');
    }
    public function ubahData()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nip" => $this->input->post('nip', true),
            "username" => $this->input->post('username', true),
            "opd" => $this->input->post('opd', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu2', $data);
    }
}
