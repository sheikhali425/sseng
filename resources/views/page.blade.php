@extends('layout')

	@section('content')
	<style>
.lol{
	margin-left:-7px; important!
}
.vl {
  border-left: 6px solid skyblue;
  height: 30px;
}
.lop{
	margin-left:170px;
}

		</style>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bu.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Projects</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Projects <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<br>
<br>
<section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Project</span>
            <h2 class="mb-4">{{$project->area}}</h2>
          </div>
		</div>

  			<div class="row tabulation mt-4 ftco-animate">

  				<div class="col-md-4">
					  <br>
					  <br>
					  <br>
						<ul class="nav nav-pills  d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						  <i class="fa fa-spinner"></i>
				<strong>EQUIPMENT</strong>
				<em>-</em>
				<br>
			<span>{{$project->equipment}}</span>
						  </li>
						  <li class="nav-item text-left">

						  <i class="fa fa-cogs"></i>
				<strong>SERVICE</strong>
				<em>-</em>
				<br>
			<span>{{$project->service}}</span>
						      </li>
						  <li class="nav-item text-left">
						  <i class="fa fa-tachometer"></i>
				<strong>CAPACITY</strong>
				<em>-</em>
				<br>
			<span>{{$project->capacity}}</span>
						</li>
						  </ul>
						  <br>
						  <div class="lol">
						  <div class="button">

        <button class="button button1 button3"><span><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp Contact Us</span></button>
</div>
        </div>
		    </div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
							  <div ko>
							  <div class="img" style="background-image: url(/images/projects/{{$project->path}});"></div>
			  </div>
			                  <div class="row">
							  <h3>{{$project->area}}</h3>
</div>
						   </div>

						</div>
					</div>
				</div>
    	</div>
	</section>

    <section class="ftco-section">
	<div class="lop">
	<h4> <b>Features of this project:</b></h4>
</div>
<br>
<br>
			<div class="container">
				<div class="row">

					<div class="col-lg-4 d-flex">
						<div class="services-2 border rounded text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="fa fa-check-square"></span></div>
							<div class="text media-body">
								<h3>To meet specific design requirements</h3>
								</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 border rounded text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="fa fa-check-square"></span></div>
							<div class="text media-body">
								<h3>Eco friendly materials</h3>
								</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 border rounded text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="fa fa-check-square"></span></div>
							<div class="text media-body">
								<h3>On time delivery</h3>
									</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 border rounded text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="fa fa-check-square"></span></div>
							<div class="text media-body">
								<h3>Quality after sales service</h3>
									</div>
						</div>
					</div>

				</div>
			</div>
		</section>

@endsection
