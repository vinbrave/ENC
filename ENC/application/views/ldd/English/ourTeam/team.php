<?php $this->load->view("include/ldd/header"); ?>
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
                        <a href="<?php echo site_url('ldd/Index/home'); ?>"><span class="b1">LDD</span></a>
                    </div><!-- //LOGO -->

                    <!-- MENU -->
                    <div class="pull-right">
                        <nav class="navmenu center">
                            <ul>
                                <li class="first scroll_btn"><a href="<?php echo site_url('ldd/Index/home'); ?>">Home</a></li>
                            </ul>
                        </nav>
                    </div><!-- //MENU -->
                </div><!-- //MENU BLOCK -->
            </div><!-- //CONTAINER -->
        </header><!-- //HEADER -->


        <!-- BREADCRUMBS -->
        <section class="breadcrumbs_block clearfix parallax">
            <div class="container center">
                <h2><b>OUR TEAM</b></h2>
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
                            <div class="single_portfolio_post_title"><b><?php echo $name; ?></b></div>
                            <p><?php echo $desc; ?>
                            </p>
                        </div><!-- //TEXT WIDGET -->

                        <hr>

                        <!-- INFO WIDGET -->
                        <!--<div class="sidepanel widget_info">-->
                        <!--<ul class="work_info">-->
                        <!--<li>Website: <a href="javascript:void(0);" >Photo Studio,</a> <a href="javascript:void(0);" >New York</a></li>-->
                        <!--<li>Email： <a href="javascript:void(0);" >Anna Smith</a></li>-->
                        <!--</ul>-->
                        <!--</div>&lt;!&ndash; //INFO WIDGET &ndash;&gt;-->
                    </div><!-- //SIDEBAR -->


                    <!-- PORTFOLIO BLOCK -->
                    <div class="portfolio_block col-lg-8 col-md-8 pull-left padbot50">

                        <!-- SINGLE PORTFOLIO POST -->
                        <div class="single_portfolio_post clearfix" data-animated="fadeInUp">

                            <!-- PORTFOLIO SLIDER -->
                            <li><img src="<?php echo $pic ?>" alt=""/></li>
                        </div><!-- //SINGLE PORTFOLIO POST -->
                    </div><!-- //PORTFOLIO BLOCK -->
                </div><!-- //ROW -->
            </div><!-- //CONTAINER -->
        </section><!-- //PORTFOLIO -->
    </div><!-- //PAGE -->
</div>
</body>
</html>