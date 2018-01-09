<?php $this->load->view("include/company/header"); ?>
<body>
<!-- PRELOADER -->
<img id="preloader" src="public/ldd/images/preloader.gif" alt=""/>
<!-- //PRELOADER -->
<div class="preloader_hide">
    <!-- PAGE -->
    <div id="page" class="single_page">
        <!-- HEADER -->
        <header>
            <!-- MENU BLOCK -->
            <div class="menu_block">
                <!-- CONTAINER -->
                <div class="container clearfix">
                    <!-- LOGO -->
                    <div class="logo pull-left">
                        <a href="<?php echo site_url('Home/index'); ?>"><img src="public/company/images/logo/enc.png"
                                                                             alt="ENC"/></a>
                    </div><!-- //LOGO -->
                    <!-- MENU -->
                    <div class="pull-right">
                        <nav class="navmenu center">
                            <ul>
                                <li class="first scroll_btn"><a href="<?php echo site_url('Home/index'); ?>">首页</a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- //MENU -->
                </div><!-- //MENU BLOCK -->
            </div><!-- //CONTAINER -->
        </header><!-- //HEADER -->


        <!-- BREADCRUMBS -->
        <section class="breadcrumbs_block clearfix parallax">
            <div class="container center">
                <h2><b><?php echo $name; ?></b></h2>
            </div>
        </section><!-- //BREADCRUMBS -->

        <!-- PORTFOLIO -->
        <section id="portfolio">

            <!-- CONTAINER -->
            <div class="container">

                <!-- ROW -->
                <div class="row">

                    <!-- SIDEBAR -->
                    <div class="sidebar col-lg-4 col-md-4 pull-right padbot50">
                        <!-- TEXT WIDGET -->
                        <div class="sidepanel widget_text">
<!--                            <div class="single_portfolio_post_title">--><?php //echo $name . '<br />' . $ename; ?><!--</div>-->
                            <div class="single_portfolio_post_title"><?php echo $name; ?></div>
                            <p><?php echo $desc; ?></p>
                        </div><!-- //TEXT WIDGET -->

                        <hr>
                    </div><!-- //SIDEBAR -->


                    <!-- PORTFOLIO BLOCK -->
                    <div class="portfolio_block col-lg-8 col-md-8 pull-left padbot50">

                        <!-- SINGLE PORTFOLIO POST -->
                        <div class="single_portfolio_post clearfix" data-animated="fadeInUp">

                            <!-- PORTFOLIO SLIDER -->
                            <div class="flexslider portfolio_single_slider">
                                <ul class="slides">
                                    <li><img src="public/company/images/wwd/<?php echo $pic; ?>"
                                             alt="<?php echo $name; ?>"/></li>
                                </ul>
                            </div><!-- //PORTFOLIO SLIDER -->
                        </div><!-- //SINGLE PORTFOLIO POST -->
                    </div><!-- //PORTFOLIO BLOCK -->
                </div><!-- //ROW -->
            </div><!-- //CONTAINER -->
        </section><!-- //PORTFOLIO -->
        <!-- 企业家参考 等板块 start-->
        <section id="wwd">
            <div class="container">
                <!-- CONTAINER -->
                <div style="margin-bottom: 30px">&nbsp;</div>
                <h2><b>海外见学</b></h2>
                <div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/hwjx/1.jpg" alt=""/>

                                <a class="link" href="javascript:void(0);"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 100px">
                                <a class="title" href="javascript:void(0);">与政府官员座谈</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/hwjx/2.jpg" alt=""/>
                                <a class="link" href="javascript:void(0);"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 80px">
                                <a class="title" href="javascript:void(0);">与当地商业精英交流</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/hwjx/3.jpg" alt=""/>
                                <a class="link" href="javascript:void(0);"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 100px">
                                <a class="title" href="javascript:void(0);">发现新的商业机会</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/hwjx/4.jpg" alt=""/>
                                <a class="link" href="javascript:void(0);"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 110px">
                                <a class="title" href="javascript:void(0);">体验当地美食</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/hwjx/5.jpg" alt=""/>
                                <a class="link" href="javascript:void(0);"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 110px">
                                <a class="title" href="javascript:void(0);">分享心得感受</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
                        <div class="post_item">
                            <div class="post_item_img">
                                <img src="public/company/images/wwd/hwjx/6.jpg" alt=""/>
                                <a class="link" href="javascript:void(0);"></a>
                            </div>
                            <div class="post_item_content" style="margin-left: 70px">
                                <a class="title" href="javascript:void(0);">一次回忆“少年游”的旅行</a>
                            </div>
                        </div>
                    </div>
                </div><!-- RECENT POSTS -->
            </div><!-- //CONTAINER -->
        </section><!-- //TEAM -->
        <!-- 企业家参考 等板块 end -->
    </div><!-- //PAGE -->

</div>
</body>
</html>