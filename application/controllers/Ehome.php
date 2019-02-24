<?php
/**
 * ENC 首页
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Ehome extends CI_Controller
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
                $data['name'] = 'MA Junjie';
                $data['positions'] = 'Founder, CEO';
                $data['desc'] = 'Mr. MA Junjie is a visiting scholar to the US Department of State International Visitor Leadership Program(2016), an economist, a cross-cultural communication expert, a columnist, and a cultural ambassador between the East and the West. He graduated from one of the two oldest and most renowned academic institutions that are dedicated to European Studies— Centre International de Formation Europeenne. He studied in Germany, France, Belgium, and Turkey, and worked at one of the most prestigious think tanks in China as a research of economics. He is convinced that contact promotes communication, communication facilitates cooperation, and cooperations brings about prosperity. His academic papers and column essays are published by L’Europe en formation, Yicai Global, China Business Journal, The Economic Observer, Financial Review, etc..';
                $data['pic'] = 'majunjie.jpg';
                break;
            case 'zheruisi':
                $data['name'] = 'Dr. Christer Ljungwall';
                $data['positions'] = 'Vice President, Head of Research';
                $data['desc'] = 'Dr. Christer Ljungwall is a renowned China political-economy specialist, and an authority in global innovation trends and policy. He is vice-president of ENC International Advisory Group, China. In previous positions he has served as Science and Innovation Counsellor at the Embassy of Sweden in PRC for more than five years. He is also affiliated Professor in economics at Copenhagen Business School, Asia Research Center. He has held positions over the years as Sr. Country Economist with the Asian Development Bank, and spent five years as visiting Professor at Peking University China Center for Economic Research. He’s the author of 30+ academic journal articles in English, 150+ reports, and five books. He is a regularly invited speaker on Chinese and Asian economic and political affairs, and innovation. He is member of the Scientific Advisory Group (the Knowledge Economy), member of The Growth Net. Dr. Ljungwall received his PhD in economics from Gothenburg University in 2003.';
                $data['pic'] = 'zheruisi.jpg';
                break;
            case 'lishuran':
                $data['name'] = 'LI Shuran';
                $data['positions'] = 'Co-founder, Head of Finance(Greater China)';
                $data['desc'] = 'Mr. LI Shuran is an expert in the financial industry, overseas investment and finance, and corporate management. He has taken positions as high-level executives in the China\'s largest scales wealth management company, multiple billions RMB financial holding, and cutting-edge private equity fund. Mr. LI Shuran obtained a Bachelor’s degree in automation from Xi’an Jiaotong University, and a Master’s degree in Law and Economics from Southwestern University of Finance and Economics.';
                $data['pic'] = 'lishuran.jpg';
                break;
            case 'mr':
                $data['name'] = 'Mikael Román';
                $data['positions'] = 'Mikael Román，Senior Advisor';
                $data['desc'] = 'Mikael Román is former Science Counsellor and Head of the Office of Science and Innovation at the Swedish Embassy in Brasília, Brazil. Originally a social scientist by training, with a PhD in political science, and subsequent post-doctoral studies at Center for International Studies, MIT, Román has spent most of his professional career working on issues related to sustainability, climate change, public policy, innovation, and competitive strategies. Mikael Román is also Associate Professor at Center for Climate Science and Policy Research (CSPR), Linköping University, Sweden.';
                $data['pic'] = "mr.jpg";
                break;
//            case 'fm':
//                $data['name'] = 'Faye MAO';
//                $data['positions'] = 'Faye MAO，Senior Advisor';
//                $data['desc'] = 'Ms. Faye Mao is an expert in linguistics and communication with a broad range of experience both in Asia and Europe. She previously taught English, Culture and Communication Studies at Sichuan University, China, for seven years and coached managers and staff at China Construction Bank, Winrock China, Areva China and Volvo China. She is also the chief editor of a prize-winning textbook for English majors in China; her food culture radio program with BBC Chinese Service won China Media Award in 2005.
//She joined the biggest Chinese investment project in Europe at its difficult time, where she received senior Chinese officials, involved in technology transfer between China and Europe, networked with private enterprises and governmental investment/export/import sectors both in China and abroad. She is currently representing  a regional government in China for Trade and Investment and Talent Liaison and involved in pan-European projects of education, art and innovations.';
//                $data['pic'] = "fm.jpg";
//                break;
            case 'hm':
                $data['name'] = 'Hartmut Marhold';
                $data['positions'] = 'Hartmut Marhold Senior Advisor';
                $data['desc'] = 'Professor Hartmut Marhold is Director of Research and Development at CIFE (Centre International de Formation Européenne), honorary professor at the University of Cologne and visiting professor at the Turkish-German University, Istanbul. He specializes in European Integration history, German European politics and federalism. He holds honorary functions in various European think tanks and was Secretary General of the European Movement Germany.';
                $data['pic'] = "hm.jpg";
                break;
            case 'tb':
                $data['name'] = 'Tobias Bütow';
                $data['positions'] = 'Tobias Bütow Senior Advisor';
                $data['desc'] = 'Tobias Bütow has studied Political Science and Contemporary History in Berlin, Hamburg and Sarajevo.
He joined IE·EI in 2010 as DAAD Lecturer, after having worked in Israel (Yad VaShem, Jerusalem), in Bosnia and Hercegovina (OSCE, Sarajevo) and Germany (German Historical Mueseum, Schwarzkopf Foundation Young Europe). 
In his research he is mainly focussing on collective violence and ethnic conflicts, as well as the European Integration of the Western Balkans. Since 2007 he is a board member of Schwarzkopf Foundation Young Europe.';
                $data['pic'] = "tb.jpg";
                break;
            case 'gsk':
                $data['name'] = 'Gonzalo Sanchez Slik';
                $data['positions'] = 'Gonzalo Sanchez Slik，Advisor';
                $data['desc'] = 'Originally from Spain and having lived and worked in China, United States and Germany, Gonzalo has experience in helping businesses scale their operations. Experience within start-ups in market research, consulting and recruitment. Based in Berlin, currently the head of business development in Latin America for Brickblock; a blockchain investment platform for real estate funds, exchange traded funds and cryptocurrency funds. Always looking to building relationships with international markets and introducing new ways for business growth. ';
                $data['pic'] = "gsk.jpg";
                break;
            case 'de':
                $data['name'] = 'Daniel Ekstrom';
                $data['positions'] = 'Daniel Ekstrom，Advisor';
                $data['desc'] = 'Cofounder of TOTEM COLLECTIVE. 
From diplomatic circles in Beijing to the Stockholm Startup scene, Daniel is an Economist and Entrepreneur interested in technological shifts and changing global value chain. Currently in Copenhagen building innovation platforms between government and the tech sector. ';
                $data['pic'] = "de.jpg";
                break;
            case 'shaohao':
                $data['name'] = 'Dr. Hao SHAO';
                $data['positions'] = 'Dr. Hao SHAO, Senior Advisor';
                $data['desc'] = 'Dr. Hao SHAO holds CFA, FRM, and is the Country CEO(Greater China) of Ayaltis AG. He started his own asset management agency after a fulfilling career as a senior fund manager in the Zurich-based Ayaltis AG, responsibly for investment and analysis in the area of FOF. He does extensive research on macroeconomics, hedge fund, due diligence, and securities portfolio management. The total asset he is managing exceeds USD 1 billion. He was awarded for his service that provided the sound returns. 
Before joining Ayaltis, Dr. Hao SHAO worked for Credit Suisse AG at its Zurich headquarters in the arbitrage models, pricing, and risk analysis of the short-term interest rate products. In addition, Dr. SHAO has abundance experience working at the SWX Swiss Exchange. Dr. SHAO got his PhD in robotics from Harbin Institute of Technology(1999), and did his post-doc in AI- Computer Vision for four years at ETH Zurich. ';
                $data['pic'] = "shaohao.jpg";
                break;
            case 'ganxueping':
                $data['name'] = 'Dr. Steven S. Kan';
                $data['positions'] = 'Dr. Steven S. Kan, Senior Advisor';
                $data['desc'] = 'A macro-monetary economist by training at Purdue University, Dr. Kan switches to specialize in Law and Economics since 1995. His academic papers appeared in The Journal of Legal Studies and Constitutional Political Economy. And, he won the best paper award in Entrepreneurship from Singapore’s Nanyang Technological University. More recently, his interests extend into different aspects of knowledge economy and intellectual property rights. He has taught in Taiwan’s Tsing Hua University, and China’s Zhejiang University and Southwestern University of Finance and Economics. Dr. Kan also has practical, field experiences as founder, CEO, and independent board director of Taiwan’s dotcom and high-tech companies. In addition, he is an inventor and holds invention patents from patent offices of Taiwan, China, and the US.';
                $data['pic'] = "ganxueping.jpg";
                break;
//            case 'rdt':
//                $data['name'] = 'Mr. Yuen Tak Tim';
//                $data['positions'] = 'Mr. Yuen Tak Tim, Anthony, MH, J. P., FChFP, Senior Advisor';
//                $data['desc'] = 'Mr. Yuen Tak Tim is Justice of the Peace(1995), recipient of the Medal of Honor(2006), and was awarded the Ten Outstanding Young Persons(1992). He holds the position as Chairman of Yue Tung Financial (Holdings) Ltd. , Council Member of Chinese University of Hong Kong, and a board member of CUHK Medical Centre Ltd.. He serves as a Responsible Officer of a licensed corporation carrying on business in type 1 (dealing in securities), type 4 (advising on securities) and type 9 (asset management) regulated activities under the Securities and Futures Ordinance (Chapter 571 of the Laws of Hong Kong) (“SFO”) and a Technical Representative of an independent financial planning company. Mr. Yuen has extensive experience in the field of wealth management and insurance in Hong Kong and China. He has been a seasoned Professional in financial and insurance fields for over 40 years. He is also passionate about community services, and he has severed a number of key government advisory bodies. ';
//                $data['pic'] = "rdt.jpg";
//                break;
            default:
                $data['name'] = '&nbsp;';
                $data['positions'] = '&nbsp;';
                $data['desc'] = '&nbsp;';


        }
        $this->load->view("company/English/team", $data);
    }

    //文章页
    public function article()
    {
        $this->load->view("company/English/article");
    }
}
