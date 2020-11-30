<?php

class M_galeri extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('galeri');
    }
    public function input_data()
    {
        $this->db->insert('galeri');
    }
}
