<!doctype html>
@if(session()->has('email'))
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Agromart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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
    <link rel="stylesheet" href="admin1/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="admin1/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="admin1/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="admin1/css/responsive.css">
	
	<!-- Bootstrap CSS clock-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet"
          href="admin1/dist/css/dyclock.min.css">
	
	
    <!-- modernizr JS
		============================================ -->
    <script src="admin1/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
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
                        <!-- <li class="active"> -->
                            <a class="has-arrow" href="/adminh">
								   <!-- <i class="fa big-icon fa-home icon-wrap"></i> -->
								   <span class="mini-click-non">Agromart</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                 <li><a title="FarmerList" href="/newfarmer"><i class="fa fa-circle-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Approve Farmer</span></a></li>
                               <li><a title=" Category" href="/category"><i class="fa fa-circle-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"> Category</span></a></li>
                               <li><a title=" Mail" href="/send"><i class="fa fa-circle-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"> Send</span></a></li>
                            </ul>
                        <!-- </li> -->

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
                       <a href="/adminh"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                            <h4 class="text-left text-uppercase"><b>   <a href="/disapprove">Number of Farmers</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <!-- <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green"> <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div> -->
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                      <a href="/disapprove">  <h2 class="text-right no-margin">{{(count($far))}}</h2></a>
                                    </div>
                                </div>
                                <!-- <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b> <a href="/category">Number of Allowed Category</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <!-- <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div> -->
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                      <a href="/category">  <h2 class="text-right no-margin">{{(count($cat))}}</h2></a>
                                    </div>
                                </div>
                                <!-- <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div> -->
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b> <a href="croin">Number of Crop Registered</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <!-- <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-purple">80% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div> -->
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                       <a href="croin"> <h2 class="text-right no-margin">{{(count($crop))}}</h2></a>
                                    </div>
                                </div>
                                <!-- <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-purple"></div>
                                </div> -->
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
                            <!-- <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>Product Sales</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-grey active">
													<input type="radio" name="options" class="toggle" id="option1" checked="">Today</label>
                                                <label class="btn btn-grey">
													<input type="radio" name="options" class="toggle" id="option2">Week</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline cus-product-sl-rp">
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #24caa1;"></i>Bags</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #00b5c2;"></i>Shoes</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #ff7f5a;"></i>Jewelery</h5>
                                </li>
                            </ul> --><p><font color="red"style="font-size:30px;">********</font></p>
                            <div class="product-status-wrap" style="font-weight:bolder;font-color:white;background-color:lightblue">
                            
                            
                                    <table>
                                                  <h4>Approved Farmer Details</h4>
                                                  <hr>
                                             
                                              <tr>
                                                  <td><font color="red">First Name </font></td>
                                               <td><font color="red">Last Name</font></td>
                                              <td><font color="red">Email</font></td>
                                                  <td ><font color="red">Phone</font></td>
                                                  <td><font color="red">House Name</font></td>
                                                  <td ><font color="red">Country</font></td>
                                                  <td><font color="red">State</font></td>
                                                  <td ><font color="red">District</font></td>
                                                  <td><font color="red">Panchayath</font></td>
                                                  <td ><font color="red">PIN</font></td>
                                                  <td><font color="red"> Action</font></td>
                                                
                                              </tr>
                                              </thead>
                                              <tbody>
                                              <form method="post">
                                              @csrf
                                              @foreach($data as $user)	
                                              <tr>
                                                  <td>{{ $user->fname }}</td>
                <td ><font >{{ $user->lname }}</font></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->ph }}</td>
                <td>{{ $user->housename }}</td>
                <td>{{ $user->country }}</td>
                <td>{{ $user->state }}</td>
                <td>{{ $user->district }}</td>
                <td>{{ $user->panchayath }}</td>
                <td>{{ $user->pin }}</td>
                                                 
                                                  <td>               
                                                
                                                      <a href="{{route('dis.edit',$user->email)}}">
                                                      Block
                                                      </a>
                                                    
                                                    
                                                  </td>
                                              </tr>
                                              
                                             @endforeach
                                              </tbody>
                                          </table>
                                
                                
                               
                
                              </div>
                            
                            
                            
                            
                            
                            <!-- <div id="morris-area-chart" style="height: 356px;"></div> -->
                        </div>
                    </div>
                    
                    
                    <!--clock-->
                    
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					
          <br><br>
          
          <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3">

            <div class="text-center">

                
                <div class="some-class text-center">
                    <div id="dyclock-analog-example" class="dyclock-container"></div>
                </div>
				</div>
        </div><!--/ .col -->
    </div><!--/ .row -->
	</div>
	<center>
	<br><br>
	<p id="date" style="border:double;width:170px;height:30px;background-color:lightgreen;"><br></p></center>
					
					
                       
                    </div>
                </div>
            </div>
        </div>
     
    </div>
    
    
    
    <script>

