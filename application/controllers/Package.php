<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Package extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('form_validation');
        // $this->load->model('User_model');

    }

    public function index()
    {
        $data = [
            'page' => "Package",
            // 'list' => $this->User_model->tampil(),
            // 'user_level' => $this->User_model->user_level()

        ];
        $this->load->view('package/index', $data);
    }

    public function detail()
    {
        // $alternatif = $this->Alternatif_model->show($id_alternatif);
        $data = [
            'page' => "Package",
            // 'alternatif' => $alternatif
        ];
        $this->load->view('package/detail_package', $data);
    }
}
    
    /* End of file Kategori.php */
