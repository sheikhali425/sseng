@extends('layout')
	 
	@section('content')
	 
	<style>
.vl {
  border-left: 6px solid #FA5C20;
  height: 115px; important!
  
}
.ok{

	font-size:40px;
	color:white;
	margin-top:-41px;
	
}
.my{
	margin-top:60px;
	margin-left:120px;
}
.dev{
	padding-left:460px; important!
}
.devv{
	padding-left:580px; important!
}

</style>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(/images/co.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5">
          	<img src="/images/tt.png">
			  <div class="my">
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
			</div>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(/images/ho.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5 ">
			  
		    <div class="vl mb-4"> &nbsp <div class="ok"><p> INNOVATION MEETS QUALITY CARE</p></div></div>
          </div>
        </div>
        </div>
      </div>
    </section>

		
		
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(/images/bg_3.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">You Always Get the Best Guidance</h2>
          </div>
        </div>	
    	</div>
	</section>
	<br>

    <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
			<div class="container consult-wrap">
				<div class="row d-flex align-items-stretch">
					<div class="col-md-6 wrap-about align-items-stretch d-flex">
						<div class="img" style="background-image: url(/images/bu.jpg); "></div>
					</div>
					<div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
						<div class="heading-section mb-4">
							<span class="subheading">Welcome to SS Engineering</span>
							<h2>Who we are ?</h2>
						</div>
						<p>S S Engineering has earned and maintained an enviable reputation for HVAC engineering and manufacture. Since our inception in 1992, our company has always been committed to provide the best quality HVAC/Mechanical Equipments and services at a superior value.  </p>
						<div class="tabulation-2 mt-4">
							<ul class="nav nav-pills nav-fill d-md-flex d-block">
							  <li class="nav-item">
							    <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Our Mission</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Our Vision</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> Our Value</a>
							  </li>
							</ul>
							<div class="tab-content bg-light rounded mt-2">
							  <div class="tab-pane container p-0 active" id="home1">
							  	<p>Our success relies on sustaining consistent growth by acquiring and retaining customers by delivering the highest levels of customer service and providing best solution for their problems. We strive for bringing innovation into the society and keep evolving our products and services in the best possible way.</p>
							  </div>
							  <div class="tab-pane container p-0 fade" id="home2">
							  	<p>We are seeking to be not only an option but a best decision for a client while choosing for their works. 
We want to be the best in what we do by exceeding our high standards of quality & services. 
</p>
							  </div>
							  <div class="tab-pane container p-0 fade" id="home3">
							  	<p> We
Builds the organization on the basis of integrity and Ethics
, Grows our business in a way that makes us proud.
, Builds honest relationship with our clients though fearless communication.
, Are Rigorous and gets it right. 
, Delivers WOW through our Services.
</p>
							  </div>
							</div>
						</div>
    				<div class="row mt-5">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="1387">0</strong>
		                <span>Happy Clients</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="310">0</strong>
		                <span>Success Reports</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="35">0</strong>
		                <span>Experienced</span>
		              </div>
		            </div>
		          </div>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section gh">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Product info</span>
            <h2 class="mb-4">Our Products & Services</h2>
            <!-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div> -->
		</div>
		
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/elbo.jpg');  opacity:0.6;">
								
              </a>
              <div class="text border border-top-0 p-4">
                <h3 class="heading"><a href="/ducting">Ducting</a></h3>
				<div class="text w-100 text-center row">
        				<a href="/ducting" ><span class="cat"> Metal sheet Ducting</span> &nbsp </a>
						<a href="/ducting" ><span class="cat"> Pre insulated Ducting</span> &nbsp </a>
						<br>
						<br>
						
        				</div>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/in.jpg');  opacity:0.6;">
								
              </a>
              <div class="text border border-top-0 p-4">
                <h3 class="heading"><a href="/insulation">Insulation</a></h3>
                <div class="text w-100 text-left ">
						<a href="/insulation" ><span class="cat"> Glass wool</span> &nbsp </a>
						<br>
						<a href="/insulation" ><span class="cat"> Rock wool</span> &nbsp </a>
						<br>
						<a href="/insulation" ><span class="cat"> Arma flex</span> &nbsp </a>
        				</div>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/air.png');  opacity:0.6;">
								
              </a>
              <div class="text border border-top-0 p-4">
                <h3 class="heading"><a href="/air">Air Devices</a></h3>
                <div class="text w-100 text-left ">
						<a href="#" ><span class="cat"> Diffusers</span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspGrilles </a>
						<br>
						<a href="#" ><span class="cat"> Dampers</span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Filters </a>
						<br>
						<a href="#" ><span class="cat"> Plenum Boxes</span> &nbsp &nbsp Duct heaters </a>
						</div>
						 
               
              </div>
            </div>
		  </div>
		  
        </div>
			</div>
			<br>
			
			<div class= dev>
			<div class="d-flex align-items-center mt-4 ">
	                <p class="mb-0"><a href="/product" class="btn btn-primary">View all Products <span class="ion-ios-arrow-round-forward"></span></a></p>
	                
			</div>
</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row no-gutters justify-content-center mb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
          	<span class="subheading">Projects Done</span>
            <h2 class="mb-4">Case Studies</h2>
            
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(images/pt.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">PTET Tower islamabad</span><br>
        				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">View Project</button>
        				
        				</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(images/mcb.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">MCB Bank, Jail Road.</span><br>
        				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">View Project</button>
        				
        					</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(images/cen.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">The Centauras Mall, islamabad.</span>
        				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">View Project</button>
        				
        				</div>
        		</div>
        	</div>
        	
        </div>
			</div>
			<br>
			<div class= devv>
			<div class="d-flex align-items-center mt-4 ">
	                <p class="mb-0"><a href="/projectss" class="btn btn-primary">View all Projects <span class="ion-ios-arrow-round-forward"></span></a></p>
	                
			</div>
</div>
				
		</section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Why Choose Us?</h2>
            <p>We are pakistan's number one company.</p>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"> Supply Of Equipments</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2">Project Execution & installation</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"> MEP Services</a>
						  </li>
						  
						  
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"> Operation and maintainance.</a>
						  </li>
						  
						
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
							  <div ko>
							  <div class="img" style="background-image: url(images/services.png); height: 300px; width:700px; opacity:0.7;"></div>
</div>
						  	<h3><a href="#">What we do?</a></h3>
						  	<p> SS Engineering has been successfully increasing and maintaining a portfolio of large number of satisfied customers throughout Pakistan; supplying services in the field of HVAC equipment supply, HVAC/MEP installation, Power generation, Civil construction & Operation & Maintenance.</p>
						  </div>
						  <!-- <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url(images/project-3.jpg);"></div>
						  	<h3><a href="#">Business Consulting</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url(images/project-4.jpg);"></div>
						  	<h3><a href="#">Business Insurance</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url(images/project-5.jpg);"></div>
						  	<h3><a href="#">Global Investigation</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="img" style="background-image: url(images/project-6.jpg);"></div>
						  	<h3><a href="#">Audit &amp; Evaluation</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/project-1.jpg);"></div>
						  	<h3><a href="#">Marketing Strategy</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div> -->
						</div>
					</div>
				</div>
    	</div>
    </section>

   

    <section class="ftco-section testimony-section">
      <div class="container-fluid px-md-5">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonies</span>
            <h2 class="mb-4">Our Clients</h2>
            <!-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>-->
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/bayer.png)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                     
                    </span>
                    <p>Bayer Pakistan pvt. limited Karachi.</p>
                    
                    <span class="position">Supply & Installation of HVAC Ducting  & Related Works & Air Devices.</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/sk.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                     
                    </span>
                    <p>Shaukat Khanum Hospital, Lahore.</p>
                   
                    <span class="position">Supply & Installation of HVAC Ducting  & Related Works & Air Devices.</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/sf.png)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      
                    </span>
                    <p>Sefam Private limited Lahore.</p>
                    
                    <span class="position">Supply & Installation of HVAC Ducting  & Related Works & Air Devices.</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/cn.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      
                    </span>
                    <p>The Centauras Mall Islamabad Pk.</p>
                    
                    <span class="position">Supply & Installation of HVAC Ducting  & Related Works & Air Devices.</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/mc.png)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      
                    </span>
                    <p>Mechatech (pvt) ltd. Lahore.</p>
                    
                    <span class="position">Supply & Installation of HVAC Ducting  & Related Works & Air Devices.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <br>
			<div class="devv">
			<div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="/clients" class="btn btn-primary">View all Clients <span class="ion-ios-arrow-round-forward"></span></a></p>
	                
                </div>
				</div>
    </section>

    <hr>

		
    

    @endsection
  

 


    