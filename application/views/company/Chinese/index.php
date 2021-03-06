<?php $this->load->view("include/company/header"); ?>
<body>


<!-- PRELOADER -->
<img id="preloader" src="public/ldd/images/preloader.gif" alt=""/>
<!-- //PRELOADER -->
<div class="preloader_hide">

    <!-- PAGE -->
    <div id="page">

        <!-- HEADER -->
        <header>

            <!-- MENU BLOCK -->
            <div class="menu_block">

                <!-- CONTAINER -->
                <div class="container clearfix">

                    <!-- LOGO -->
                    <div class="logo pull-left">
                        <!--<a href="index.html" ><span class="b1">w</span><span class="b2">h</span><span class="b3">i</span><span class="b4">t</span><span class="b5">e</span></a>-->
                        <a href="#"><img src="public/company/images/logo/enc.png" alt="ENC"/></a>
                    </div><!-- //LOGO -->
                    <!-- MENU -->
                    <div class="pull-right">
                        <nav class="navmenu center">
                            <ul>
                                <li class="first active scroll_btn"><a href="<?php echo base_url(); ?>">首页</a></li>
                                <li class="scroll_btn"><a href="#wwd">我们做什么</a></li>
                                <li class="scroll_btn"><a href="#news">关于我们</a></li>
                                <li class="scroll_btn"><a href="#team">我们的团队</a></li>
                                <li class="sub-menu">
                                    <a href="javascript:void(0);">语言</a>
                                    <ul>
                                        <li><a href="<?php echo site_url('Home/index') ?>">中文</a></li>
                                        <li><a href="<?php echo site_url('Ehome/index') ?>">English</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- //MENU -->
                </div><!-- //MENU BLOCK -->
            </div><!-- //CONTAINER -->
        </header><!-- //HEADER -->

        <section class="cd-hero" id="home">
            <ul class="cd-hero-slider autoplay">
                <li class="selected">
                    <div class="cd-full-width">
                    </div>
                </li>
                <li>
                    <a href="<?php echo site_url('sweden/Index/home'); ?>">
                        <div class="cd-full-width">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('sweden/Index/home'); ?>">
                        <div class="cd-full-width">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Home/article'); ?>">
                        <div class="cd-full-width">
                        </div>
                    </a>
                </li>
            </ul> <!-- .cd-hero-slider -->

            <div class="cd-slider-nav">
                <nav>
                    <span class="cd-marker item-1"></span>

                    <ul>
                        <li class="selected"><a href="#0"></a></li>
                        <li><a href="#0"></a></li>
                        <li><a href="#0"></a></li>
                        <li><a href="#0"></a></li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- 企业家参考 等板块 start-->
        <section id="wwd">
            <div class="container">
                <!-- CONTAINER -->
                <div style="margin-bottom: 30px">&nbsp;</div>
                <h2><b>我们做什么</b>: &nbsp;笃行</h2>
                <div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/1.jpg" alt=""/>
                                <a class="link" href="<?php echo site_url('Wwd/index?params=so'); ?>"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 140px">
                                <a class="title" href="javascript:void(0);">企业家参考</a>
                                <!--                                <ul class="post_item_inf">-->
                                <!--                                    <li><a href="javascript:void(0);">Second Opinion</a></li>-->
                                <!--                                </ul>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/2.jpg" alt=""/>
                                <a class="link" href="<?php echo site_url('Wwd/index?params=tgt'); ?>"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 140px">
                                <a class="title" href="javascript:void(0);">海外见学</a>
                                <!--                                <ul class="post_item_inf">-->
                                <!--                                    <li><a href="javascript:void(0);">The Grand Tour</a></li>-->
                                <!--                                </ul>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/3.jpg" alt=""/>
                                <a class="link" href=""></a>
                                <a class="link" href="<?php echo site_url('Wwd/index?params=ldd'); ?>"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 100px">
                                <a class="title" href="<?php echo site_url('ldd/Index/home'); ?>">领导力主题晚餐会</a>
                                <!--                                <ul class="post_item_inf">-->
                                <!--                                    <li><a href="javascript:void(0);">Leadership Dinner Date</a></li>-->
                                <!--                                </ul>-->
                            </div>
                        </div>
                    </div>
                </div><!-- RECENT POSTS -->
            </div><!-- //CONTAINER -->
        </section><!-- //TEAM -->
        <!-- 企业家参考 等板块 end -->
        <!-- 一带一路 等板块 start-->
        <section id="wwd">
            <div class="container">
                <!-- CONTAINER -->
                <div style="margin-bottom: 30px">&nbsp;</div>
                <h2><b>我们做什么</b>: &nbsp;慎思</h2>
                <div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/4.jpg" alt=""/>
                                <a class="link" href="<?php echo site_url('Wwd/index?params=road'); ?>"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 80px">
                                <a class="title" href="javascript:void(0);">“一带一路”相关研究</a>
                                <!--                                <ul class="post_item_inf">-->
                                <!--                                    <li><a href="javascript:void(0);">Research & Consulting related to the Road & Belt-->
                                <!--                                            Initiative</a></li>-->
                                <!--                                </ul>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/5.jpg" alt=""/>
                                <a class="link" href="<?php echo site_url('Wwd/index?params=ces'); ?>"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 120px">
                                <a class="title" href="javascript:void(0);">中国经济研究</a>
                                <!--                                <ul class="post_item_inf">-->
                                <!--                                    <li><a href="javascript:void(0);">China Economy Study</a></li>-->
                                <!--                                </ul>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/6.jpg" alt=""/>
                                <a class="link" href="<?php echo site_url('Wwd/index?params=cet'); ?>"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 100px">
                                <a class="title" href="javascript:void(0);">中欧科技共创中心</a>
                                <!--                                <ul class="post_item_inf">-->
                                <!--                                    <li><a href="javascript:void(0);">China-Europe Technology Co-creation Centre-->
                                <!--                                        </a></li>-->
                                <!--                                </ul>-->
                            </div>
                        </div>
                    </div>
                </div><!-- RECENT POSTS -->
            </div><!-- //CONTAINER -->
        </section><!-- //TEAM -->
        <!-- 一带一路 等板块 end-->
        <!-- 关于我们 start-->
        <section id="news">

            <!-- CONTAINER -->
            <div class="container">
                <h2><b>关于我们</b></h2>

                <!-- TESTIMONIALS -->
                <div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">

                    <!-- TESTIMONIALS SLIDER -->
                    <div class="owl-demo owl-carousel testim_slider">

                        <!-- TESTIMONIAL1 -->
                        <div class="item">
                            <div class="testim_content">
                                <!--                                <p style="text-indent: 2em">-->
                                <p>昂科国际（ENC International Advisory Group）是由中、美、欧、拉美和非洲多地学者、企业家和前政府官员组成的研究员网络与国际经济、文化发展机构，旨在通过学术研究、人文交流、商业合作和科技引进，促进中国与西方世界的深层次了解，共同实现发展与繁荣。</p>
                                <p>昂科国际（ENC International Advisory Group）在国际金融中心伦敦金融城、香港中环，全球创新中心瑞典斯德哥尔摩，新兴市场巴西等地分别拥有并深度合作的资深海外金融团队，致力于为中、欧等国的政府部门、大型企业和行业协会、创新高精尖企业、金融机构等多元客户提供广泛的财务咨询、投资银行(特别是海外并购业务)、资产管理、跨境资金套利等金融服务。</p>
                                <p>我们以助力中国企业家了解世界、拓展机遇为宗旨，思考与行动合二为一，打开思路，扩展地平线。</p>
                                <p>我们同时也为中国青少年提供国内领导力培训、外国语言文化交流活动和海外短期见学机会，为年轻的梦想插上翅膀。</p>
                                <p>昂科国际（ENC International Advisory Group）促进中西方真诚沟通，共享繁荣。</p>
                            </div>
                        </div><!-- TESTIMONIAL1 -->
                    </div><!-- TESTIMONIALS SLIDER -->
                </div><!-- //TESTIMONIALS -->

                <!-- RECENT POSTS -->
            </div><!-- //CONTAINER -->
        </section><!-- //NEWS -->


        <!-- 关于我们 end-->


        <!-- PROJECTS -->
        <section id="team" class="padbot20">

            <!-- CONTAINER -->
            <div class="container">
                <h2><b>我们的团队</b></h2>
            </div><!-- //CONTAINER -->


            <div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
                <!-- PROJECTS SLIDER -->
                <div class="owl-demo owl-carousel projects_slider">

                    <!-- work1 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/majunjie.jpg" alt=""/>

                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Home/team?params=majunjie') ?>">马俊杰</a>
                                    <span style="color: #fff">昂科国际创始人、CEO</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work1 -->

                    <!-- work2 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/zheruisi.jpg" alt=""/>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Home/team?params=zheruisi') ?>">哲瑞思</a>
                                    <span style="color: #fff">昂科国际副总裁、研究网络主席</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work2 -->

                    <!-- work2 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/lishuran.jpg" alt=""/>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Home/team?params=lishuran') ?>">李树然</a>
                                    <span style="color: #fff">昂科国际联合创始人、大中华区首席金融代表</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work2 -->

                    <!-- work3 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/mr.jpg" alt=""/>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Home/team?params=mr') ?>">Mikael Román</a>
                                    <span style="color: #fff">Mikael Román，高级顾问</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work3 -->

                    <!-- work4 -->
