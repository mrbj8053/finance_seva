<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wethemez.com/demo/crypto/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Aug 2023 02:46:05 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{asset('logo.png')}}" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{{env('APP_NAME')}}</title>

        <!-- Icon css link -->
        <link href="{{asset('frontend')}}/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{asset('frontend')}}/vendors/flat-icon/flaticon.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{asset('frontend')}}/css/bootstrap.min.css" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="{{asset('frontend')}}/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="{{asset('frontend')}}/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="{{asset('frontend')}}/vendors/revolution/css/navigation.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="{{asset('frontend')}}/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="{{asset('frontend')}}/vendors/animate-css/animate.css" rel="stylesheet">
        <link href="{{asset('frontend')}}/vendors/nice-select/nice-select.css" rel="stylesheet">

        <link href="{{asset('frontend')}}/css/style.css" rel="stylesheet">
        <link href="{{asset('frontend')}}/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

       <div class="preloader">
            <div class="left_pre"></div>
            <div class="right_pre"></div>
            <div class="row m0 content">
                <div class="circle">
                    <div class="red">
                        <div class="rotator">
                            <img src="{{asset('frontend')}}/img/curve.png" alt="">
                        </div>
                        <a href="#" class="logo"><img src="{{asset('logo.png')}}" style="width: 100%" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <div class="top_menu">
                <div class="container">
                    <div class="float-md-left">
                        <div class="top_contact">
                            <a href="tel:+12345615523"><i class="fa fa-phone"></i>{{env('APP_PHONE')}}</a>
                            <a href="mailto:info@wethemez.com"><i class="fa fa-envelope"></i>{{env('APP_EMAIL')}}</a>
                        </div>
                    </div>
                    <div class="float-md-right">
                        <ul class="top_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main_menu_inner">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#"><img src="{{asset('logo.png')}}" style="width:120px" alt=""></a>
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown submenu active">
                                    <a class="nav-link" href="index.html" role="button"  aria-haspopup="true" aria-expanded="false">
                                    Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#aboutus">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#income">Income</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#packages">Packages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#chart">Chart</a>
                                </li>

                            </ul>
                            <ul class="navbar-nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Sign In?</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/register">Register?</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Footer Area =================-->

        <!--================Slider Area =================-->
        <section class="home_agency_slider_area">
            <div id="home_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('frontend')}}/img/home-slider/slider-1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text"
                            data-x="['left','left','left','left','left','center']"
                            data-hoffset="['0','80','80','0','15','0']"
                            data-y="['top','top','top','top']"
                            data-voffset="['290','290','290','290','320','180']"
                            data-fontsize="['70','70','70','70','50','30']"
                            data-lineheight="['80','80','80','80','60','40']"
                            data-width="['none','none','none','none','none']"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":"+290","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left','left','left','left','left','center']">We Trade <span> Forex</span><br/>Currency<span>.</span></div>

                            <div class="tp-caption tp-resizeme secand_text"
                                data-x="['left','left','left','left','left','center']"
                                data-hoffset="['0','80','80','0','15','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['475','475',475','475','475','270']"
                                data-fontsize="['22','22','22','22','16','16']"
                                data-lineheight="['38','38','38','38','28','28']"
                                data-width="['none','none','none','none','none','300']"
                                data-height="none"
                                data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap','normal']"
                                data-type="text"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">We receive result combining marketing, a creative and <br /> industry experience...
                            </div>

                            <div class="tp-caption tp-resizeme"
                                data-x="['left','left','left','left','left','center']"
                                data-hoffset="['0','80','80','0','15','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['580','580','580','580','580','380']"
                                data-width="['none','none','none','none','none']"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">
                                <a class="slider_btn" href="/login">Login </a>
                                <a class="slider_btn" href="/register">Register Now</a>
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('frontend')}}/img/home-slider/slider-2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text"
                            data-x="['left','left','left','left','left','center']"
                            data-hoffset="['0','80','80','0','15','0']"
                            data-y="['top','top','top','top']"
                            data-voffset="['290','290','290','290','320','180']"
                            data-fontsize="['70','70','70','70','50','30']"
                            data-lineheight="['80','80','80','80','60','40']"
                            data-width="['none','none','none','none','none']"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">Hassale Free Your <br /><span>Trasaction</span>.</div>

                            <div class="tp-caption tp-resizeme secand_text"
                                data-x="['left','left','left','left','left','center']"
                                data-hoffset="['0','80','80','0','15','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['475','475',475','475','475','270']"
                                data-fontsize="['22','22','22','22','16','16']"
                                data-lineheight="['38','38','38','38','28','28']"
                                data-width="['none','none','none','none','none','300']"
                                data-height="none"
                                data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap','normal']"
                                data-type="text"
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">We receive result combining marketing, a creative and <br /> industry experience...
                            </div>

                            <div class="tp-caption tp-resizeme"
                                data-x="['left','left','left','left','left','center']"
                                data-hoffset="['0','80','80','0','15','0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['580','580','580','580','580','380']"
                                data-width="['none','none','none','none','none']"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">
                                <a class="slider_btn" href="/login">Login </a>
                                <a class="slider_btn" href="/register">Register Now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
      <iframe src="https://fxpricing.com/fx-widget/ticker-tape-widget.php?id=1,2,3,5,14,20&d_mode=compact-name" width="100%" height="85" style="border: unset;"></iframe> <div id="fx-pricing-widget-copyright"> <span>Powered by </span><a href="https://fxpricing.com/" target="_blank">FX Pricing</a> </div> <style type="text/css"> #fx-pricing-widget-copyright{ text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd; } #fx-pricing-widget-copyright a{ text-decoration: unset; color: #bb3534; font-weight: 600; } </style>

        <!--================End Slider Area =================-->

        <!--================Small Feature Area =================-->
        <section class="small_feature_area p_100" >
            <div class="container">
                <div class="row small_feature_inner">
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <h3>01</h3>
                            </div>
                            <div class="media-body">
                                <p>Register your <br /> trading account.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <h3>02</h3>
                            </div>
                            <div class="media-body">
                                <p>Deposit funds, <br /> and activate your account </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <h3>03</h3>
                            </div>
                            <div class="media-body">
                                <p>Grow your downline <br /> and earn income.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Small Feature Area =================-->

        <!--================Choose Bitcoin Area =================-->
        <section class="choose_bitcoin_area p_100" id="income">
            <div class="container">
                <div class="main_title">
                    <h2>Why Choose Us</h2>
                    <p>We provide multiple types of attractive income.</p>
                </div>
                <div class="row choose_bit_inner">
                    <div class="col-lg-4 col-md-6">
                        <div class="choose_botcoin_item">
                            <i class="fa fa-line-chart"></i>
                            <a href="#!"><h4>Direct Income</h4></a>
                            <p>Get direct income for the every referal/Sponsor</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="choose_botcoin_item">
                            <i class="fa fa-area-chart"></i>
                            <a href="#!"><h4>Level Income</h4></a>
                            <p>Attractive level income upto 15 levels</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="choose_botcoin_item">
                            <i class="fa fa-bar-chart"></i>
                            <a href="#!"><h4>ROI Income</h4></a>
                            <p>Get amazing returns on your investments.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="choose_botcoin_item">
                            <i class="fa fa-star"></i>
                            <a href="#!"><h4>Royalty Income</h4></a>
                            <p>Become royal member of our team and get royal income</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="choose_botcoin_item">
                            <i class="fa fa-gift"></i>
                            <a href="#!"><h4>Reward Income</h4></a>
                            <p>Good work also have some bonus, by following this our company provide you attractive rewards.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-none">
                        <div class="choose_botcoin_item">
                            <i class="flaticon-money-8"></i>
                            <a href="#"><h4>Instant Exchange</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem dolorem dicta libero veritatis reiciendis quis pariatur magni.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Choose Bitcoin Area =================-->

        <!--================Bitcoin About Area =================-->
        <section class="bitcoin_about_area p_100" id="aboutus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="bitcoin_about_img" data-parallax="scroll" data-image-src="{{asset('frontend')}}/img/bitcoin-about.jpg">

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="bit_about_text">
                            <div class="left_title">
                                <h2>Buy, sell and Exchange all you need to know about forex</h2>
                                <!-- <h6>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Perspiciatis.</h6> -->
                            </div>
                            <p>Forex, short for foreign exchange, is the global marketplace for trading currencies. It's the largest and most liquid financial market, where participants exchange one currency for another at determined exchange rates. Forex trading serves various purposes, from facilitating international trade to speculative investment. Traders can profit by buying a currency pair if they anticipate its value will rise or selling if they predict a decline. Factors impacting forex include economic indicators, geopolitical events, interest rates, and market sentiment. Key players encompass banks, financial institutions, corporations, governments, and individual investors. The advent of online platforms has democratized forex trading, allowing individuals to access the market with relative ease. While potential for profit exists, forex trading carries risks due to its volatile nature, requiring thorough research, risk management, and a disciplined approach.</p>
                            <a class="btn btn=warning" href="/register" style="background: #fab915;padding:10px;border-radius:8px;color:white" >Download Plan</a>
                            <div class="our_skill_inner d-none">
                                <div class="single_skill">
                                    <h3>Support Countries</h3>
                                    <div class="progress" data-value="85">
                                        <div class="progress-bar">
                                            <div class="progress_parcent"><span class="counter count-text" data-speed="3000" data-stop="85%">85</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>Operators</h3>
                                    <div class="progress" data-value="90">
                                        <div class="progress-bar">
                                            <div class="progress_parcent"><span class="counter count-text">90</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>CryptoCoin ATMs</h3>
                                    <div class="progress" data-value="60">
                                        <div class="progress-bar">
                                            <div class="progress_parcent"><span class="counter count-text">60</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>Producers</h3>
                                    <div class="progress" data-value="70">
                                        <div class="progress-bar">
                                            <div class="progress_parcent"><span class="counter count-text">70</span>%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Bitcoin About Area =================-->

        <!--================Why Gain Bitcoin Area =================-->
        <section class="why_gain_bitcoin p_100">
            <div class="container">
                <div class="main_title">
                    <h2>{{env('APP_NAME')}} Features</h2>
                    <p></p>
                </div>
                <div class="row gain_coin_inner">
                    <div class="col-lg-3">
                        <div class="gain_coin_item coint_right wow fadeInRight animated" data-rel="1">
                            <div class="media">
                                <div class="media-body">
                                    <h4>Pass Free Account</h4>
                                    <p>Very easy to open an account, like abcd. No experience needed.</p>
                                </div>
                                <div class="d-flex">
                                    <i class="fa fa-inr"></i>
                                </div>
                            </div>
                        </div>
                        <div class="gain_coin_item coint_right wow fadeInRight animated" data-rel="2">
                            <div class="media">
                                <div class="media-body">
                                    <h4>Affordable Plans</h4>
                                    <p>You will happy to sign-in our very light volume trading plans.</p>
                                </div>
                                <div class="d-flex">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="gain_coin_round">
                            <div class="g_coin_r_item" data-rel="1">
                                <h4>Pass Free Account</h4>
                                <p>Very easy to open an account, like abcd. No experience needed.</p>
                            </div>
                            <div class="g_coin_r_item" data-rel="2">
                                <h4>Affordable Plans</h4>
                                <p>You will happy to sign-in our very light volume trading plans.</p>
                            </div>
                            <div class="g_coin_r_item" data-rel="3">
                                <h4>Easy To Start</h4>
                                <p>Very easy to start your crypto currency trading business with CryptoCoin.</p>
                            </div>
                            <div class="g_coin_r_item" data-rel="4">
                                <h4>24/7 Support</h4>
                                <p>We have dedicated support team to help you if need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="gain_coin_item wow fadeInLeft animated" data-rel="3">
                            <div class="media">
                                <div class="d-flex"><i class="fa fa-pie-chart"></i></div>
                                <div class="media-body">
                                    <h4>Easy To Start</h4>
                                    <p>Very easy to start your crypto currency trading business with CryptoCoin.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gain_coin_item wow fadeInLeft animated" data-rel="4">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="flaticon-computer-1"></i>
                                </div>
                                <div class="media-body">
                                    <h4>24/7 Support</h4>
                                    <p>We have dedicated support team to help you if need.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Why Gain Bitcoin Area =================-->

        <!--================Team Area =================-->
        <section class="team_area p_100" id="packages">
            <div class="container">
                <div class="main_title">
                    <h2>Multiple Packages</h2>
                    <p>Join With Package According To Your Budget.</p>
                </div>
                <div class="team_slider owl-carousel">

                    <div class="item">
                        <h2 style="background-color: rgb(46, 46, 239);color: white;padding: 75px;border-radius: 50%;width: 200px;height:200px;text-align: center;">10 K</h2>
                    </div>
                    <div class="item">
                        <h2 style="background-color: rgb(46, 46, 239);color: white;padding: 75px;border-radius: 50%;width: 200px;height:200px;text-align: center;">50 K</h2>
                    </div>
                    <div class="item">
                        <h2 style="background-color: rgb(46, 46, 239);color: white;padding: 75px;border-radius: 50%;width: 200px;height:200px;text-align: center;">1 Lakh</h2>
                    </div>
                    <div class="item">
                        <h2 style="background-color: rgb(46, 46, 239);color: white;padding: 75px;border-radius: 50%;width: 200px;height:200px;text-align: center;">3 Lakh</h2>
                    </div>
                    <div class="item">
                        <h2 style="background-color: rgb(46, 46, 239);color: white;padding: 75px;border-radius: 50%;width: 200px;height:200px;text-align: center;">5 Lakh</h2>
                    </div>

                </div>
            </div>
        </section>
        <!--================End Team Area =================-->

        <!--================Counter Area Area =================-->
        <section class="counter_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter_item">
                            <h3 class="counter">1609</h3>
                            <p>Transactions in last 24h</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter_item">
                            <h3 class="counter">21</h3>
                            <p>Transactions per hour</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter_item">
                            <h3 class="counter">165</h3>
                            <p>Largest Transactions</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter_item">
                            <h3 class="counter">4</h3>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Counter Area Area =================-->

        <!--================Trending Area Area =================-->
        <section class="own_trending_area p_100">
            <div class="container">
                <div class="main_title">
                    <h2>Build Your Own Trading</h2>
                    <p>We have trusted investors.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="trending_img">
                            <img class="img-fluid" src="{{asset('frontend')}}/img/bitcoin-chart.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="trending_list">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="fa fa-cloud"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Automated trading bots in the cloud</h4></a>
                                    <p>No software installation required. Bots run on our servers.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <i class="fa fa-fire" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Support for all major forex exchanges</h4></a>
                                    <p>All major forex exchanges are supported for both backtesting and live trading</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <i class="fa fa-linode" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Strategies Marketplace</h4></a>
                                    <p>The place where trading strategies can be bought and sold</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <i class="fa fa-flask" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Backtesting trading strategies</h4></a>
                                    <p>See how your strategy would work over different market condition by using our backtesting</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Instant Email alerts & SMS notifications</h4></a>
                                    <p>No software installation required. Bots run on our servers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Trending Area Area =================-->

        <!--================Bitcoin Calculater Area =================-->
        <section class="bitcoin_calculater_area p_100" id="chart">
            <div class="container">
                <div class="main_title wh_title">
                    <h2>Forex Chart</h2>
                    <p></p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calculater_left_text">
      <iframe src="https://fxpricing.com/fx-widget/forex-cross-rates.php?symbol=EUR,USD,JPY,NZD,GBP,CHF,AED,PKR" width="100%" height="370" style="border: 1px solid #eee;"></iframe> <div id="fx-pricing-widget-copyright"> <span>Powered by </span><a href="https://fxpricing.com/" target="_blank">FX Pricing</a> </div> <style type="text/css"> #fx-pricing-widget-copyright{ text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd; } #fx-pricing-widget-copyright a{ text-decoration: unset; color: #bb3534; font-weight: 600; } </style>


                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--================End Bitcoin Calculater Area =================-->


        <!--================Clients Slider Area =================-->
        <section class="clients_slider_area">
            <div class="container">
                <div class="clients_slider owl-carousel">
                    <div class="item">
                        <img src="{{asset('frontend')}}/img/studio-clients/s-clients-1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend')}}/img/studio-clients/s-clients-2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend')}}/img/studio-clients/s-clients-3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend')}}/img/studio-clients/s-clients-4.png" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend')}}/img/studio-clients/s-clients-5.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--================End Clients Slider Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area p_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget about_widget">
                                <img class="img-fluid" src="{{asset('logo.png')}}" style="width:200px" alt="">
                                <p>Connect with us to make your Forex trading experience worthy and Get the exact solution to the mark for your forex exchange.</p>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <aside class="f_widget resource_widget">
                                <div class="f_title">
                                    <h3>QUICK Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About Us</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Incomes</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Packages</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Chart</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <aside class="f_widget resource_widget support_widget">
                                <div class="f_title">
                                    <h3>Contact Us</h3>
                                </div>
                                <ul>
                                    <li><a href="mailto:{{env('APP_EMAIL')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong>Email:</strong>{{env('APP_EMAIL')}}</a></li>
                                    <li><a href="tel:{{env('APP_PHONE')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong>Contact:</strong>{{env('APP_PHONE')}}</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <aside class="f_widget resource_widget support_widget">
                                <div class="f_title">
                                    <h3>Forex</h3>
                                </div>
                                <p>Desclaimer
                                    The prices of securities fluctuate, sometimes dramatically. The price of a security may move up or down, and may become valueless. It is as likely that losses will be incurred rather than profit made as a result of buying and selling securities.</p>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <h5>Copyright © 2021, <a>{{env('APP_NAME')}}</a>. All Rights Reserved.</h5>
            </div>
        </footer>
        <!--================End Footer Area =================-->






        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('frontend')}}/js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('frontend')}}/js/popper.min.js"></script>
        <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="{{asset('frontend')}}/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="{{asset('frontend')}}/vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/counterup/jquery.counterup.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/animate-css/wow.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/parallax/parallax.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/counterup/jquery.counterup.min.js"></script>
        <script src="{{asset('frontend')}}/vendors/counterup/apear.js"></script>
        <script src="{{asset('frontend')}}/vendors/counterup/countto.js"></script>
        <script src="{{asset('frontend')}}/vendors/nice-select/jquery.nice-select.min.js"></script>


        <script src="{{asset('frontend')}}/js/theme.js"></script>
    </body>

<!-- Mirrored from wethemez.com/demo/crypto/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Aug 2023 02:47:38 GMT -->
</html>
