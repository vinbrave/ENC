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

    public function team()
    {
        $params = $this->input->get_post("params");
        switch ($params) {
            case 'majunjie':
                $data['name'] = '马俊杰';
                $data['desc'] = '马俊杰先生，昂科创始人、总裁
昂科（ENC）创始人马俊杰先生是美国国务院国际访问者领导力项目（IVLP）访问学者，经济学者，专栏作家和中西方文化使者。毕业于欧洲最早的两家专注研究欧洲一体化进程的学府之一—法国高等欧洲研究国际中心（CIFE），游学德国、法国、比利时、土耳其等国，并在中国最负盛名的民间智库从事经济学研究工作。他坚信接触促进沟通，沟通增进合作，合作造就繁荣。他的学术论文和专栏作品见于L’Europe en formation，The Diplomat，Yicai Global，《中国经营报》《经济观察报》《金融博览》等国内外知名刊物。';
                $data['pic'] = 'majunjie.jpg';
                break;
            case 'zheruisi':
                $data['name'] = '哲瑞思博士';
                $data['desc'] = 'Dr. Christer Ljungwall is a renowned China political-economy specialist, and an authority in global innovation trends and policy. He is vice-president of ENC International Advisory Group, China. In previous positions he has served as Science and Innovation Counsellor at the Embassy of Sweden in PRC for more than give years. He is also affiliated Professor in economics at Copenhagen Business School, Asia Research Center. He has held positions over the years as Sr. Country Economist with the Asian Development Bank, and spent five years as visiting Professor at Peking University China Center for Economic Research. He’s the author of 30+ academic journal articles in English, 150+ reports, and five books. He is a regularly invited speaker on Chinese and Asian economic and political affairs, and innovation. He is member of the Scientific Advisory Group (the Knowledge Economy), member of The Growth Net. Dr. Ljungwall received his PhD in economics from Gothenburg University in 2003.';
                $data['pic'] = 'zheruisi.jpg';
                break;
            case 'mr':
                $data['name'] = 'Mikael Román';
                $data['desc'] = 'Mikael Román is former Science Counsellor and Head of the Office of Science and Innovation at the Swedish Embassy in Brasília, Brazil. Originally a social scientist by training, with a PhD in political science, and subsequent post-doctoral studies at Center for International Studies, MIT, Román has spent most of his professional career working on issues related to sustainability, climate change, public policy, innovation, and competitive strategies. Mikael Román is also Associate Professor at Center for Climate Science and Policy Research (CSPR), Linköping University, Sweden.';
                $data['pic'] = "mr.jpg";
                break;
            case 'fm':
                $data['name'] = 'Faye MAO';
                $data['desc'] = 'Faye MAO，高级顾问
曾任职于大学七年，教授英语，文化与传播；为中国建设银行，中国温洛克，阿海珐中国和沃尔沃中国的英文公关培训师。中国高等教育教材奖获得者;与英国广播公司中文部联合主持的饮食文化广播节目‘吃东吃西’于2005年荣获中国传媒大奖。在比利时根特大学做研究员之后加入了欧洲最大的中国投资项目，负责接待中国各级官员，参与中国和欧洲之间的技术转移，与中欧企业和政府投资/出口/进口部门联络。现为中国某地方驻欧洲办事处贸易投资以及人才联络代表并参与泛欧的教育，艺术与创新项目的协调与管理。';
                $data['pic'] = "fm.jpg";
                break;
            case 'hm':
                $data['name'] = 'Hartmut Marhold';
                $data['desc'] = 'Hartmut Marhold教授，高级顾问
Professor Hartmut Marhold is Director of Research and Development at CIFE (Centre International de Formation Européenne), honorary professor at the University of Cologne and visiting professor at the Turkish-German University, Istanbul. He specializes in European Integration history, German European politics and federalism. He holds honorary functions in various European think tanks and was Secretary General of the European Movement Germany.';
                $data['pic'] = "hm.jpg";
                break;
            case 'tb':
                $data['name'] = 'Tobias Bütow';
                $data['desc'] = 'Tobias Bütow博士，高级顾问
Tobias Bütow has studied Political Science and Contemporary History in Berlin, Hamburg and Sarajevo.
He joined IE·EI in 2010 as DAAD Lecturer, after having worked in Israel (Yad VaShem, Jerusalem), in Bosnia and Hercegovina (OSCE, Sarajevo) and Germany (German Historical Mueseum, Schwarzkopf Foundation Young Europe). 
In his research he is mainly focussing on collective violence and ethnic conflicts, as well as the European Integration of the Western Balkans. Since 2007 he is a board member of Schwarzkopf Foundation Young Europe.';
                $data['pic'] = "tb.jpg";
                break;
            case 'gsk':
                $data['name'] = 'Gonzalo Sanchez Slik';
                $data['desc'] = 'Gonzalo Sanchez Slik，顾问
Originally from Spain and having lived and worked in China, United States and Germany, Gonzalo has experience in helping businesses scale their operations. Experience within start-ups in market research, consulting and recruitment. Based in Berlin, currently the head of business development in Latin America for Brickblock; a blockchain investment platform for real estate funds, exchange traded funds and cryptocurrency funds. Always looking to building relationships with international markets and introducing new ways for business growth. ';
                $data['pic'] = "gsk.jpg";
                break;
            case 'de':
                $data['name'] = 'Daniel Ekstrom';
                $data['desc'] = 'Daniel Ekstrom，顾问
Cofounder of TOTEM COLLECTIVE. 
From diplomatic circles in Beijing to the Stockholm Startup scene, Daniel is an Economist and Entrepreneur interested in technological shifts and changing global value chain. Currently in Copenhagen building innovation platforms between government and the tech sector. ';
                $data['pic'] = "de.jpg";
                break;


        }
        $this->load->view("company/English/team", $data);
    }
}
