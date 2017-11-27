<?php
/**
 *
 * Created by PhpStorm.
 * User: vinbrave
 * Date: 2017/11/23
 * Time: 14:58
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Par_s extends CI_Controller
{
    /**
     * 马俊杰
     */
    public function majunjie()
    {
        $this->load->view('ldd/English/participants_space/majunjie');
    }

    /**
     *
     */
    public function luzhen()
    {
        $this->load->view('ldd/English/participants_space/luzhen');
    }

    public function zhaojiaxu()
    {
        $this->load->view('ldd/English/participants_space/zhaojiaxu');
    }

    public function qushang()
    {
        $this->load->view('ldd/English/participants_space/qushang');
    }

    public function xuchenxi()
    {
        $this->load->view('ldd/English/participants_space/xuchenxi');
    }

    public function hebo()
    {
        $this->load->view('ldd/English/participants_space/hebo');
    }

    public function de()
    {
        $this->load->view('ldd/English/participants_space/de');
    }

    public function mb()
    {
        $this->load->view('ldd/English/participants_space/mb');
    }


}
