<!DOCTYPE html>
@if(session()->has('email'))
<html lang="zxx">
   <head>
      <title>AgroMart</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="http://127.0.0.1:8000/index/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="http://127.0.0.1:8000/index/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="http://127.0.0.1:8000/index/css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="http://127.0.0.1:8000/index/css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="http://127.0.0.1:8000/index/css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="http://127.0.0.1:8000/index/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>

   <body>
      <div class="header-outs" id="home">
        <div class="header-bar" >
		<br>
            <div class="info-top-grid">
               <div class="info-contact-agile">
                  <ul style="position:relative;left:700px;" >
                   <!--  <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>+(000)123 4565 32</p>
                     </li>
                     <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">info@example1.com</a></p>
                     </li>-->
                     <li>
					 
					<!-- <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" style="border-radius:10px;position:relative;left:500px;"placeholder="Search">
                        <button class="btn" type="submit"style="border-radius:20px;position:relative;left:500px;">Search</button>
                     </form>-->
					 
                     </li>
					<!-- <li class="toyscart toyscart2 cart cart box_1" style="position:relative;left:500px;border-radius:10px;">
                              <form action="#" method="post" class="last">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down" style="border-radius:10px;"></span>
                                 </button>
                              </form>
                           </li>-->
						    <li >
                        <a data-toggle="modal" data-target="#exampleModalreg" class="nav-link" style="font-weight:bolder;"><font color="white">Sell With Us </font></a>
                     </li>
					 
					  <li >
                        <a href="" class="nav-link" style="font-weight:bolder;" data-toggle="modal" data-target="#exampleModal1"><font color="white">Buy With Us</font></a>
                     </li>
					  <li >
                        <a href="/log" ><font color="white">Logout</font></a>
                     </li>
				 <li>&nbsp;</li> <li>&nbsp;</li> <li>&nbsp;</li> <li>&nbsp;</li>
                      <li>
				<a href="/log"> <font color="white" size="5px;">Welcome :&nbsp; {{Session::get('email')}}</font></a></span>
				 
				 </li> 
                  </ul>
               </div>
            </div><br>
            <div class="container-fluid" >
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="/buy">AgroMart</a></h1>
                  </div>
                  <div class="info-contact-agile">
                  <ul style="background-color:white;width:500px;border-radius:8px;position:relative;left:200px;">
                   
					 <font color="red" style="font-weight:bolder;color:red;">
                    <li class="nav-item active">
                        <a class="nav-link" href="/buy"><font color="red">Home</font> <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="/about" class="nav-link"><font color="red">About</font></a>
                     </li>
                     <li class="nav-item">
                        <a href="" class="nav-link" data-toggle="modal" data-target="#exampleModal2"><font color="red">Shop Now</font></a>
                     </li>
                     <li class="nav-item">
                        <a href="/gallery" class="nav-link"><font color="red">Gallery</font></a>
                     </li>
				 
					 </font>
					 <span></span>
					
                          <!-- <li class="toyscart toyscart2 cart cart box_1">
                              <form action="#" method="post" class="last">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"></span>
                                 </button>
                              </form>
                           </li> -->
                  </ul>
               </div>
                     
                 
                  <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                         
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
			<br><br>
			
        
         </div>
         <!-- Slideshow 4 -->
         <div class="slider text-center">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5> <br></h5>
                              <div class="bottom-info">
                                 <p></p>
                              </div>
                              <div class="outs_more-buttn">
                                <!-- <a href="about.html">Read More</a>-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info ">
                            
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <div class="slider-info">
						   <p><font color="white">Sell organic and other agriculture products<br>
0% commission fees for selling<br>
Independent store for each seller<br>
No subscription fees</font></p>
                         
                              
                              <div class="bottom-info">
                              
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="" data-toggle="modal" data-target="#exampleModal">Free SignUp</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
           
            <div class="clearfix"></div>
         </div>
      </div>
<br>	@if(\Session::has('success'))
						<div class="alert alert-success">
					<ul>
					<li>
					{!! \Session::get('success')!!}
					</li>
					</ul>
					</div>
					@endif<br><center>
<h1>BEST QUALITY INDIA AGRICULTURE PRODUCTS<h1><br>
<h4>You can sell your product to end consumer<h4><br>
    
			@if(count($data)>0)