<!--                    <div class="item">-->
<!--                        <div class="work_item">-->
<!--                            <div class="work_img">-->
<!--                                <img src="public/company/images/team/fm.jpg" alt=""/>-->
<!--                            </div>-->
<!--                            <div class="work_description">-->
<!--                                <div class="work_descr_cont">-->
<!--                                    <a href="--><?php //echo site_url('Home/team?params=fm') ?><!--">Faye MAO</a>-->
<!--                                    <span style="color: #fff">Faye MAO，高级顾问</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- //work4 -->

                    <!-- work5 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/hm.jpg" alt=""/>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Home/team?params=hm') ?>">Hartmut Marhold</a>
                                    <span style="color: #fff">Hartmut Marhold教授，高级顾问</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work5 -->

                    <!-- work6 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/tb.jpg" alt=""/>
                                <a class="zoom" href="<?php echo site_url('Home/team?params=tb') ?>"
                                   rel="prettyPhoto[portfolio1]"></a>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Home/team?params=tb') ?>">Tobias Bütow</a>
                                    <span style="color: #fff">Tobias Bütow博士，高级顾问</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work6 -->

                    <!-- work7 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/gsk.jpg" alt=""/>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Home/team?params=gsk') ?>">Gonzalo Sanchez Slik</a>
                                    <span style="color: #fff">Gonzalo Sanchez Slik，顾问</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work7 -->
                    <!-- work8 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/de.jpg" alt=""/>
                                <a class="zoom" href="<?php echo site_url('Home/team?params=de') ?>"
                                   rel="prettyPhoto[portfolio1]"></a>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Home/team?params=de') ?>">Daniel Ekstrom</a>
                                    <span style="color: #fff">Daniel Ekstrom，顾问</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work8 -->
                    <!-- work9 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/shaohao.jpg" alt=""/>
                                <a class="zoom" href="<?php echo site_url('Home/team?params=shaohao') ?>"
                                   rel="prettyPhoto[portfolio1]"></a>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Home/team?params=shaohao') ?>">邵浩</a>
                                    <span style="color: #fff">邵浩 博士，高级顾问</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work9 -->
                    <!-- work10 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/ganxueping.jpg" alt=""/>
                                <a class="zoom" href="<?php echo site_url('Home/team?params=ganxueping') ?>"
                                   rel="prettyPhoto[portfolio1]"></a>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Home/team?params=ganxueping') ?>">干学平</a>
                                    <span style="color: #fff">干学平 博士，高级顾问</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work10 -->
                    <!-- work11 -->
