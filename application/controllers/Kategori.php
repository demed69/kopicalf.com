<?php

// Function untuk kategori
class Kategori extends CI_Controller
{
    // Kategori Coffee
    public function coffee()
    {
        $data['coffee'] = $this->model_kategori->data_coffee()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('coffee', $data);
        $this->load->view('templates/footer');
    }
    // Kategori Milkbase
    public function milkbase()
    {
        $data['milkbase'] = $this->model_kategori->data_milkbase()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('milkbase', $data);
        $this->load->view('templates/footer');
    }

}