@foreach($data as $user1)
				<div class="col-md-4 product-men"style="float:left;height:250px;width:300px;">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
									



    <img   class="pro-image-front" src="{{asset('storage/upload/'.$user1->image)}}" style="height:250px;"" >
		
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('buy4.edit',$user1->id)}}" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">Stock</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$user1->cropvariety}}</a></h4>
										<div class="info-product-price">
											<span class="item_price">₹{{$user1->price}}</span>
											<!-- <del>$390.71</del> --><a href="{{route('buy3.edit',$user1->id)}}"><font size="5px" style="font-weight:bolder;">BUY</font></a>
											
										</div>
										
										 	
									</div>
								</div>
							</div>
							@endforeach
   



           

	 @else
<br><br><br><br>
working
@endif
			
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
	
	</div>
</div>
<script>
													  var msg='{{Session::get('alert')}}' ;
													   var exist='{{Session::has('alert')}}' ; 
													   if(exist)
													   {
													   alert(msg);}													   
													   
													   
													   
													   </script>      
      <!--//subscribe-->
      <!-- footer -->
     <!-- <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2018 Toys-Shop. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
            </p>
         </div>
      </footer>-->
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="/loginme" method="post">
                     @csrf
                        <div class="fields-grid">
                           <!--<div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>-->
                           <div class="styled-input">
                         
                              <input type="email" placeholder="Your Email" name="email" autocomplete="off" required>
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required>
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
						@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Choose Your Desired Category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">

                  @if(count($cat)>0)


@foreach($cat as $us)

<a href="{{route('buy1.edit',$us->id)}}"><font color="red">{{$us->name}}</font></a><br>
@endforeach
@endif



                     
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
	  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Register Here...</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="/data1" class="oh-autoval-form" method="post" onsubmit="return" id="register">
												  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                       <input type="text"  name="firstname" id="firstname" placeholder="Name" autocomplete="off" value="{{ old('firstname') }}"class="form-control" style="text-transform:capitalize;"title="Only Alphabet are allowed" pattern="[a-zA-Z\s]+" required >
                                                       
                                                      		   
													    		   
                                             
																
                                                
                                                       <input type="email" class="form-control "  name="email" id="e1" style="text-transform:lowercase;" placeholder="Email" autocomplete="off" required onChange='Validem1();'>
													   
													   <script>		
function Validem1() 
{
    var val = document.getElementById('e1').value;

    if (!val.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) 
    {
        alert('Incorrect Email');
		
		     document.getElementById('e1').value = "";
        return false;
    }

    return true;
}

</script>
													   
													   <input type="password" class="form-control"  name="password" id="pass" placeholder="Password" onchange='validate01();' autocomplete="off" required>
													  
                                                                    <script>
                    function validate01() 
{
     var val = document.getElementById('pass').value;

if (!val.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/)) 
{
   alert('Password should contain atleast a capital letter and small letter and a Number with length atleast 6 ');
      
           document.getElementById('pass').focus();
    return false;
}

return true;
}


</script>
          
                                                                   
                                                                   
                                                                   
                                                                    <input type="password" class="form-control av-password" name="cpassword" id="cpass"placeholder=" Confirm Password" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars. &&&& Similar to password" autocomplete="off" onChange='check1();'>
                                                       
													   <script>
													   
	function check1(){
			if(document.getElementById("cpass").value!=document.getElementById("pass").value)
			{
			alert('Doesnot match with password');
				
		            document.getElementById('cpass').value = "";
            }
		else{
			alert(' matched');
			}}
	</script>							   
													
													   <input type="submit" class="form-control" name="submit" value="Submit Button">
													   <script>
													  var msg='{{Session::get('alert')}}' ;
													   var exist='{{Session::has('alert')}}' ; 
													   if(exist)
													   {
													   alert(msg);}													   
													   
													   
													   
													   </script>
                                                  </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="exampleModalreg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Choose Your Desired Category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">

                  <br>
