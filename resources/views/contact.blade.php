@extends('layout')
  @section('content')
	  
	  
	   
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-10">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Address:</span> House # 3, Street # 6 opposite old house,
Defence Road near Bhatta Chowk Lahore.</p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-tablet"></span>
			          	</div>
			            <p><span>Phone:</span> <a href="tel://1234567920">Call us: 0301-4560205</a></p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:info@yoursite.com">ssengg.97@yahoo.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-10 mb-md-5">
          	<h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
            <form action="#" class="border p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container-fluid px-0">
    		<div class="row justify-content-center">
        	<div class="col-md-12">
        		<div id="map" class="bg-white"></div>
        	</div>
        </div>
    	</div>
    </section>
		
    @endsection