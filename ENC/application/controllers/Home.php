<?php
/**
 * ENC 首页
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('company/English/index');
    }
}
