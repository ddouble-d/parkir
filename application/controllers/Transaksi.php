<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_konsumen');
        $this->load->model('M_transaksi');
        $this->load->library('form_validation');
    }

    public function index()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data['tanggal'] = date('H:i');
        $data['transaksi'] = $this->M_transaksi->getAllTransaksi();
        $data['konsumen'] = $this->M_konsumen->getAllKonsumen();
        $this->load->view('v_transaksi', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('no_polisi', 'No. Polisi', 'trim|required');
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Transaksi', 'trim|required');
        $this->form_validation->set_rules('waktu_masuk', 'Waktu Masuk', 'trim|required');
        $value  = $this->input->post('no_polisi', true);
        list($no_polisi, $konsumen) = explode(",", $value);
        if ($this->form_validation->run()) {
            $data = [
                'konsumen'  => $konsumen,
                'no_polisi' => $no_polisi,
                'tgl_masuk' => $this->input->post('tgl_masuk', true),
                'waktu_masuk' => $this->input->post('waktu_masuk', true)
            ];
            $this->M_transaksi->saveTransaksi($data);
            // $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('transaksi');
        } else {
            // $this->session->set_flashdata('gagal', 'Gagal');
            redirect('transaksi');
        }
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data = [
            'konsumen' => $this->input->post('konsumen', true),
            'jenis_kendaraan' => $this->input->post('jenis_kendaraan', true),
            'no_polisi' => $this->input->post('no_polisi', true),
            'tgl_lahir' => $this->input->post('tgl_lahir', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'no_hp' => $this->input->post('no_hp', true)
        ];
        $this->M_konsumen->updateKonsumen($data, $id);
        // $this->session->set_flashdata('flash', 'Diubah');
        redirect('konsumen');
    }

    public function delete($id)
    {
        $this->M_konsumen->deleteKonsumen($id);
        // $this->session->set_flashdata('flash', 'Dihapus');
        redirect('konsumen');
    }
}