<!--                    <div class="item">-->
<!--                        <div class="work_item">-->
<!--                            <div class="work_img">-->
<!--                                <img src="public/company/images/team/rdt.jpg" alt=""/>-->
<!--                                <a class="zoom" href="--><?php //echo site_url('Home/team?params=rdt') ?><!--"-->
<!--                                   rel="prettyPhoto[portfolio1]"></a>-->
<!--                            </div>-->
<!--                            <div class="work_description">-->
<!--                                <div class="work_descr_cont">-->
<!--                                    <a href="--><?php //echo site_url('Home/team?params=rdt') ?><!--">阮德添</a>-->
<!--                                    <span style="color: #fff">阮德添 太平绅士，高级顾问</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- //work11 -->

                </div><!-- //PROJECTS SLIDER -->
            </div>
            <!-- OUR CLIENTS -->
            <!--            友情链接-->
            <!--            <div class="our_clients">
            <!---->
            <!--                <!-- CONTAINER -->
            <!--                <div class="container" data-animated="fadeInUp">-->
            <!---->
            <!--                    <!-- ROW -->
            <!--                    <div class="row">
            <!--                        <div class="col-lg-2 col-md-2 col-sm-2 client_img">-->
            <!--                            <img src="public/company/images/clients/1.jpg" alt=""/>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-2 col-md-2 col-sm-2 client_img">-->
            <!--                            <img src="public/company/images/clients/2.jpg" alt=""/>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-2 col-md-2 col-sm-2 client_img">-->
            <!--                            <img src="public/company/images/clients/3.jpg" alt=""/>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-2 col-md-2 col-sm-2 client_img">-->
            <!--                            <img src="public/company/images/clients/4.jpg" alt=""/>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-2 col-md-2 col-sm-2 client_img">-->
            <!--                            <img src="public/company/images/clients/5.jpg" alt=""/>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-2 col-md-2 col-sm-2 client_img">-->
            <!--                            <img src="public/company/images/clients/6.jpg" alt=""/>-->
            <!--                        </div>-->
            <!--                    </div><!-- //ROW -->
            <!--                </div><!-- CONTAINER -->
            <!--            </div><!-- //OUR CLIENTS -->
        </section><!-- //PROJECTS -->

        <section id="contacts">
            <!-- CONTAINER -->
            <div class="container">
                <!-- ROW -->
                <div class="row">
                    <!-- LEAVE A COMMENT -->
                    <div class="leave_comment" data-animated="fadeInUp">
                        <div style="margin-bottom: 30px">&nbsp;</div>
                        <!--                        <h2><b>关于我们</b></h2>-->
                        <div class="col-lg-4 col-md-4">
                            <img src="public/company/images/logo/enc.png">
                            <div class="comment_note">
                                <p style="font-size: 16px">In Human Connection We Thrive.</p>
                                <p style="font-size: 16px">人和致荣</p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <p style="font-size: 16px">昂科国际（ENC International Advisory Group）
                                致力于沟通中国与世界，促进中国企业家、青年领袖“走出去”，加强中西方理念、知识、领导力，和最佳实践的传播，与资源的互换整合。昂科国际坚信人与人之间真诚的联系是繁荣的基础。</p>
                            <!--                            <p style="font-size: 16px">“In Human Connection We Thrive.”</p>-->
                            <!--                            <p style="font-size: 16px">“人和致荣”</p>-->

                        </div>
                    </div><!-- //LEAVE A COMMENT -->
                    <!-- ROW end-->
                </div>
            </div><!-- //BLOG BLOCK -->
        </section><!-- //CONTACTS -->

    </div><!-- //PAGE -->