&nbsp;&nbsp;&nbsp;Already I Have An Account&nbsp;<a href="#" data-toggle="modal" data-target="#exampleModal" >Login?</a>	
<br>  
	  <form action="/data"  method="post" name="register" class="oh-autoval-form"  enctype="multipart/form-data">
									@csrf
                                             
                                             <table><br>  
											 <div>
											 <tr><td><label>FirstName:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <input type="text"value="{{ old('fname') }}"  name="fname" id="firstname" class="form-control" placeholder="First Name" autocomplete="off"  title="Only alphabets are allowed and Start with a Alphabet" required pattern="[a-zA-Z]+" onchange='Validlast1();'>
											 
											 </td></tr></div>
											<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label>Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <input type="text"value="{{ old('lname') }}" name="lname"class="form-control" id="l" placeholder="Last Name"autocomplete="off"  title="Only alphabets are allowed and Start with a Alphabet" required pattern="[a-zA-Z]+" onchange='Validlast();'>
											</td></tr> </div>  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label>Email Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <input type="email"id="e" style="text-transform:lowercase;"class="form-control" name="email" placeholder="Email"autocomplete="off" required onchange='Validem();'>
								            </td></tr> </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td><label> Mobile Number:<label>&nbsp;	&nbsp;&nbsp; </td> <td> <input type="telephone"class="form-control"   value="{{ old('phone') }}"name="phone" id="c" placeholder="Mobile Phone" autocomplete="off" required onchange='Validat();' >

											</td></tr> </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											  <div>
											<tr><td> <label>Profile Photo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <input type="file"value="{{ old('fname') }}"  name="pic" id="fileChooser" placeholder="profile pic" class="form-control"accept="image/*" onchange='ValidateFileUpload();' required  >
											</td></tr> </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label>House Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <input type="text"value="{{ old('hname') }}" name="hname" id="hname" placeholder="House Name" class="form-control"autocomplete="off"  title="Only alphabets are allowed and Start with a Alphabet" required pattern="[a-zA-Z]+" onChange='validate();'>
										</td></tr>	 </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label>Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <select name="country"value="{{ old('country') }}" id="country" autocomplete="off" placeholder="country"class="form-control"  av-message="required" required>
                                                       <option value="">Select Country</option>
                        
							 <option value="India">India</option>
						
                    </select>
								          </td></tr>   </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
										<tr><td>	<label> State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label></td>	&nbsp;   
										<td><select name="state" value="{{ old('state') }}" id="state"  autocomplete="off" placeholder="state" class="form-control" required>
                                                       <option value="">Select State</option>
                        
							 <option value="kerala">Kerala</option>
						
                    </select>
										</td></tr>	 </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
										<tr><td>	 <label>District:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <select id="state" value="{{ old('district') }}" name=district class="form-control" required> 
                       <option value="">Select District</option>                                         
                      @foreach($states as $key => $state)
                      
							 <option value="{{$state}}">{{$state}}</option>
							  @endforeach
                                     </select>
										</td></tr>	 </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label>
											 Panchayath Name:</label>&nbsp;</td>
											<td> <input type="text"  av-message="must be letter also required" value="{{ old('pan') }}" name="pan" class="form-control"id="pan"placeholder="Panchayath Name"autocomplete="off" title="Only alphabets are allowed and Start with a Alphabet" required pattern="[a-zA-Z]+" onchange='validate1();'>
											</td></tr> </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label>Pincode: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <input type="text"  autocomplete="off"  av-message="6 gigit nuber& required"name="pin"  id="pin" class="form-control"placeholder="Pin Number" title="Only six digit Number" required pattern="[1-9][0-9]{5}+$" onchange='validate0();' >
											
											</td></tr> </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <input type="password" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars." class="form-control"id="pass" name="password" placeholder="Password" onchange='validate01();' required>
													
					
                                                                   
											</td></tr> </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label>Confirm Password:</label>&nbsp;</td>
											<td> <input type="password"  name="cpassword" id="cpass" class="form-control" placeholder="Confirm Password" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars.Similar to password" onChange='check();' required>
											</td></tr> </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label><font color="yellow">Document Upload**</font></label>
											</td></tr> </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label>Aadhar Card:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <input type="file" placeholder="Aadhar Card" name="img1"class="form-control" accept="application/pdf, application/vnd.ms-excel" required>
											</td></tr> </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label>Tax Receipt:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <input type="file" placeholder="Tax" name="img2" class="form-control"accept="application/pdf, application/vnd.ms-excel" required>
                                           </td></tr>  </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											  <div>
											<tr><td> <label>Plan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <input type="file"  placeholder="plan" name="img3"class="form-control" accept="application/pdf, application/vnd.ms-excel" required>
											</td></tr> </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 <div>
											<tr><td> <label>Aadharam:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;</td>
											<td> <input type="file"  placeholder="Aadharam" name="img4"class="form-control" accept="application/pdf, application/vnd.ms-excel" required>
											</td></tr> </div><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
											 
        
       

											
											
                                            
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

                              <script>		
