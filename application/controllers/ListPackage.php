<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ListPackage extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Package_model');
    }

    public function index()
    {
        $data['list'] = $this->Package_model->tampil()->result();
        $this->load->view('ListPackage', $data);
    }
}
