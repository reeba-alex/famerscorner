<!doctype html>
@if(session()->has('email'))
<html class="no-js" lang="en">
<?php
$date=date ('Y-m-d') ;
$gg= date('Y-m-d', strtotime($date. ' + 7 days'));
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AgroMart</title>
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
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/owl.carousel.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/owl.theme.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="http://127.0.0.1:8000/admin1/js/vendor/modernizr-2.8.3.min.js"></script>
     <!-- cropper CSS
		============================================ -->
        <link rel="stylesheet" href="http://127.0.0.1:8000/admin1/css/cropper/cropper.min.css">
<!--emoji-->
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
<!---slider-->

<!-- <style>


img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style> -->
<!-- <style>

img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style> -->
<style>
.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
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

<body class="bg"  >
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="/farmer"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="/farmer">
								   <i class="fa big-icon fa-home icon-wrap"></i>
								   <span class="mini-click-non">AgroMart</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                              <!-- <li><a title="Upload documents" href="/docupload"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Documents Upload</span></a></li> -->
                              <!-- <li><a title="Add crop type" href="/addproduct"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Add Crop Type</span></a></li> -->
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
                        <a href="/farmer"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
                                        <div class="header-top-menu tabl-d-n"><br>
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
                                                    <li><a href="/myprofile"><span class="fa fa-lock author-log-ic"></span>My Profile</a>
                                                        </li>
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
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="/farmer">AgroMart</a></li>
                                         <li><a href="/docupload">Documents Upload</a></li>
                                         </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="file-manager.html">File Manager</a></li>
                                                <li><a href="contacts.html">Contacts Client</a></li>
                                                <li><a href="projects.html">Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div><br>
            <!-- <center>	Crop Registration</center> -->
        <div class="single-product-tab-area mg-tb-15" >


<!-- 

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img_nature_wide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img_snow_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> -->
<br><br><br>
	  <div>
	  
	  
	  
	  <img src="/images/dd.png"/ style="position:relative;float:left;left:300;  width:800px;height:800px;border-radius:100px;">
	  <br>
	  <div style="float:left;left:50px;position:relative;border:double;border-radius:10px;height:700px;background-color:orange;" >
	  <br>
    <h3>Register Your Crop Into Here,  For Sale..<span>&#128071;</span> </h3>
                    <!-- <p style="font-color:green;font-size:20px;"><font color="blue">Register Here Earn From Home</font> </p> -->
               
<hr style="color:blue;">
<center>
                <form action="/cropstore" method="post" enctype="multipart/form-data" >
@csrf
<table>

                       
<tr><td><label><font size="3px">Select Category:</font></label></td>
                     <td>  <select id="state" class="form-control" style="border-color:red;border-radius:10px;"name="cat" required >
                            <option value="" selected disabled>Select</option>
							 @foreach($countries as $key => $state)
							 <option   value="{{$state}}">{{$state}}</option>
							  @endforeach
                               </select></td></tr>
                               <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td><label><font size="3px">Crop Name:</font></label></td>
                                  <td>   <input autocomplete="off"  type="text" class="form-control"id="firstname" placeholder="Variety name like Kashmeeri chilli" title="Variety name like Kashmeeri chilli.Fill with first letter capital." style="border-color:red;border-radius:10px;"  name="croname" title="Characters are allowed"  required onchange='Validlast1();' ></td></tr>
       
                                  <script>		
function Validlast1() 
{
    var val = document.getElementById('firstname').value;

    if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/)) 
    {
        alert('Only alphabets are allowed and Start with a Alphabet ');
		            document.getElementById('firstname').focus();
        return false;
    }
    if (!val.match(/^[A-Z]/)) 
    {
        alert(' Start with Capital letter ');
		            document.getElementById('firstname').focus();
        return false;
    }


    return true;
}

</script>     



                                  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                  

                                 


<tr><td><label><font size="3px">Expiration Date:</font></label></td>
                                   <td>  <input type="date" class="form-control" id="j" placeholder="How many days long your crop" title="How many days long your crop" style="border-color:red;border-radius:10px;" name="date" min="<?php echo $date; ?>"  required onfocus='haii();'> </td></tr>
                                  
                                 
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td> <label><font size="3px">Quantity:</font></label></td>
                                  <td> <input autocomplete="off" type="number" min="1" class="form-control" id="m"placeholder="How much available on your hand for selling" title="How much available on your hand for selling" style="border-color:red;border-radius:10px;" name="qua" pattern="[1-9][0-9]" required onchange='Validlast2();' ></td>
                         <script>                               
                                  function Validlast2() 
{
    var val = document.getElementById('m').value;

    if (!val.match(/^[1-9][0-9]{0,}$/)) 
    {
        alert('Only  positive numbers  are allowed not allow 0 quantity  ');
		            document.getElementById('m').focus();
        return false;
    }

    return true;
}
if (val<0) 
    {
        alert('Only  positive numbers  are allowed not allow 0 quantity ');
		            document.getElementById('m').focus();
        return false;
    }

    return true;

</script>                                                    
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  <td><select name="quan"class="form-control" style="border-color:red;border-radius:10px;" required><option value="kg">kg</option>
                                                        <option value="g">g</option>
                                                        </select></td></tr>
                                                        <tr><td>&nbsp;</td><td>&nbsp;</td>
<tr><td> <label><font size="3px"> Price: </font></label></td>
                 </td><td><input type='number' autocomplete="off" min="1" value="0" step="0.01" title="Currency two decimal points are allowed" pattern="^\d+(?:\.\d{1,2})?$" class="form-control" placeholder="Price of your crop" title="Price of your crop" style="border-color:red;border-radius:10px;" name="price" id="p" required onchange='price();'></td></tr>           
                 
                <!-- <input type="number"class="form-control" placeholder="0.00" required name="price" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
