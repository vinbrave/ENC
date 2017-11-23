<?php
/**
 * Created by PhpStorm.
 * User: vinbrave
 * Date: 2017/11/23
 * Time: 14:58
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_team extends CI_Controller
{
    public function index()
    {
        $params = $this->input->get_post("params");

        switch ($params) {
            case 'majunjie':
                $data['name'] = "马俊杰";
                $data['desc'] = '毕业于法国高等欧洲研究国际中心（CIFE），现任该校副研究员；曾游历欧洲主要国家，并在比利时、德国、土耳其、法国深造和工作；2016年受邀参加美国国务院IVLP(International Visitors Leadership Program)访问学者项目；现任中国最著名的民间学术机构天则经济研究所国际合作部负责人。为《中国经营报》《经济观察报》，Yicai Global，Foundation For Economics Education等知名媒体撰写专栏。';
                $data['pic'] = 'public/ldd/images/ourTeam/majunjie.jpg';
                break;
            case 'zhaojiaxu':
                $data['name'] = "赵家煦";
                $data['desc'] = '美国国务院IVLP(International Visitors Leadership Program)项目访问学者，曾深度参与世界卫生组织、比尔与梅琳达盖茨基金会、中国人口福利基金会等机构的公益项目，现在媒体任职。';
                $data['pic'] = 'public/ldd/images/ourTeam/zhaojiaxu.jpg';
                break;
            default:
                $data['desc'] = '毕业于法国高等欧洲研究国际中心（CIFE），现任该校副研究员；曾游历欧洲主要国家，并在比利时、德国、土耳其、法国深造和工作；2016年受邀参加美国国务院IVLP(International Visitors Leadership Program)访问学者项目；现任中国最著名的民间学术机构天则经济研究所国际合作部负责人。为《中国经营报》《经济观察报》，Yicai Global，Foundation For Economics Education等知名媒体撰写专栏。';
                $data['pic'] = 'public/ldd/images/ourTeam/majunjie.jpg';


        }

        $this->load->view('ldd/English/ourTeam/team', $data);
    }
}
