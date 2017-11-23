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
                                <li class="first scroll_btn"><a
                                            href="<?php echo site_url('ldd/Index/home'); ?>">Home</a>
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
                <h2><b>FORM</b></h2>
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
                            <div class="single_portfolio_post_title"><b>FRAME</b></div>
                            <table width="360px" border="1" cellspacing="0">
                                <tr>
                                    <th width="180px"><b>Triple self-portrait</b></th>
                                    <th><b>Storm</b></th>
                                </tr>
                                <tr>
                                    <th width="180px"><b>Newspaper interview</b></th>
                                    <th><b>Tell it to the judge</b></th>
                                </tr>
                                <tr>
                                    <th width="180px"><b>Wheel of life</b></th>
                                    <th><b>Packing my suitcase</b></th>
                                </tr>
                                <tr>
                                    <th width="180px"><b>A letter to myself</b></th>
                                    <th><b>Shark island</b></th>
                                </tr>
                                <tr>
                                    <th width="180px"><b>To be or not to be</b></th>
                                    <th><b>Appreciation chain</b></th>
                                </tr>
                            </table>

                        </div><!-- //TEXT WIDGET -->
                    </div><!-- //SIDEBAR -->


                    <!-- PORTFOLIO BLOCK -->
                    <div class="portfolio_block col-lg-8 col-md-8 pull-left padbot50">

                        <!-- SINGLE PORTFOLIO POST -->
                        <div class="single_portfolio_post clearfix" data-animated="fadeInUp">

                            <!-- PORTFOLIO SLIDER -->
                            <li><img src="public/ldd/images/form/frame_full.jpg" alt=""/></li>
                        </div><!-- //SINGLE PORTFOLIO POST -->
                    </div><!-- //PORTFOLIO BLOCK -->
                </div><!-- //ROW -->
            </div><!-- //CONTAINER -->
        </section><!-- //PORTFOLIO -->
    </div><!-- //PAGE -->
</div>
</body>
</html>