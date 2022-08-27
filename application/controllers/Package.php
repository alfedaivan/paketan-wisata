<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Package extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->model('Package_model');

    }

    public function simpan($id_alternatif) {
        $data = [
            'id_alternatif' => $id_alternatif
        ];
        $this->Package_model->simpan($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('package');
    }

    public function index()
    {
        $data = [
            'page' => "Package",
            'list' => $this->Package_model->tampil()->result(),
        ];
        $this->load->view('package/index', $data);
    }

    public function detail($id_package, $id_alternatif)
    {
        $data = [
            'page' => "Package",
            'detail' => $this->Package_model->detail($id_package)->row(),
            'sub_detail' => $this->Package_model->sub_detail($id_alternatif)->result(),
        ];
        $this->load->view('package/detail_package', $data);
    }

    public function simpan_deskripsi() {
        $id_package = $this->input->post('id_package');

        $data = [
            'deskripsi' => $this->input->post('detail_deskripsi')
        ];
        $this->Package_model->simpan_deskripsi($id_package, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('package');
    }

    public function delete_package($id_package) {
        $this->Package_model->delete($id_package);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		redirect('package');
    }
}
    
    /* End of file Package.php */
