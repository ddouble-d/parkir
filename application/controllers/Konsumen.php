<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsumen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_konsumen');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['konsumen']        = $this->M_konsumen->getAllKonsumen();
        $this->load->view('v_konsumen', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('konsumen', 'Konsumen', 'trim|required');
        $this->form_validation->set_rules('jenis_kendaraan', 'Jenis Kendaraan', 'trim|required');
        $this->form_validation->set_rules('no_polisi', 'No. Polisi', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No. HP', 'trim|required');
        if ($this->form_validation->run()) {
            $data = [
                'konsumen' => $this->input->post('konsumen', true),
                'jenis_kendaraan' => $this->input->post('jenis_kendaraan', true),
                'no_polisi' => $this->input->post('no_polisi', true),
                'tgl_lahir' => $this->input->post('tgl_lahir', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'no_hp' => $this->input->post('no_hp', true)
            ];
            $this->M_konsumen->saveKonsumen($data);
            // $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('konsumen');
        } else {
            // $this->session->set_flashdata('gagal', 'Gagal');
            redirect('konsumen');
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
