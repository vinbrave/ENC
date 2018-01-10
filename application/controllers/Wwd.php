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
                $data['name'] = 'Second Opinion';
                $data['desc'] = 'Second Opinion is a series of high-end seminars in the form of visiting foreign embassies and organizations to China, government departments, financial institutions, corporates, and family businesses. In these events, Chinese entrepreneurs are provided with an exclusive opportunity to have face-to-face conversations with domestic and foreign experts, government officials, and practitioners to get better exposed to the local information about investment, overseas education, immigration, real estate, and tourism. ';
                $data['pic'] = 'so.jpg';
                $this->load->view("company/English/wwd", $data);
                break;
            case 'tgt':
                $data['name'] = 'The Grand Tour';
                $data['desc'] = 'The Grand Tour is an exclusive business and cultural exchange for Chinese entrepreneurs and young leaders.
The thematic trips for entrepreneurs focus on academic and commercial exchanges. We are going to developed countries, such as Sweden, Germany, France, the US, to seek for knowledge, experience, insights, networks and cooperation.
The “Seven-Day Overseas Student” program aims to provide a once-in-a-lifetime opportunity for young leaders to visit esteemed academic institutions, interact with their local peers, make new friends, and have an immersive experience of the local life and exotic culture. ';
                $data['pic'] = 'tgt.jpg';
                $this->load->view("company/English/tgt", $data);
                break;
            case 'ldd':
                $data['name'] = 'Leadership Dinner Date';
                $data['desc'] = 'Leadership Dinner Date is a unique networking event that offers exclusive opportunities to get exposed to leadership training, lectures, and coversations with the young leaders and social elites. It is a platform for the exchange of ideas, knowledge, networking, and self-discovery.
We believe in the human connection that enables the dissemination of ideas, which  facilitates the emergence of innovation and the hatching of new projects. 
';
                $data['pic'] = 'ldd.jpg';
                $this->load->view("company/English/ldd", $data);
                break;
            case 'road':
                $data['name'] = 'Research & Consulting related to the Road & Belt Initiative';
                $data['desc'] = 'Based in China, we look out to the Silk Road Economic Belt and offer Chinese enterprise quality policy watch, trend analysis, resource matching and project collaboration. We believe that a more closely connected world is a world that’s worth looking forward to. ';
                $data['pic'] = 'road.jpg';
                $this->load->view("company/English/wwd", $data);
                break;
            case 'ces':
                $data['name'] = 'China Economy Study';
                $data['desc'] = 'Multiple issues, comprehensive perspectives. Only by being objective, can one get an exhaustive understanding. We undertake solid research and reasonable analysis from the Chinese perspective with a bird-eye insights to give you insights of the most exciting economy in the world. 
';
                $data['pic'] = 'ces.jpg';
                $this->load->view("company/English/wwd", $data);
                break;
            case 'cet':
                $data['name'] = 'China-Europe Technology Co-creation Centre';
                $data['desc'] = 'We look to the future from the present. With forward looking research, we take the pulse of every exciting breakthrough, and provide you with opportunities and challenges that take us to tomorrow. We strive to point you in the right direction to the next “gold mine”.';
                $data['pic'] = 'cet.jpg';
                $this->load->view("company/English/wwd", $data);
                break;
            default:
                break;
        }

    }
}