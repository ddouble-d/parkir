<?php
class M_konsumen extends CI_model
{

    public function getAllKonsumen()
    {
        return $this->db->get('tb_konsumen')->result_array();
    }

    public function saveKonsumen($data)
    {
        $this->db->insert('tb_konsumen', $data);
    }

    public function updateKonsumen($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_konsumen', $data);
    }

    public function deleteKonsumen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_konsumen');
    }
}
