<?php $this->load->view("include/company/eheader"); ?>
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
                                <li class="first active scroll_btn"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li class="scroll_btn"><a href="#wwd">What Do We Do</a></li>
                                <li class="scroll_btn"><a href="#news">About Us</a></li>
                                <li class="scroll_btn"><a href="#team">Our Team</a></li>
                                <li class="sub-menu">
                                    <a href="javascript:void(0);">Language</a>
                                    <ul>
                                        <li><a href="<?php echo site_url('Home/index') ?>">中文</a></li>
                                        <li><a href="<?php echo site_url('EHome/index') ?>">English</a></li>
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
                <li class="selected">
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
                    <a href="<?php echo site_url('Ehome/article'); ?>">
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
                <h2><b>What Do We Do</b>: &nbsp;Activities</h2>
                <div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/1.jpg" alt=""/>
                                <a class="link" href="<?php echo site_url('Wwd/index?params=so'); ?>"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 100px">
                                <a class="title" href="javascript:void(0);">Second Opinion</a>
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
                            <div class="post_item_content" style="margin-left: 100px">
                                <a class="title" href="javascript:void(0);">The Grand Tour</a>
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
                            <div class="post_item_content" style="margin-left: 70px">
                                <a class="title" href="<?php echo site_url('ldd/Index/home'); ?>">Leadership Dinner
                                    Date</a>
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
                <h2><b>What Do We Do</b>: &nbsp;Research</h2>
                <div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/4.jpg" alt=""/>
                                <a class="link" href="<?php echo site_url('Wwd/index?params=road'); ?>"></a>
                            </div>
                            <div class="post_item_content">
                                <a class="title" href="javascript:void(0);">Research & Consulting related to the Road &
                                    Belt Initiative</a>
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
                            <div class="post_item_content" style="margin-left: 70px">
                                <a class="title" href="javascript:void(0);">China Economy Study</a>
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
                            <div class="post_item_content">
                                <a class="title" href="javascript:void(0);">China-Europe Technology Co-Creation
                                    Centre</a>
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
                <h2><b>About Us</b></h2>

                <!-- TESTIMONIALS -->
                <div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">

                    <!-- TESTIMONIALS SLIDER -->
                    <div class="owl-demo owl-carousel testim_slider">

                        <!-- TESTIMONIAL1 -->
                        <div class="item">
                            <div class="testim_content">
                                <!--                                <p style="text-indent: 2em">-->
                                <p>ENC International Advisory Group is a research network and international economic and
                                    cultural development agency that consists of scholars, entrepreneurs, and former
                                    government officials and diplomats from China, US, Europe, Latin America, and
                                    Africa. It aims to facilitate the in-depth understanding between China and the west
                                    to achieve development and prosperity through academic exchanges, cultural
                                    exchanges, commercial cooperation, and technology transfer.
                                </p>
                                <p>ENC International Advisory Group has teams in the global financial centre of London
                                    City, Hong Kong Centre, innovation centre of Stockholm, the emerging market of
                                    Brazil to provide our diverse clients from government departments, large scale
                                    corporates and industrial associations, innovative high-tech firms, and financial
                                    institutions with financial consulting, investment banking(especially overseas
                                    merger and acquisition), asset management, and cross-border capital arbitrage, etc..
                                </p>
                                <p>ENC International Advisory Group helps Chinese entrepreneurs to better understand the
                                    world and explore new opportunities. It combines ideas and actions, clears new
                                    paths, and expands the horizon. </p>
                                <p>ENC International Advisory Group also provide leadership training, language and
                                    cultural exchanges, and oversea short-term exchanges programs for Chinese young
                                    leaders. We help them fly!
                                </p>
                                <p>ENC International Advisory Group rejoices in the genuine communication between China
                                    and the west, and the mutual prosperity. </p>
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
                <h2><b>Our Team</b></h2>
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
                                    <a href="<?php echo site_url('Ehome/team?params=majunjie') ?>">Mr. MA Junjie</a>
                                    <span style="color: #fff">Founder, CEO</span>
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
                                    <a href="<?php echo site_url('Ehome/team?params=zheruisi') ?>">Dr. Christer Ljungwall</a>
                                    <span style="color: #fff">Vice President, Head of Research</span>
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
                                    <a href="<?php echo site_url('Ehome/team?params=lishuran') ?>">LI Shuran</a>
                                    <span style="color: #fff">Co-founder, Head of Finance(Greater China)</span>
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
                                    <a href="<?php echo site_url('Ehome/team?params=mr') ?>">Mikael Román</a>
                                    <span style="color: #fff">Mikael Román，Senior Advisor</span>
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
<!--                                    <a href="--><?php //echo site_url('Ehome/team?params=fm') ?><!--">Faye MAO</a>-->
<!--                                    <span style="color: #fff">Faye MAO，Senior Advisor</span>-->
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
                                    <a href="<?php echo site_url('Ehome/team?params=hm') ?>">Hartmut Marhold</a>
                                    <span style="color: #fff">Hartmut Marhold Senior Advisor</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work5 -->

                    <!-- work6 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/tb.jpg" alt=""/>
                                <a class="zoom" href="<?php echo site_url('Ehome/team?params=tb') ?>"
                                   rel="prettyPhoto[portfolio1]"></a>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Ehome/team?params=tb') ?>">Tobias Bütow</a>
                                    <span style="color: #fff">Tobias Bütow Senior Advisor</span>
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
                                    <a href="<?php echo site_url('Ehome/team?params=gsk') ?>">Gonzalo Sanchez Slik</a>
                                    <span style="color: #fff">Gonzalo Sanchez Slik，Advisor</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work7 -->
                    <!-- work8 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/de.jpg" alt=""/>
                                <a class="zoom" href="<?php echo site_url('Ehome/team?params=de') ?>"
                                   rel="prettyPhoto[portfolio1]"></a>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Ehome/team?params=de') ?>">Daniel Ekstrom</a>
                                    <span style="color: #fff">Daniel Ekstrom，Advisor</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work8 -->
                    <!-- work9 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/shaohao.jpg" alt=""/>
                                <a class="zoom" href="<?php echo site_url('Ehome/team?params=shaohao') ?>"
                                   rel="prettyPhoto[portfolio1]"></a>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Ehome/team?params=shaohao') ?>">Dr. Hao SHAO</a>
                                    <span style="color: #fff">Dr. Hao SHAO, Senior Advisor</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work9 -->
                    <!-- work10 -->
                    <div class="item">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="public/company/images/team/ganxueping.jpg" alt=""/>
                                <a class="zoom" href="<?php echo site_url('Ehome/team?params=ganxueping') ?>"
                                   rel="prettyPhoto[portfolio1]"></a>
                            </div>
                            <div class="work_description">
                                <div class="work_descr_cont">
                                    <a href="<?php echo site_url('Ehome/team?params=ganxueping') ?>">Dr. Steven S. Kan</a>
                                    <span style="color: #fff">Dr. Steven S. Kan, Senior Advisor</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- //work10 -->
                    <!-- work11 -->