window.onload = setInterval(clock,1000);
function clock()
{
    var d = new Date();
    var date = d.getDate();
    var year = d.getFullYear();
    var month = d.getMonth();
    var monthArr = ["January", "February","March", "April", "May", "June", "July", "August", "September", "October", "November","December"];
    month = monthArr[month];
    document.getElementById("date").innerHTML=date+" "+month+", "+year;
}
</script>

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
    <!-- morrisjs JS
		============================================ -->
    <script src="admin1/js/morrisjs/raphael-min.js"></script>
    <script src="admin1/js/morrisjs/morris.js"></script>
    <script src="admin1/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="admin1/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="admin1/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ 
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>-->
	
    <!-- plugins JS
		============================================ -->
    <script src="admin1/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="admin1/js/main.js"></script>
	
	<!-- dyScrollUpJS -->
<script src="https://cdn.jsdelivr.net/npm/dyscrollupjs@2.0.0/dist/js/dyscrollup.min.js"></script>
<script src="admin1/dist/js/dyclock.min.js"></script>
<script>
    window.onload = function () {
        dyscrollup.init({
            showafter: 300,
            scrolldelay: 300,
            position: 'right',
            image: "images/32.png",
            shape: 'other',
            width: 30,
            height: 30
        });

        // example
        var clockObjExample = new dyClock("#dyclock-analog-example", {
            clock: "analog",
            image: "images/c01.png",
            radius: 60,
            showdigital: true,
            format: "hh:mm:ss A"
        });
        clockObjExample.start();

        // default: digital clock default format: (HH:mm:ss)
        var clockObj = new dyClock("#dyclock-digital");
        clockObj.start();

        // default: digital clock default format: (HH:mm:ss) border
        var clockObj2 = new dyClock("#dyclock-digital-2", {
            clock: "digital",
            format: "HH:mm:ss",
            digitalStyle: {
                border: '1px solid #999'
            }
        });
        clockObj2.start();

        // default: digital clock default format: (HH:mm:ss) and digitalStyle
        var clockObj3 = new dyClock("#dyclock-digital-3", {
            clock: "digital",
            format: "HH:mm:ss",
            digitalStyle: {
                border: '1px solid #999',
                backgroundColor: "lightgrey",
                fontColor: "black",
                fontSize: '3em',
                fontFamily: 'Faster One'
            }
        });
        clockObj3.start();

        // default: digital clock format: (hh:mm:ss A)
        var clockObj4 = new dyClock(".dyclock-digital-4", {
            clock: "digital",
            format: "hh:mm:ss A"
        });
        clockObj4.start();

        // default: digital clock format: (hh:mm a)
        var clockObj5 = new dyClock(".dyclock-digital-5", {
            clock: "digital",
            format: "hh:mm a"
        });
        clockObj5.start();

        // analog clock
        var clockObj6 = new dyClock("#dyclock-analog-6", {
            clock: "analog"
        });
        clockObj6.start();

        // analog clock - image 1
        var clockObj7 = new dyClock("#dyclock-analog-7", {
            clock: "analog",
            image: "images/c01.png"
        });
        clockObj7.start();

        // analog clock - image 2
        var clockObj8 = new dyClock("#dyclock-analog-8", {
            clock: "analog",
            image: "images/c02.png",
            showdigital: true,
            format: "hh:mm:ss A",
            digitalStyle: {
                fontColor: "black",
                fontFamily: 'Faster One',
                fontSize: 28,
            }
        });
        clockObj8.start();

        // analog clock - image 3
        var clockObj9 = new dyClock(".dyclock-analog-9", {

            clock: "analog",

            format: "hh:mm:ss A",
            digitalStyle: {
                fontColor: "black",
                fontFamily: 'Monofett',
                fontSize: 32,
            },


            image: "images/c03.png",
            showdigital: true,
            radius: 120,
            analogStyle: {
                backgroundColor: "#eee",
                border: '1px solid #999',
                handsColor: {
                    h: "red",
                    m: "orange",
                    s: "green"
                },
                handsWidth: {
                    h: 9,
                    m: 5,
                    s: 2
                },
                roundHands: true,
                shape: "circle"
            }

        });
        clockObj9.start();

        // analog clock - image 1
        var clockObj10 = new dyClock(".dyclock-analog-10", {
            clock: "analog",
            image: "images/c01.png",
            radius: 40
        });
        clockObj10.start();
    };
</script>
	
	
	
	
</body>

</html>
@endif