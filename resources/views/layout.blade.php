<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SS Engineering</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/icomoon.css')}}">   
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/style.css')}}">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	

   
    </head>
  <style>
   .ai{
    
   }
   .button {
  background-color: #FA5C20;
  border: none;
  color: white;
  padding: 3px;
  text-decoration: none;
  display: inline-block;
  transition: all 0.5s;
  cursor: pointer;
  font-size: 16px;
  margin: 1px 1px;
  
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button1 {border-radius: 16px;}
.pu{
  padding-left:600px;
}
.ag{
  margin-left:-30px;
}
    </style>
  <div class="bg-top navbar-light d-flex flex-column-reverse">
    	<div class="container py-3">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4 a">
    				<a class="navbar-brand ag" > <img src="/images/capture.png"   width="350"
         height="60" ></a>
    			</div>
	    		<div class="col-lg-8 d-block ">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>ssengg.97@yahoo.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-call"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>+923004440938</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-time"></span></div>
						    <div class="text">
						    	<span>Working Hours</span>
						    	<span>Mon - Sat 8am - 6pm</span>
						    </div>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
		 
    </div>
    <body>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
      
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="/welcome" class="nav-link">HOME</a></li>
	        	<li class="nav-item"><a href="/about" class="nav-link">ABOUT US</a></li>
	        	<li class="nav-item"><a href="/product" class="nav-link">PRODUCTS</a></li>
	        	<li class="nav-item"><a href="/projectss" class="nav-link">PROJECTS</a></li>
	        	<li class="nav-item"><a href="/services" class="nav-link">SERVICES</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">CONTACT</a></li>
	        </ul>
        </div>
        <div class="button">
        
        <button class="button button1"><span>Company Profile</span></button>
         
        </div>
	    </div>
      </nav>
      @yield('content')
      <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">House # 3, Street # 6 opposite old house,
Defence Road near Bhatta Chowk Lahore.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+923004440938</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ssengg.97@yahoo.com</span></a></li>
	              </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="pu">
          <div class="row ">
            <div class="ftco-footer-widget mb-5 ml-md-4 ">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled  ">
                <li><a href="#"><span class=""></span><u>Home</u></a></li>
                <li><a href="#"><span class=""></span><u>About us</u></a></li>
                <li><a href="#"><span class=""></span><u>Products</u></a></li>
                <li><a href="#"><span class=""></span><u>Services</u></a></li>
                <li><a href="#"><span class=""></span><u>Projects</u></a></li>
                <li><a href="#"><span class=""></span><u>Contact</u></a></li>
              </ul>
            </div>
          </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  SS ENGINEERING | &copy;<script>document.write(new Date().getFullYear());</script> , All rights reserved 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.animateNumber.min.js"></script>
  <script src="/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/js/google-map.js"></script>
  <script src="/js/main.js"></script>
    </footer>

