<?php
class M_transaksi extends CI_model
{

    public function getAllTransaksi()
    {
        return $this->db->get('tb_transaksi')->result_array();
    }

    public function saveTransaksi($data)
    {
        $this->db->insert('tb_transaksi', $data);
    }

    public function updateKonsumen($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_transaksi', $data);
    }

    public function deleteKonsumen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_transaksi');
    }
}
