<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function home()
    {
        //echo 'LDD HOME';
        $this->load->view('sweden/index');
    }
}
