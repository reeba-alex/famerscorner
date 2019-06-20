







<!doctype html>
@if(session()->has('email'))
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AgroMart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="admin1/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/owl.carousel.css">
    <link rel="stylesheet" href="admin1/css/owl.theme.css">
    <link rel="stylesheet" href="admin1/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="admin1/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="admin1/css/calendar/fullcalendar.print.min.css">
    <!-- tabs CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/tabs.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="admin1/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
    body,html { 
  /* background: url(/images/jj.jpg); no-repeat center center fixed;  */
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
/* height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("img_girl.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
body
    {
        background-image:url(/images/farmer.jpg);
        height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    } */

</style>

</head>
<body class="bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
           <!-- <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>-->
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                       
                            <a class="has-arrow" >
								   <i class="fa big-icon fa-home icon-wrap"></i>
								   <span class="mini-click-non">Agromart</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <!-- <li><a title="Add Crop Type" href="/addproduct"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Add Crop Type</span></a></li> -->
                              <li><a title="Register Crop For Sale" href="/regproduct" ><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Crop For Sale</span></a></li>
                             <li><a title="Register Farming Tool For Auction" href="/regauction" ><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tool For Auction</span></a></li>
                              <li><a title="View Product" href="/viewproduct" ><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">View Product</span></a></li>
                              <li><a title="View Order" href="/vieworder" ><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">View Order</span></a></li>
                              <li><a title="View Review" href="/viewreview" ><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">View Review</span></a></li>
                              <li><a title="Buy Product" href="/buy" ><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Buy Product</span></a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                       <a href=""><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars"></i>
												</button>
                                        </div>
                                    </div>
                                   <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                          	<font color="white">	{{Session::get('email')}}</font>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                              
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
																<span class="admin-name">{{Session::get('email')}}</span>
															<i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                       
                                                        
                                                        <li><a href="/myprofile"><span class="fa fa-lock author-log-ic"></span>MyProfile</a>
                                                        <li><a href="/log"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                          </li>
                                                    </ul>
                                                </li>
                                          
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
         
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                      <!--  <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>-->
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b></b></span>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                             <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-grey active">
													<input type="radio" name="options" class="toggle" id="option1" checked="">Today</label>
                                                <label class="btn btn-grey">
													<input type="radio" name="options" class="toggle" id="option2">Week</label>
                                            </div> 
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <ul class="list-inline cus-product-sl-rp">
                            <center>
                                <li>
                                <h1>WELCOME AgroMart <h1>
                                </li>
                                <li>
                              <img src="images/farmer.jpg"style="width:100px;height:100px;border-radius:100px;">
                                </li>
                                </center>
                            </ul>
                            <div id="sparklinehome" class="sparkline-container"><p style="background-color;font-size:20px;height:200px;"><font color="green">Our mission is to help elevate the farmer from a mere docile practitioner of a vocation to a self supporting entrepreneur and thus help place agrarian economy of the nation on a healthy footing.

Wish us “The Best” to succeed in this social initiative and also join our humble efforts to 

Organise the Agricultural sector.</font><br><font color="blue"style= "font-weight:bolder;position:relative;left:300px;">
Improve Agricultural marketing capabilities.
<br>Help Farmers overcome debt.
<br>Stop Farmers suicide.
Empower Farmers..</font></p></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                        <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30"style="height:300px;background-color:red">
                        <div class="tab-content-details shadow-reset" style="position:relative;height:200px;">
                           <br><br>
                        <p><img src="images/farmer.jpg"style="width:100px;height:100px;border-radius:100px;">    <h1><font color="black">BEST QUALITY INDIA<br> AGRICULTURE PRODUCTS</font><h1></p>
                            <h2><font color="green"><i>BUY FROM AgroMart</i></font></h2>
                            
                            <div class="outs_more-buttn">
                            <br>
                           
                            
                                 <a href="/buy"style="background-color:red;border-radius:10px;" ><font size="5px" color="black"><b>SHOP NOW</b></font></a>
                              </div>
                        </div>
                        </div>
                        <!-- <div class="white-box analytics-info-cs mg-b-10">
                            <h3 class="box-title">Total Page Views</h3>
                            
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-purple">7469</span></li>
                            </ul>
                        </div> -->
                        <!-- <div class="white-box analytics-info-cs mg-b-10">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-info">6011</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs">
                            <h3 class="box-title">Bounce Rate</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="text-danger">18%</span></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        
      

        <br>
        <br>
        @if(count($bid)>0)
        @foreach($bid as $us)
        <div style="position:relative;left:50px;">
        <div class="alert alert-info alert-st-two" role="alert">
                                <i class="fa fa-info-circle adminpro-inform admin-check-pro" aria-hidden="true"></i>
                                <p class="message-mg-rt"><strong>Heads up!</strong><font color="red" size="5px"> YOU GET AN AUCTION ON <b> {{$tool}}</b> WHICH IS<b> {{$us->amount}}</b> PRICE ,<br> MUST PAY ONLINE PAYMENT USING THIS LINK&nbsp; <b><font color="blue"><i><a href="{{route('aupayment.edit',$us->id)}}">Pay</a></i></font></b>    &nbsp;THIS IS VALID UNTIL<b> {{$us->paymentdate}}</b></font> </p>
                            </div>
               </div>
        @endforeach
        @endif
        @if(count($au)>0)
        <br>
        <h3 style="position:relative;left:100px;"> PARTICIPATE AUCTION</h3>
               @foreach($au as $user1)
        <div class="product-new-list-area" style="position:relative;left:100px;">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-new-trend mg-t-30">
                            <a href="#"><img src="{{asset('storage/upload/'.$user1->image)}}" style="width:200px;height:200px;" alt=""></a>
                            <br>
                            <div class="overlay-content">
                                <a href="#">
                                    <h2>₹{{$user1->price}}</h2>
                                </a>
                                <a href="{{route('parau.edit',$user1->id)}}" class="btn-small">{{$user1->toolname}}</a>
                                
                                <!-- <div  style="background-color:black;height:30px;width:150px;border-radius:10px;position:relative;left:200px;">
                                 <a href="{{route('parau.edit',$user1->id)}}" ><font  style="font-weight:bolder;"> Go To Auction</font></a>
                    </div> -->
										
                                <a href="{{route('parau.edit',$user1->id)}}">
                                    <h4><font color="red">GO TO AUCTION</font></h4>
                                <!-- </a><a href="{{route('parau.edit',$user1->id)}}" ><font  style="font-weight:bolder;"> Go To Auction</font></a> -->
                                <!-- <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
               
               @else
                  <div class="admintab-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tab-content-details shadow-reset" style="position:relative;width:1500px;height:200px;background-color:lightgreen;">
                           <br><br>
                        <p><img src="images/farmer.jpg"style="width:100px;height:100px;border-radius:100px;">    <h1><font color="red">BEST QUALITY INDIA AGRICULTURE PRODUCTS</font><h1></p>
                            <h2><font color="green"><i>Sell Through AgroMart</i></font></h2>
                            
                            <div class="outs_more-buttn">
                            <br>
                           
                            <br>
                                 <a href="/regauction" style="background-color:red;border-radius:10px;" ><font size="20px" color="black"><b>Register Tools For Auction</b></font></a>
                              </div>
                        </div>
                    </div>
                </div>
               
               @endif
              
                </div>
            </div>
        </div>
		
		<!-- tabs start-->
        <!-- <div class="admintab-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tab-content-details shadow-reset" style="position:relative;left:100px;">
                            <h2>AgroMart</h2>
                            <p style="background-color:lightblue;font-size:20px;"><font color="red"><img src="images/farmer.jpg"style="width:100px;height:100px;border-radius:100px;">Our mission is to help elevate the farmer from a mere docile practitioner of a vocation to a self supporting entrepreneur and thus help place agrarian economy of the nation on a healthy footing.

<br>Wish us “The Best” to succeed in this social initiative and also join our humble efforts to 

Organise the Agricultural sector.</font><br><font color="blue"style= "font-weight:bolder;">
Improve Agricultural marketing capabilities.
Help Farmers overcome debt.
Stop Farmers suicide.
Empower Farmers..</font></p>
                        </div>
                    </div>
                </div>
                <br>
                <div style="float:left;width:300px;position:relative;left:300px;background-color:lightgreen;">
                @if(count($gggg)>0)
               @foreach($gggg as $u)
               <table>
               <tr><td>{{$u->message}} on {{$u->price}}<a href="{{route('p.edit',$u->id)}}">Pay</a></td></tr>
               @endforeach
               @else
               no bid get
               @endif
               </div>
               
        <!-- tabs End-->
		</div>
    
		<!-- jquery
		============================================ -->
    <script src="admin1/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="admin1/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="admin1/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="admin1/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="admin1/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="admin1/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="admin1/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="admin1/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="admin1/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="admin1/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="admin1/js/metisMenu/metisMenu.min.js"></script>
    <script src="admin1/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="admin1/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="admin1/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="admin1/js/main.js"></script>
</body>

</html>
@endif