"> -->
                 <script>                               
                                  function price() 
{
    var val = document.getElementById('p').value;

    if (val<0)
    {
        alert('Only positive numbers  are allowed not allow 0  ');
		            document.getElementById('p').focus();
        return false;
    }

    return true;
}

</script>                  
                
                
                
                
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>  <label><font size="3px">Image:</font></label></td>
                                   <td> <input type="file" class="form-control" placeholder="" style="border-color:red;border-radius:10px;" name="images" accept="Image/*" multiple required>  </td></tr>      
                                   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
   <!-- <tr><td> <label><font size="3px">Payment Facility:</font></label></td>
                                                      <td>  <select class="form-control" name="pay"style="border-color:red;border-radius:10px;" required>
                                                      <option >Providing payment facilities</option>  
                                                      <option value="Cash On Delivery">Cash On Delivery</option>
                                                      <option value="Online Payment">Online Payment</option>
                                                        <option value="Both">Both</option>
                                                        </select> </td></tr> -->
                                                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>   <label><font size="3px">Delivery Days:</font></label>  </td>                                 
                                 <td>   <input autocomplete="off" type="text" class="form-control" id="n" min="1"  placeholder="How many days you want to deliver a crop" title="How many days you want to deliver a crop"style="border-color:red;border-radius:10px;" name="delivery" required onchange='Validlast3() ;'></td></tr>
                                 <script>                               
                                  function Validlast3() 
{
    var val = document.getElementById('n').value;

    if (!val.match(/^[1-9][0-9]{0,}$/)) 
    {
        alert('Only positive numbers  are allowed not allow 0 days ');
		            document.getElementById('n').focus();
        return false;
    }

    return true;
    if (val<0) 
    {
        alert('Only  positive numbers  are allowed not allow 0 days ');
		            document.getElementById('n').focus();
        return false;
    }

    return true;
}

</script>               
                                 
                                 
                                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td><label><font size="3px">Description About Your Crop:</font></label></td>
                                   <td> <textarea class="form-control" name="des" id="o"rows="5"style="border-color:red;border-radius:10px;" cols="35" pattern="[A-Za-z][A-Za-z0-9 ]"required onchange='Validlast4();'>
                                                        </textarea>  </td></tr>
                                                       
                                                        <!-- <script>
                                  function Validlast4() 
{
    var val = document.getElementById('o').value;

    if (!val.match(/^[A-Za-z][A-Za-z0-9" ".]{0,}$/)) 
    {
        alert(' Start with a Alphabet ');
		            document.getElementById('o').focus();
        return false;
    }

    return true;
}

</script>
                                                        -->
                                                       
                                                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                                 <tr><td>&nbsp;</td>    <td>   <input type="submit" class="form-control" placeholder="" value="Register" style="background-color:lightgreen;border-radius:8px;border-color:red;"> </td></tr>    
        </table>
            </form>
                                                                  
                                                       
                                                       
                                                
                                                                    
                                                                     <script>
													  var msg='{{Session::get('alert')}}' ;
													   var exist='{{Session::has('alert')}}' ; 
													   if(exist)
													   {
													   alert(msg);}													   
													   </script>
													   
													   
                                                                    
			   </div>

 



     <!-- <h2>Responsive Image with Transparent Text</h2></center> -->

<!-- <div class="container" style="float:left;border-radius:10px;">
  <img src="/images/farmer.jpg" alt="Notebook" style="width:20500px;border-radius:10px;"> 
  <div class="content">
    <h1>Explore Your Effort <i class="em em-full_moon_with_face"></i></h1>
    <p><i class="em em-full_moon_with_face"></i> <font size="5px">Provide Fresh, Healthy, Tasty Food Product To World && Explore Your Dreams And Effort.</font> <i class="em em-full_moon_with_face"></i></p>
  </div>
</div>  -->


            
            
            
            <!-- crop Registration-->
            <!-- <div class="single-pro-review-area" style="float:right;" >
                <div class="container-fluid" ><br>
                <div class="text-center custom-login" style="background-color:lightgreen;">
                <hr>
                    <h3>Register Your Crop Into Here,  For Sale..<span>&#128071;</span> </h3>
                    <!-- <p style="font-color:green;font-size:20px;"><font color="blue">Register Here Earn From Home</font> </p> -->
                </div>

            
  
    
    
<!-- jquery
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/owl.carousel.min.js"></script>
<!-- sticky JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/jquery.sticky.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="http://127.0.0.1:8000/admin1/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
============================================ -->
<script src="http://127.0.0.1:8000/js/metisMenu/metisMenu.min.js"></script>
<script src="http://127.0.0.1:8000/js/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/morrisjs/raphael-min.js"></script>
<script src="http://127.0.0.1:8000/admin1/js/morrisjs/morris.js"></script>
<script src="http://127.0.0.1:8000/admin1/js/morrisjs/morris-active.js"></script>
<!-- morrisjs JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/sparkline/jquery.sparkline.min.js"></script>
<script src="http://127.0.0.1:8000/admin1/js/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/calendar/moment.min.js"></script>
<script src="http://127.0.0.1:8000/admin1/js/calendar/fullcalendar.min.js"></script>
<script src="http://127.0.0.1:8000/admin1/js/calendar/fullcalendar-active.js"></script>
<!-- plugins JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="http://127.0.0.1:8000/admin1/js/main.js"></script>
  <!-- cropper JS
		============================================ -->
        <script src="js/cropper/cropper.min.js"></script>
    <script src="js/cropper/cropper-actice.js"></script>
</body>

</html>
@endif