</div>
<script src="public/sweden/js/hero-slider-script.js"></script>
<script type="text/javascript">

    $(document).ready(function () {

        /* Auto play bootstrap carousel
        * http://stackoverflow.com/questions/13525258/twitter-bootstrap-carousel-autoplay-on-load
        -----------------------------------------------------------------------------------------*/
        $('.carousel').carousel({
            interval: 3000
        });

        /* Enable swiping carousel for tablets and mobile
         * http://lazcreative.com/blog/adding-swipe-support-to-bootstrap-carousel-3-0/
         ---------------------------------------------------------------------------------*/
        if ($(window).width() <= 991) {
            $(".carousel-inner").swipe({
                //Generic swipe handler for all directions
                swipeLeft: function (event, direction, distance, duration, fingerCount) {
                    $(this).parent().carousel('next');
                },
                swipeRight: function () {
                    $(this).parent().carousel('prev');
                },
                //Default is 75px, set to 0 for demo so any distance triggers swipe
                threshold: 0
            });
        }

        /* Handle window resize */
        $(window).resize(function () {
            if ($(window).width() <= 991) {
                $(".carousel-inner").swipe({
                    //Generic swipe handler for all directions
                    swipeLeft: function (event, direction, distance, duration, fingerCount) {
                        $(this).parent().carousel('next');
                    },
                    swipeRight: function () {
                        $(this).parent().carousel('prev');
                    },
                    //Default is 75px, set to 0 for demo so any distance triggers swipe
                    threshold: 0
                });
            }
        });

    });

</script>
</body>
</html>