<!--                    <div class="item">-->
<!--                        <div class="work_item">-->
<!--                            <div class="work_img">-->
<!--                                <img src="public/company/images/team/rdt.jpg" alt=""/>-->
<!--                                <a class="zoom" href="--><?php //echo site_url('Ehome/team?params=rdt') ?><!--"-->
<!--                                   rel="prettyPhoto[portfolio1]"></a>-->
<!--                            </div>-->
<!--                            <div class="work_description">-->
<!--                                <div class="work_descr_cont">-->
<!--                                    <a href="--><?php //echo site_url('Ehome/team?params=rdt') ?><!--">Mr. Yuen Tak Tim</a>-->
<!--                                    <span style="color: #fff">Mr. Yuen Tak Tim, Anthony, MH, J. P., FChFP, Senior Advisor</span>-->
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
                                <!--                                <p style="font-size: 16px">人和致荣</p>-->
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <p style="font-size: 16px">ENC International Advisory Group is dedicated to bridging China
                                and the world. Its mission is to facilitate Chinese entrepreneurs and young leaders to
                                “go out”, to enhance the communication of ideas, knowledge, leadership, and best
                                practices between the East and the West, and to enable better exchange and integration
                                of resources. ENC International Advisory Group belies that the genuine connection
                                between people is the foundation for prosperity.
                            </p>
                            <!--                            <p style="font-size: 16px">“In Human Connection We Thrive.”</p>-->
                            <p style="font-size: 16px"> “In Human Connection We Thrive.”</p>

                        </div>
                    </div><!-- //LEAVE A COMMENT -->
                    <!-- ROW end-->
                </div>
            </div><!-- //BLOG BLOCK -->
        </section><!-- //CONTACTS -->

    </div><!-- //PAGE -->

</div>
<script src="public/sweden/js/hero-slider-script.js"></script>
<script>

    $(document).ready(function () {

        /* Auto play bootstrap carousel
        * http://stackoverflow.com/questions/13525258/twitter-bootstrap-carousel-autoplay-on-load
        -----------------------------------------------------------------------------------------*/
        $('.carousel').carousel({
            interval: 3000
        })

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