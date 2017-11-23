<?php
/**
 * Created by PhpStorm.
 * User: vinbrave
 * Date: 2017/11/23
 * Time: 14:35
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function index()
    {
        $form = $this->input->get_post("params");
        $this->load->view('ldd/English/form/'.$form);
    }
}
