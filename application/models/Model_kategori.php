<?php
// Model Kategori
class Model_kategori extends CI_Model
{
    public function data_coffee()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'coffee'));
    }
    public function data_milkbase()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'milkbase'));
    }
}
