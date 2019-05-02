<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class sfx2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sfx_model');
    }

    public function index()
    {
        $data = array(

            'title'     => 'Playlist',
            'SFX'       => $this->sfx_model->tampil_data(),

        );

        $this->load->view('SFX', $data);
    }
}
?>