function Validlast() 
{
    var val = document.getElementById('l').value;

    if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/)) 
    {
        alert('Only alphabets are allowed and Start with a Alphabet');
        document.getElementById('l').focus();
        return false;
    }
    if (!val.match(/^[A-Z]/)) 
    {
        alert(' Start with Capital letter ');
		            document.getElementById('l').focus();
        return false;
    }

    return true;
}

</script>             



          
          <script>		
function Validem() 
{
    var val = document.getElementById('e').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        alert('Incorrect Email.Use email format');
		
		    document.getElementById('e').focus();
        return false;
    }

    return true;
}

</script>													   
													   
                                                                 

<script>		
function Validat() 
{
    var val = document.getElementById('c').value;

    if (!val.match(/^[6-9][0-9]{9,9}$/))
    {
        alert('Only Numbers are allowed start with 6,7,8,9 and contain 10 digits');
	
		
        document.getElementById('c').focus();
        return false;
    }

    return true;
}

</script>
													   
												
                                                                 
                                                                    <SCRIPT type="text/javascript">
    function ValidateFileUpload() {
        var fuData = document.getElementById('fileChooser');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
                document.getElementById('fileChooser').focus();
            }
        }
    }
</SCRIPT>
													
										
												

												
												<script>		
function validate() 
{
    var val = document.getElementById('hname').value;

    if (!val.match(/^[0-9a-zA-Z ]+$/)) 
    {
        alert('Only alphabets and numbers are allowed');
        document.getElementById('hname').focus();
        return false;
    }
    if (!val.match(/^[A-Z]/)) 
    {
        alert(' Start with Capital letter ');
		            document.getElementById('hname').focus();
        return false;
    }

    return true;
}

</script>
												
												
												
												
												
																	
													   
													   
													   
													   
													   
											
                                                                    <script>		
function validate1() 
{
    var val = document.getElementById('pan').value;

    if (!val.match(/^[a-zA-Z ]+$/)) 
    {
        alert('Only alphabets are allowed');
        document.getElementById('pan').focus();
        return false;
    }
    if (!val.match(/^[A-Z]/)) 
    {
        alert(' Start with Capital letter ');
		            document.getElementById('pan').focus();
        return false;
    }

    return true;
}

</script>
                                                                    
                                                                   
                    <script>
                    function validate0() 
{
    var val = document.getElementById('pin').value;

    if (!val.match(/^\d{6}$/)) 
    {
        alert('Only 6 digit number allowed');
        document.getElementById('pin').focus();
        return false;
    }

    return true;
}

</script>
            


                    

                                                                    <script>
                    function validate01() 
{
     var val = document.getElementById('pass').value;

if (!val.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/)) 
{
   alert('Password should contain atleast a capital letter and small letter and a Number with length atleast 6 ');
      
           document.getElementById('pass').focus();
    return false;
}

return true;
}


</script>
          
                                    
                                                 
                                                 
                                                 
                                                 
                                               
                                                            <script>	      
											function check(){
			if(document.getElementById("cpass").value!=document.getElementById("pass").value)
			{
			alert('Doesnot match with password');
				
               document.getElementById('cpass').focus();
            }
                                                       }
	
   </script>	
    <tr>     <td> <input type="submit"style="width:200px;background-color:lightgreen;" class="form-control" name="submit" value="Submit">
													  </td><tr>
                                                                  
                                                       
                                                       
                                                
                                                                    
                                                                     <script>
													  var msg='{{Session::get('alert')}}' ;
													   var exist='{{Session::has('alert')}}' ; 
													   if(exist)
													   {
													   alert(msg);}													   
													   </script>
													   
													   
                                                </table>		   
                                                  </form>



                     
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>

      <!-- //Modal 1-->
      <!--js working-->
      <script src='http://127.0.0.1:8000/index/js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
      <script src="http://127.0.0.1:8000/index/js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!--responsiveslides banner-->
      <script src="http://127.0.0.1:8000/index/js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	 
      <!--slider flexisel -->
      <script src="http://127.0.0.1:8000/index/js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 3,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 2
         			}
         		}
         	});
         	
         });
      </script>
      <!-- //slider flexisel -->
      <!-- start-smoth-scrolling -->
      <script src="http://127.0.0.1:8000/index/js/move-top.js"></script>
      <script src="http://127.0.0.1:8000/index/js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="http://127.0.0.1:8000/index/js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>
@endif