<?php

/**
 * Created by PhpStorm.
 * User: vinbrave
 * Date: 2017/11/28
 * Time: 14:21
 */
class Wwd extends CI_Controller
{

    public function index()
    {
        $params = $this->input->get_post("params");
        switch ($params) {
            case 'so':
                $data['ename'] = 'Second Opinion';
                $data['name'] = '企业家参考';
                $data['desc'] = '一个为中国企业家精心打造的高端研讨会系列活动，通过造访各国驻华使领馆、政府机关、金融机构、大型企业以及百年家族，与国内外资深专家、官员和从业者面对面交流，为中国企业家提供目的地国家和地区投资、留学、移民、置产、旅游等本地信息。';
                $data['pic'] = 'so.jpg';
                $this->load->view("company/Chinese/wwd", $data);
                break;
            case 'tgt':
                $data['ename'] = 'The Grand Tour';
                $data['name'] = '海外见学';
                $data['desc'] = '面向中国企业家群体和大学生的两个海外见学系列活动。
企业家主题见学以学术、商业考察为形式，提升思想水平、开阔商业思路、拓展合作网络，我们将前往瑞典、德国、法国、美国等发达西方国家。
“七天留学生”为向往留学经历的大学生朋友们提供海外学校研讨、访问，与当地同龄人交流、交友，浸入式体验本地化生活和异国文化、艺术等方方面面的机会。';
                $data['pic'] = 'tgt.jpg';
                $this->load->view("company/Chinese/tgt", $data);
                break;
            case 'ldd':
                $data['ename'] = 'Leadership Dinner Date';
                $data['name'] = '领导力主题晚餐会';
                $data['desc'] = '以晚餐为载体，以研讨会和领导力培训为内容，为青年领袖和社会精英提供一个属于自己的思想交流、知识分享、建立联系、实现成长的平台。
我们相信人与人之间的沟通互联是一切新理念得以传播，一切创新得以生发，一切新项目得以孵化的基础。';
                $data['pic'] = 'ldd.jpg';
                $this->load->view("company/Chinese/ldd", $data);
                break;
            case 'road':
                $data['ename'] = 'Research & Consulting related to the Road & Belt Initiative';
                $data['name'] = '“一带一路”相关研究';
                $data['desc'] = '立足中国，放眼“丝路经济带”，为中国企业走出去提供政策观察、趋势分析、目的地国家资源引介和项目对接。我们相信一个联系更紧密的世界是一个更值得期待的世界。';
                $data['pic'] = 'road.jpg';
                $this->load->view("company/Chinese/wwd", $data);
                break;
            case 'ces':
                $data['ename'] = 'China Economy Study';
                $data['name'] = '中国经济研究';
                $data['desc'] = '问题多元，视角全面，只有客观中立，方能一览无余。从中国的角度，兼以西方的鸟瞰，以扎实的调研与理性的分析，给你值得品味的洞见。';
                $data['pic'] = 'ces.jpg';
                $this->load->view("company/Chinese/wwd", $data);
                break;
            case 'cet':
                $data['ename'] = 'China-Europe Technology Co-creation Centre';
                $data['name'] = '中欧科技共创中心';
                $data['desc'] = '从现在看未来，前瞻性的研究，为每一次激动人心的突破把脉，对引领未来的力量细细观察，洞穿机遇与挑战，为你的下一个财富“金矿”指一条明路。';
                $data['pic'] = 'cet.jpg';
                $this->load->view("company/Chinese/wwd", $data);
                break;
            default:
                break;
        }

    }
}