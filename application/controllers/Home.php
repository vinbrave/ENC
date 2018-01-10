<?php
/**
 * ENC 首页
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('company/Chinese/index');
    }

    public function team()
    {
        $params = $this->input->get_post("params");
        switch ($params) {
            case 'majunjie':
                $data['name'] = '马俊杰';
                $data['positions'] = '昂科国际创始人、CEO';
                $data['desc'] = '昂科国际（ENC International）创始人马俊杰先生是美国国务院国际访问者领导项目（IVLP）访问学者，经济学者，跨文化交流专家，专栏作家和中西方文化使者。毕业于欧洲最早的两家专注研究欧洲一体化进程的学府之一—法国高等欧洲研究国际中心（CIFE），游学德国、法国、比利时、土耳其等国，并在中国最负盛名的民间智库从事经济学研究工作。他坚信接触促进沟通，沟通增进合作，合作造就繁荣。他的学术论文和专栏作品见于L’Europe en formation，The Diplomat，Yicai Global，《中国经营报》《经济观察报》《金融博览》等国内外知名刊物。';
                $data['pic'] = 'majunjie.jpg';
                break;
            case 'zheruisi':
                $data['name'] = '哲瑞思';
                $data['positions'] = '昂科国际副总裁、研究网络主席';
                $data['desc'] = '哲瑞思博士是著名中国政治经济专家，也是全球创新趋势和政策的权威人士。他曾任瑞典驻中国大使馆科技与创新参赞，并兼任哥本哈根商学院亚洲研究中心经济学教授。他多年担任亚洲开发银行资深国家经济学家，并在北京大学中国经济研究中心担任客座教授。他是三十余篇学术期刊论文、150余份研究报告和五本学术著作的作者。他是科技顾问集团（Scientific Advisory Group）和增长网络（Growth Net）的成员。他于2003年在哥德堡大学获得经济学博士。';
                $data['pic'] = 'zheruisi.jpg';
                break;
            case 'lishuran':
                $data['name'] = '李树然';
                $data['positions'] = '昂科国际联合创始人、大中华区首席金融代表';
                $data['desc'] = '李树然，具有丰富的金融从业经历、海外投融资经验及公司管理经验，历任国内大型财富管理公司子公司副总裁、百亿级省民投公司金融产品总监、新锐私募股权基金公司副总经理。李树然先生研究生毕业于西南财经大学法律经济学专业，本科毕业于西安交通大学自动化专业，具有综合学历背景和工作经验。';
                $data['pic'] = 'lishuran.jpg';
                break;
            case 'mr':
                $data['name'] = 'Mikael Román';
                $data['positions'] = 'Mikael Román，高级顾问';
                $data['desc'] = 'Mikael Román是前瑞典驻巴西大使馆科学参赞和科技创新处主任。他拥有社会科学专业背景，获得政治学博士，并在麻省理工学院（MIT）国际研究中心做博士后研究。Román博士拥有可持续、气候变化、公共政策、创新和竞争力战略等领域的多年专业经验。他也是瑞典林雪平大学（Linköping University）气候科学和政策研究中心副教授。他对巴西和新兴经济体国家投融资战略和商业发展趋向有深入研究。';
                $data['pic'] = "mr.jpg";
                break;
            case 'fm':
                $data['name'] = 'Faye MAO';
                $data['positions'] = 'Faye MAO，高级顾问';
                $data['desc'] = '曾任职于大学七年，教授英语，文化与传播；为中国建设银行，中国温洛克，阿海珐中国和沃尔沃中国的英文公关培训师。中国高等教育教材奖获得者;与英国广播公司中文部联合主持的饮食文化广播节目‘吃东吃西’于2005年荣获中国传媒大奖。在比利时根特大学做研究员之后加入了欧洲最大的中国投资项目，负责接待中国各级官员，参与中国和欧洲之间的技术转移，与中欧企业和政府投资/出口/进口部门联络。现为中国某地方驻欧洲办事处贸易投资以及人才联络代表并参与泛欧的教育，艺术与创新项目的协调与管理。';
                $data['pic'] = "fm.jpg";
                break;
            case 'hm':
                $data['name'] = 'Hartmut Marhold';
                $data['positions'] = 'Hartmut Marhold教授，高级顾问';
                $data['desc'] = 'Hartmut Marhold教授是法国高等欧洲研究国际中心（CIFE）的研究和发展部主任，同时为德国科隆大学荣誉教授、伊斯坦布尔土耳其-德国大学客座教授。他专注研究欧洲一体化进程和联邦主义。他在诸多欧洲智库中担任职务，并在德国的欧洲运动中发挥重要作用。';
                $data['pic'] = "hm.jpg";
                break;
            case 'tb':
                $data['name'] = 'Tobias Bütow';
                $data['positions'] = 'Tobias Bütow博士，高级顾问';
                $data['desc'] = 'Tobias Bütow博士先后在柏林、汉堡和萨拉热窝研究政治学和当代史。他于201年作为DAAD讲师加入CIFE旗下欧洲学院任教。此前，他曾在以色列（犹太大屠杀纪念馆，耶路撒冷），波斯尼亚和黑塞哥维那（欧安组织驻萨拉热窝特派团）和德国（德国历史博物馆）任职。他的研究主要集中在计提包里和种族冲突，以及西巴尔干半岛欧洲一体化进程。自2007年以来，他开始担任Schwarzkopf基金会青年欧洲运动的董事。';
                $data['pic'] = "tb.jpg";
                break;
            case 'gsk':
                $data['name'] = 'Gonzalo Sanchez Slik';
                $data['positions'] = 'Gonzalo Sanchez Slik，顾问';
                $data['desc'] = 'Gonzalo Sanchez Slik先生是西班牙裔，先后在中国、美国和德国生活和任职，他在公司管理方面经验丰富。在市场调查、顾问和招募方面，他有与诸多初创企业合作的经验。现居柏林，他担任Brickblock公司的拉美商业开发主任，并在房地产基金、交易基金和数字货币基金方面有成功职业记录。他专注为商业拓展和新兴产业投资提供知识和最佳实践。';
                $data['pic'] = "gsk.jpg";
                break;
            case 'de':
                $data['name'] = 'Daniel Ekstrom';
                $data['positions'] = 'Daniel Ekstrom，顾问';
                $data['desc'] = 'Daniel Ekstrom是瑞典时尚品牌TOTEM COLLECTIVE的联合创始人。他曾担任瑞典驻华外交官，现在精力放在斯德哥尔摩和哥本哈根的初创企业发展和研究中。作为经济学家和企业家，他对技术迭代，和变革的全球价值链感兴趣。现在，他居住在哥本哈根，帮助政府和科技产业搭建创新平台。他是中瑞经贸关系的年青一代推动者。';
                $data['pic'] = "de.jpg";
                break;
            case 'shaohao':
                $data['name'] = '邵浩';
                $data['positions'] = '邵浩 博士，高级顾问';
                $data['desc'] = '邵浩博士，CFA， FRM. Ayaltis AG 大中华区总裁。目前任职于瑞士一家著名的独立资产管理公司－Ayaltis AG 大中华区总裁，主要负责公司亚太地区的全面业务，在此之前在苏黎世的母公司任职资深基金经理，负责公司的对冲基金母基金的投研相关的工作，包括经济宏观面研究，对冲基金筛选，研究，尽职调查， 资产组合的管理等等相关工作。共管理的总资产达10亿美元。其管理的基金从2008年以来，一直为客户提供稳健的，优秀的风险调整后收益，曾多次荣获欧洲及全球的年度，3年，5年等长期最佳收益大奖。
在加入Ayaltis 之前，邵浩博士任职于瑞士信贷集团苏黎世总部的外汇及短期债券的交易部门，主要负责短期利率产品的套利模型，定价，风险分析等方面的的研究工作。另外，邵浩博士还拥有多年在瑞士证券交易所的工作经验，为其对金融交易市场的深度理解提供了不可多得实战经验。 
邵浩博士1999年从哈尔滨工业大学获得机器人学的博士学位后，在位于苏黎世的欧洲名校——瑞士联邦理工大学（ETHZ）从事了四年的人工智能——计算机视觉方面的博士后研究。邵浩博士是 CFA 和 FRM 持有人。';
                $data['pic'] = "shaohao.jpg";
                break;
            case 'ganxueping':
                $data['name'] = '干学平';
                $data['positions'] = '干学平 博士，高级顾问';
                $data['desc'] = '在美国普渡大学主修总体货币经济学获得博士学位后，干学平博士在1995年后转向专精于法律与经济学。他的学术论文曾刊登于国际著名的法学研究(Journal of Legal Studies)和宪法之政治经济(Constitutional Political Economy)。他也曾获得新加坡南洋理工大学的最佳企业家精神论文奖。稍后，他的兴趣更深入知识经济与知识产权的多个层面。他曾任教于清华大学(台湾)，浙江大学，与西南财经大学。干博士并分别具有创办人、总经理、独立董事等台湾的网络商业和高科技公司之实际场域经验。除此外，他还是发明人并获得台湾、中国、和美国专利申请审查单位所颁发的发明专利证书。';
                $data['pic'] = "ganxueping.jpg";
                break;
            case 'rdt':
                $data['name'] = '阮德添';
                $data['positions'] = '阮德添 太平绅士，高级顾问';
                $data['desc'] = '阮德添先生是香港特区政府颁授荣誉勋章获得者（2006 年）、太平绅士（1995年）、香港十大杰出青年（1992年） 。现任香港中文大学校董，裕通金融（控股）有限公司主席。阮先生有40年以上金融业从业经验，历任多家跨国及香港公私营机构高级管理职务，专注个人资产管理、家族财富传承及个人健康管理服务等。他也热衷社会服务，担任港府民选公职，并为母校香港中文大学校友事务服务，出任新亚书院校友会副主席，并于2011年出任香港中文大学校友会联会主席。';
                $data['pic'] = "rdt.jpg";
                break;
            default:
                $data['name'] = '&nbsp;';
                $data['positions'] = '&nbsp;';
                $data['desc'] = '&nbsp;';


        }
        $this->load->view("company/Chinese/team", $data);
    }

    //文章页
    public function article()
    {
        $this->load->view("company/Chinese/article");
    }
}
