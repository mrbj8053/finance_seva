<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>{{env('APP_NAME')}}</title>
      <!-- Css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/style.css">
      <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/responsive.css">
      <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/fonts/fontawesome/css/all.min.css">
      <!-- Css -->
      <!-- Favicon -->
      <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="{{asset('logo.png')}}" sizes="72x72">
      <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="{{asset('logo.png')}}" sizes="114x114">
      <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="{{asset('logo.png')}}" sizes="144x144">
      <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="{{asset('logo.png')}}">
      <!-- Favicon -->
   </head>
   <body>
      <!-- Header -->
      <header class="header-main fixed-header">
         {{-- <div class="header-top">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                     <div class="left-topbar">
                        <ul>
                           <li><i class="fas fa-phone-alt"></i> 888 666 000</li>
                           <li><i class="fas fa-envelope-open"></i>  info@yourstore.com</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                     <div class="right-topbar">
                        <ul>
                           <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href=""><i class="fab fa-twitter"></i></a></li>
                           <li><a href=""><i class="fab fa-instagram"></i></a></li>
                           <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}
         <div class="header-bottom">
            <div class="header-right clearfix">
               <div class="header-nav-menu">
                  <div class="container">
                     <div class="main-headers">
                        <div class="logo-header">
                           <a class="logo-link" href="index.html">
                              <div class="logo-box">
                                 <img src="{{asset('frontend')}}/img/logo.png" style="width: 58px;" alt="logo">
                              </div>
                           </a>
                        </div>
                        <div class="header-navbar-menu clearfix">
                           <nav class="navbar navbar-expand-lg navbar-light">
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <i class="fas fa-bars"></i>
                              </button>
                              <div class="collapse navbar-collapse header-links" id="navbarSupportedContent">
                                 <ul class="navbar-nav mr-auto nav-list">
                                    <li class="nav-item active">
                                       <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item ">
                                       <a class="nav-link" href="#incomes">Incomes</a>

                                    </li>
                                    <li class="nav-item ">
                                       <a class="nav-link" href="#downloadPlan">Download Plan</a>
                                    </li>
                                    <li class="nav-item ">
                                       <a class="nav-link" href="#packages">Packages</a>
                                    </li>
                                    <li class="nav-item ">
                                       <a class="nav-link" href="#rewards">Rewards</a>
                                    </li>
                                    <li class="nav-item ">
                                       <a class="nav-link" href="{{route('login')}}">Login/Register</a>
                                    </li>
                                 </ul>
                              </div>
                           </nav>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header -->
      <!-- Slider -->
      <section class="slider-aera">
         <div class="container">
            <div class="slider-main-box">
               <div class="slider-inner">
                  <div class="contain-box">
                     <h1 class="theme-title">New Level <span class="text-link">Financial</span> Markets For trade <span class="text-link">Forex</span></h1>
                     <p class="theme-description">Trade Forex with a single account</p>
                     <div class="btn-box">
                        <a href="{{route('register')}}" style="color:white" class="theme-btn">Join Now</a>
                     </div>
                  </div>
               </div>
               <div class="slider-bottom">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="inner-main">
                           <div class="img-box">
                              <img src="{{asset('frontend')}}/img/enhance-tools.png" alt="slider-img">
                           </div>
                           <div class="content-box">
                              <h3 class="theme-title">Enhanced Tools</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="inner-main">
                           <div class="img-box">
                              <img src="{{asset('frontend')}}/img/open-book.png" alt="slider-img">
                           </div>
                           <div class="content-box">
                              <h3 class="theme-title">Trading Guides</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="inner-main">
                           <div class="img-box">
                              <img src="{{asset('frontend')}}/img/flash-execution.png" alt="slider-img">
                           </div>
                           <div class="content-box">
                              <h3 class="theme-title">Fast execution</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="inner-main">
                           <div class="img-box">
                              <img src="{{asset('frontend')}}/img/no-commission.png" alt="slider-img">
                           </div>
                           <div class="content-box">
                              <h3 class="theme-title">0% Commission</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Slider -->
      <iframe src="https://fxpricing.com/fx-widget/ticker-tape-widget.php?id=1,2,3,5,14,20&d_mode=compact-name" width="100%" height="85" style="border: unset;"></iframe> <div id="fx-pricing-widget-copyright"> <span>Powered by </span><a href="https://fxpricing.com/" target="_blank">FX Pricing</a> </div> <style type="text/css"> #fx-pricing-widget-copyright{ text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd; } #fx-pricing-widget-copyright a{ text-decoration: unset; color: #bb3534; font-weight: 600; } </style>
      <!-- About -->
      <section class="about-area page-padding-big" style="
      padding-top: 19px;
  " id="incomes">
         <img src="{{asset('frontend')}}/img/blur-left.png" alt="blur-img" class="blur-left">
         <img src="{{asset('frontend')}}/img/blur-right.png" alt="blur-img" class="blur-right">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="left-about">
                     <img src="{{asset('frontend')}}/img/about-img.jpg" alt="about-img">
                     <img src="{{asset('frontend')}}/img/image-shape.png" alt="shape" class="shape-top">
                     <img src="{{asset('frontend')}}/img/image-shape.png" alt="shape" class="shape-bottom">
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="right-about">
                     <div class="page-title mb-4">
                        <span>Invest and get multiple incomes</span>
                        <h2 class="theme-title">{{env('APP_NAME')}} Provides you 4 type of investement benefits .</h2>
                        <p class="theme-description">fulfill your dreams with our effective income packages</p>
                     </div>
                     <div class="data-box">
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="inner-about">
                                 <div class="img-box">
                                    <img src="{{asset('frontend')}}/img/calculator.png" alt="cal">
                                 </div>
                                 <p class="theme-description">Direct Income</p>
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="inner-about">
                                 <div class="img-box">
                                    <img src="{{asset('frontend')}}/img/market-analysis.png" alt="cal">
                                 </div>
                                 <p class="theme-description">Level Income</p>
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="inner-about">
                                 <div class="img-box">
                                    <img src="{{asset('frontend')}}/img/market-review.png" alt="cal">
                                 </div>
                                 <p class="theme-description">Reward Income</p>
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="inner-about">
                                 <div class="img-box">
                                    <img src="{{asset('frontend')}}/img/trading.png" alt="cal">
                                 </div>
                                 <p class="theme-description">Royalty Income</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About -->
      <!-- Fast Execution -->
      <section class="fast-execution-area page-padding" id="downloadPlan">
         <img src="{{asset('frontend')}}/img/graph-bg.png" alt="graph-img" class="graph-img">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="right-about">
                     <div class="page-title mb-4">
                        <span>download our plan</span>
                        <h2 class="theme-title">Need more details? </h2>
                        <p class="theme-description">Download our plan and know everything you want to know.</p>
                     </div>
                     <div class="data-box">
                        <div class="equity-list">
                            <button class="btn btn-primary">Download Plan</button>
                           {{-- <ul>
                              <li><i class="fas fa-chevron-right"></i>Negative balance protection</li>
                              <li><i class="fas fa-chevron-right"></i>Segregated and supervised client funds</li>
                              <li><i class="fas fa-chevron-right"></i>Instant deposit & fast withdrawal</li>
                           </ul> --}}
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="right-execution">
                     <div class="table-responsive">
                        <iframe src="https://fxpricing.com/fx-widget/market-currency-rates-widget.php?id=1,2,3,5,14,20" width="100%" height="290" style="border: 1px solid #eee;"></iframe> <div id="fx-pricing-widget-copyright"> <span>Powered by </span><a href="https://fxpricing.com/" target="_blank">FX Pricing</a> </div> <style type="text/css"> #fx-pricing-widget-copyright{ text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd; } #fx-pricing-widget-copyright a{ text-decoration: unset; color: #bb3534; font-weight: 600; } </style>
                        <table class="d-none table">
                           <tbody>
                              <tr>
                                 <td class="coin-box">
                                    <img src="{{asset('frontend')}}/img/crypto-exchange1.png" alt="coin">
                                    <div class="coin-name">EURUSD<span>Euro / U.S. Dollar</span></div>
                                 </td>
                                 <td>1.04530</td>
                                 <td class="value-box"><span class="text-success">+0.22%</span><span class="text-success">+0.00225  </span></td>
                              </tr>
                              <tr>
                                 <td class="coin-box">
                                    <img src="{{asset('frontend')}}/img/crypto-exchange2.png" alt="coin">
                                    <div class="coin-name">GBPUSD<span>British Pound / U.S. Dollar</span></div>
                                 </td>
                                 <td>1.04530</td>
                                 <td class="value-box"><span class="text-success">+0.22%</span><span class="text-success">+0.00225  </span></td>
                              </tr>
                              <tr>
                                 <td class="coin-box">
                                    <img src="{{asset('frontend')}}/img/crypto-exchange1.png" alt="coin">
                                    <div class="coin-name">USDJPY<span>U.S. Dollar / Japanese Yen</span></div>
                                 </td>
                                 <td>1.04530</td>
                                 <td class="value-box"><span class="text-danger">−0.22%</span><span class="text-danger">−0.00212</span></td>
                              </tr>
                              <tr>
                                 <td class="coin-box">
                                    <img src="{{asset('frontend')}}/img/crypto-exchange2.png" alt="coin">
                                    <div class="coin-name">USDCHF<span>U.S. Dollar / Swiss Franc</span></div>
                                 </td>
                                 <td>1.04530</td>
                                 <td class="value-box"><span class="text-success">+0.22%</span><span class="text-success">+0.00225  </span></td>
                              </tr>
                              <tr>
                                 <td class="coin-box">
                                    <img src="{{asset('frontend')}}/img/crypto-exchange2.png" alt="coin">
                                    <div class="coin-name">AUDUSD<span>Australian Dollar / U.S. Dollar</span></div>
                                 </td>
                                 <td>1.04530</td>
                                 <td class="value-box"><span class="text-danger">−0.13%</span><span class="text-danger">−0.00161</span></td>
                              </tr>
                              <tr>
                                 <td class="coin-box">
                                    <img src="{{asset('frontend')}}/img/crypto-exchange1.png" alt="coin">
                                    <div class="coin-name">USDCAD<span>U.S. Dollar / Canadian Dollar</span></div>
                                 </td>
                                 <td>1.04530</td>
                                 <td class="value-box"><span class="text-success">+0.22%</span><span class="text-success">+0.00225  </span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Fast Execution -->
      <!-- Popular Products -->
      <section class="popular-products page-padding " id="packages">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="page-title text-center mb-0 page-center">
                     <span>MULTIPLE PACKAGES</span>
                     <h2 class="theme-title">Join with package according to your budget</h2>
                     <p class="theme-description">we have multiple packages with great income for you</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="popular-box">
                     <h3 class="theme-title">10K</h3>
                     {{-- <p class="theme-decsription">Income upto </p> --}}
                     <div class="popular-bottom clearfix">
                        <div class="inner-box">
                           <span class="theme-bg-color">10K</span>
                        </div>
                        <div class="link-box">
                           <a href="{{route('register')}}" class="text-link">Join Now<i class="fas fa-angle-double-right ml-2"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="popular-box">
                     <h3 class="theme-title">50K</h3>
                     {{-- <p class="theme-decsription">Access 1,200+ listed options across equities, indices, interest rates, energy, metals and more.</p> --}}
                     <div class="popular-bottom clearfix">
                        <div class="inner-box">
                           <span class="theme-bg-color">50K</span>
                        </div>
                        <div class="link-box">
                           <a href="{{route('register')}}" class="text-link">Join Now<i class="fas fa-angle-double-right ml-2"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="popular-box">
                     <h3 class="theme-title">1 Lakh</h3>
                     {{-- <p class="theme-decsription">Access 300+ futures covering equity indices, energy, metals, agriculture, rates and more.</p> --}}
                     <div class="popular-bottom clearfix">
                        <div class="inner-box">
                           <span class="theme-bg-color">1L</span>
                        </div>
                        <div class="link-box">
                           <a href="{{route('register')}}" class="text-link">Join Now<i class="fas fa-angle-double-right ml-2"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="popular-box">
                     <h3 class="theme-title">3 Lakh</h3>
                     {{-- <p class="theme-decsription">Access 300+ futures covering equity indices, energy, metals, agriculture, rates and more.</p> --}}
                     <div class="popular-bottom clearfix">
                        <div class="inner-box">
                           <span class="theme-bg-color">3L</span>
                        </div>
                        <div class="link-box">
                           <a href="{{route('register')}}" class="text-link">Join Now<i class="fas fa-angle-double-right ml-2"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="popular-box">
                     <h3 class="theme-title">5 Lakh</h3>
                     {{-- <p class="theme-decsription">Access 300+ futures covering equity indices, energy, metals, agriculture, rates and more.</p> --}}
                     <div class="popular-bottom clearfix">
                        <div class="inner-box">
                           <span class="theme-bg-color">5L</span>
                        </div>
                        <div class="link-box">
                           <a href="{{route('register')}}" class="text-link">Join Now<i class="fas fa-angle-double-right ml-2"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <h3 style="text-align: center">Live Rates</h3>
      <!-- Popular Products -->
      <iframe src="https://fxpricing.com/fx-widget/forex-cross-rates.php?symbol=EUR,USD,JPY,NZD,GBP,CHF,AED,PKR" width="100%" height="370" style="border: 1px solid #eee;"></iframe> <div id="fx-pricing-widget-copyright"> <span>Powered by </span><a href="https://fxpricing.com/" target="_blank">FX Pricing</a> </div> <style type="text/css"> #fx-pricing-widget-copyright{ text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd; } #fx-pricing-widget-copyright a{ text-decoration: unset; color: #bb3534; font-weight: 600; } </style>
      <!-- Leading -->
      <section class="leading-area page-padding bg-overlay d-none" id="topAchievers" >
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="get-start-box">
                     <h3 class="theme-title mb-0">Trade with <span class="text-link">world-leading</span> broker.</h3>
                     <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                           <div class="leading-box">
                              <div class="img-box">
                                 <img src="{{asset('frontend')}}/img/leading1.png" alt="leading-img">
                              </div>
                              <div class="data-box">
                                 <h4 class="theme-title">Leading</h4>
                                 <span>Experience</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                           <div class="leading-box">
                              <div class="img-box">
                                 <img src="{{asset('frontend')}}/img/leading2.png" alt="leading-img">
                              </div>
                              <div class="data-box">
                                 <h4 class="theme-title">15 Years</h4>
                                 <span>UK Regulated</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                           <div class="leading-box">
                              <div class="img-box">
                                 <img src="{{asset('frontend')}}/img/leading3.png" alt="leading-img">
                              </div>
                              <div class="data-box">
                                 <h4 class="theme-title">18k</h4>
                                 <span>Order per day</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                           <div class="leading-box">
                              <div class="img-box">
                                 <img src="{{asset('frontend')}}/img/leading4.png" alt="leading-img">
                              </div>
                              <div class="data-box">
                                 <h4 class="theme-title">24/5</h4>
                                 <span>Customer supports</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Leading -->
      <!-- Trader Join -->
      <section class="trader-join-area page-padding " id="rewards">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="page-title mb-0 text-center">
                     <span>exciting rewards</span>
                     <h2 class="theme-title mb-0">Multiple exiting rewards</h2>
                  </div>
               </div>
            </div>
            <div class="row">
                  <div class="col-6 col-md-4 col-lg-4">
                     <div class="data-box data-box-mine">
                        <p class="theme-description">Business : 3 Lakh</p>
                        <div class="bottom-testimonial">
                           <i class="fas fa-quote-right"></i>
                           <h4 class="theme-title">Domestic tour</h4>
                           <span>from United Kingdom</span>
                        </div>
                     </div>

                  </div>
                  <div class="col-6 col-md-4 col-lg-4">
                     <div class="data-box data-box-mine">
                        <p class="theme-description">Business : +6 Lakh</p>
                        <div class="bottom-testimonial">
                           <i class="fas fa-quote-right"></i>
                           <h4 class="theme-title">21,000 Cash</h4>
                           <span>from United Kingdom</span>
                        </div>
                     </div>
                     </div>
                  <div class="col-6 col-md-4 col-lg-4">
                     <div class="data-box data-box-mine">
                        <p class="theme-description">Business : +12 Lakh</p>
                        <div class="bottom-testimonial">
                           <i class="fas fa-quote-right"></i>
                           <h4 class="theme-title">International Tour</h4>
                           <span>from United Kingdom</span>
                        </div>
                     </div>
                     </div>

                  <div class="col-6 col-md-4 col-lg-4">
                     <div class="data-box data-box-mine">
                        <p class="theme-description">Business : +25 Lakh</p>
                        <div class="bottom-testimonial">
                           <i class="fas fa-quote-right"></i>
                           <h4 class="theme-title">75,000</h4>
                           <span>from United Kingdom</span>
                        </div>
                     </div>
                     </div>
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="data-box data-box-mine">
                       <p class="theme-description">Business : +50 Lakh</p>
                       <div class="bottom-testimonial">
                          <i class="fas fa-quote-right"></i>
                          <h4 class="theme-title">1.5 Lakh</h4>
                          <span>from United Kingdom</span>
                       </div>
                    </div>
                   </div>
                 <div class="col-6 col-md-4 col-lg-4">
                    <div class="data-box data-box-mine">
                       <p class="theme-description">Business : +1 Crore</p>
                       <div class="bottom-testimonial">
                          <i class="fas fa-quote-right"></i>
                          <h4 class="theme-title">3 Lakh</h4>
                          <span>from United Kingdom</span>
                       </div>
                    </div>
                     </div>
                 <div class="col-6 col-md-4 col-lg-4">
                    <div class="data-box data-box-mine">
                       <p class="theme-description">Business : +2.5 Crore</p>
                       <div class="bottom-testimonial">
                          <i class="fas fa-quote-right"></i>
                          <h4 class="theme-title">7.5 Lakh</h4>
                          <span>from United Kingdom</span>
                       </div>
                    </div>
                     </div>
                 <div class="col-6 col-md-4 col-lg-4">
                    <div class="data-box data-box-mine">
                       <p class="theme-description">Business : +5 Crore</p>
                       <div class="bottom-testimonial">
                          <i class="fas fa-quote-right"></i>
                          <h4 class="theme-title">15 Lakh</h4>
                          <span>from United Kingdom</span>
                       </div>
                    </div>
                    </div>
                 <div class="col-6 col-md-4 col-lg-4">
                    <div class="data-box data-box-mine">
                       <p class="theme-description">Business : +10 Crore</p>
                       <div class="bottom-testimonial">
                          <i class="fas fa-quote-right"></i>
                          <h4 class="theme-title">30 Lakh</h4>
                          <span>from United Kingdom</span>
                       </div>
                    </div>
                    </div>
                 <div class="col-6 col-md-4 col-lg-4">
                    <div class="data-box data-box-mine">
                       <p class="theme-description">Business : +25 Crore</p>
                       <div class="bottom-testimonial">
                          <i class="fas fa-quote-right"></i>
                          <h4 class="theme-title">75 Lakh</h4>
                          <span>from United Kingdom</span>
                       </div>
                    </div>
                    </div>
                 <div class="col-6 col-md-4 col-lg-4">
                    <div class="data-box data-box-mine">
                       <p class="theme-description">Business : +50 Crore</p>
                       <div class="bottom-testimonial">
                          <i class="fas fa-quote-right"></i>
                          <h4 class="theme-title">1.5 Crore</h4>
                          <span>from United Kingdom</span>
                       </div>
                    </div>
                    </div>
                 <div class="col-6 col-md-4 col-lg-4">
                    <div class="data-box data-box-mine">
                       <p class="theme-description">Business : +100 Crore</p>
                       <div class="bottom-testimonial">
                          <i class="fas fa-quote-right"></i>
                          <h4 class="theme-title">3 Crore</h4>
                          <span>from United Kingdom</span>
                       </div>
                    </div>
                    </div>
                 <div class="col-6 col-md-4 col-lg-4">
                    <div class="data-box data-box-mine">
                       <p class="theme-description">Business : +200 Crore</p>
                       <div class="bottom-testimonial">
                          <i class="fas fa-quote-right"></i>
                          <h4 class="theme-title">5 Crore</h4>
                          <span>from United Kingdom</span>
                       </div>
                    </div>
                     </div>
            </div>
         </div>
      </section>
      <style>
        .data-box-mine{
            padding: 2px;
    border: 1px solid #cacaca;
    border-radius: 6px;
    box-shadow: 1px 1px 3px #cacaca;
    margin-top:5px;
        }
      </style>
      <!-- Trader Join -->
      <!-- Mobile App -->
      <section class="d-none mobile-app-area page-padding">
         <div class="container">
            <div class="chalange-main-box">
               <div class="box-left">
                  <div class="page-title mb-0">
                     <span>with Liquid mobile app</span>
                     <h2 class="theme-title">Enhance your trading experience</h2>
                     <p class="theme-description">Lorem aute enim adipisicing laborum occaecat velit et amet duis deserunt dolor sit.</p>
                     <div class="btn-box app-btn">
                        <ul>
                           <li><a href=""><img src="{{asset('frontend')}}/img/in-app-store.svg" alt="android-btn"></a></li>
                           <li><a href=""><img src="{{asset('frontend')}}/img/in-google-play.svg" alt="ios-btn"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="box-right">
                  <div class="app-img-box">
                     <img src="{{asset('frontend')}}/img/mobile-app.png" alt="Mobile-app-img">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Mobile App -->
      <!-- Blog -->
      <section class="d-none Blog-area page-padding">
         <img src="{{asset('frontend')}}/img/blur-left.png" alt="blur-img" class="blur-left">
         <img src="{{asset('frontend')}}/img/blur-right.png" alt="blur-img" class="blur-right">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="page-title text-center page-center">
                     <span>Blog</span>
                     <h2 class="theme-title">Our Blog</h2>
                     <p class="theme-description">Some believe you must choose between an online broker and a wealth management firm. At our company, you don’t need to compromise. Whether you invest on your own, with an advisor, or a little of both — we can support you.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="blog-main-box">
                     <div class="img-box">
                        <img src="{{asset('frontend')}}/img/about-img.jpg" alt="blog-img">
                        <span>Markets</span>
                     </div>
                     <div class="content-box">
                        <h4 class="theme-title"><a href="#">Sony buys $400m stake in China’s Bilibili</a></h4>
                        <p class="theme-description">After a series of previous projects together, Sony has secured a ...</p>
                     </div>
                     <div class="blog-bottom clearfix">
                        <div class="left-box">
                           <div class="blog-imgbox">
                              <span> <img src="{{asset('frontend')}}/img/blog-avtar.png" alt="avtar">  Sachin Diwar</span>
                           </div>
                        </div>
                        <div class="right-box">
                           <span><i class="fas fa-calendar"></i> October 19, 2021</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="blog-main-box">
                     <div class="img-box">
                        <img src="{{asset('frontend')}}/img/blog-2.jpg" alt="blog-img">
                        <span>Auto Motive</span>
                     </div>
                     <div class="content-box">
                        <h4 class="theme-title"><a href="#">Sony buys $400m stake in China’s Bilibili</a></h4>
                        <p class="theme-description">After a series of previous projects together, Sony has secured a ...</p>
                     </div>
                     <div class="blog-bottom clearfix">
                        <div class="left-box">
                           <div class="blog-imgbox">
                              <span> <img src="{{asset('frontend')}}/img/blog-avtar.png" alt="avtar">  Sachin Diwar</span>
                           </div>
                        </div>
                        <div class="right-box">
                           <span><i class="fas fa-calendar"></i> October 19, 2021</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="blog-main-box">
                     <div class="img-box">
                        <img src="{{asset('frontend')}}/img/blog-3.jpg" alt="blog-img">
                        <span>Investment</span>
                     </div>
                     <div class="content-box">
                        <h4 class="theme-title"><a href="#">Sony buys $400m stake in China’s Bilibili</a></h4>
                        <p class="theme-description">After a series of previous projects together, Sony has secured a ...</p>
                     </div>
                     <div class="blog-bottom clearfix">
                        <div class="left-box">
                           <div class="blog-imgbox">
                              <span> <img src="{{asset('frontend')}}/img/blog-avtar.png" alt="avtar">  Sachin Diwar</span>
                           </div>
                        </div>
                        <div class="right-box">
                           <span><i class="fas fa-calendar"></i> October 19, 2021</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Blog -->
      <!-- Get Start -->
      <section class="Get-start-area page-padding bg-overlay">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="get-start-box">
                     <h3 class="theme-title">Ready to get started?</h3>
                     <p class="theme-description">Global access to financial markets from a single account <a href="{{route('register')}}">Open Your Account </a></p>
                     {{-- <div class="btn-box">
                        <a href=""><img src="{{asset('frontend')}}/img/in-app-store.svg" alt="app"></a>
                        <a href=""><img src="{{asset('frontend')}}/img/in-google-play.svg" alt="app"></a>
                     </div> --}}
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Get Start -->
      <!-- Footer -->
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="footer-box">
                     <div class="img-box">
                        <img src="{{asset('frontend')}}/img/logo-black.png" alt="logo">
                     </div>
                     <p class="theme-description">Connect with us to make your Forex trading experience worthy and Get the exact solution to the mark for your forex exchange.</p>
                     <div class="social-links">
                        {{-- <ul>
                           <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href=""><i class="fab fa-twitter"></i></a></li>
                           <li><a href=""><i class="fab fa-instagram"></i></a></li>
                           <li><a href=""><i class="fab fa-youtube"></i></a></li>
                           <li><a href=""><i class="fab fa-telegram-plane"></i></a></li>
                        </ul> --}}
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-9 col-12">
                  <div class="footer-box">
                     <h4 class="theme-title">Contact us </h4>
                     <div class="links-box">
                        <ul>
                           <li><strong>Email </strong><a href="index.html"><i class="fas fa-angle-right"></i>{{env('APP_EMAIL')}}</a></li>
                           <li><strong>Contact </strong><a href="about.html"><i class="fas fa-angle-right"></i>{{env('APP_PHONE')}}</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-9 col-12">
                <div class="footer-box">
                   <h4 class="theme-title">Forex</h4>
                   <div class="links-box">
                    <div class="trade-warning">
                        <h6 class="mb-1"><span><i class="fas fa-triangle-exclamation fa-sm"></i>Desclaimer</span></h6>
                        <p class="mb-0">The prices of securities fluctuate, sometimes dramatically. The price of a security may move up or down, and may become valueless. It is as likely that losses will be incurred rather than profit made as a result of buying and selling securities.</p>
                    </div>
                   </div>
                </div>
             </div>
               {{-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="footer-box">
                     <h4 class="theme-title">Analytics</h4>
                     <div class="links-box">
                        <ul>
                           <li><a href="markets.html"><i class="fas fa-angle-right"></i>World Markets</a></li>
                           <li><a href="#"><i class="fas fa-angle-right"></i>Trading Central</a></li>
                           <li><a href="#"><i class="fas fa-angle-right"></i>Forex charts online</a></li>
                           <li><a href="#"><i class="fas fa-angle-right"></i>Market calendar</a></li>
                           <li><a href="#"><i class="fas fa-angle-right"></i>Central banks</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="footer-box">
                     <h4 class="theme-title">Education</h4>
                     <div class="links-box">
                        <ul>
                           <li><a href="Education.html"><i class="fas fa-angle-right"></i>Education</a></li>
                           <li><a href="#"><i class="fas fa-angle-right"></i>Basic course</a></li>
                           <li><a href="about.html"><i class="fas fa-angle-right"></i>About academy</a></li>
                           <li><a href="Privacy-policy.html"><i class="fas fa-angle-right"></i>Privacy policy</a></li>
                           <li><a href="terms-condition.html"><i class="fas fa-angle-right"></i>Terms & Condition</a></li>
                        </ul>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
      </footer>
      <!-- Footer -->
      <!-- Javascript -->
      <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
      <script src="{{asset('frontend')}}js/popper.min.js"></script>
      <script src="{{asset('frontend')}}js/owl.carousel.min.js"></script>
      <script src="{{asset('frontend')}}js/bootstrap.min.js"></script>
      <script src="{{asset('frontend')}}js/custom.js"></script>
      <!-- Javascript -->
   </body>
</html>
