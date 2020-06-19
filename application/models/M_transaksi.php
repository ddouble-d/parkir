<?php
class M_transaksi extends CI_model
{
    public function getAllTransaksi()
    {
        return $this->db->query("SELECT * FROM tb_transaksi JOIN tb_konsumen on tb_konsumen.no_polisi = tb_transaksi.no_polisi")->result_array();
    }

    public function saveTransaksi($data)
    {
        $this->db->insert('tb_transaksi', $data);
    }

    public function updateTransaksi($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_transaksi', $data);
    }
}
