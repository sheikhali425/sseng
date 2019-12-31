@extends('layout')

	@section('content')


    <style>
    .pol{
        margin-left:20px; important!
        margin-right:40px;

    }
    </style>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bu.jpg'); ">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread k">Projects</h1>
            <p class="breadcrumbs k"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>projects <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
        <br>
        <br>
<br>
<br>
<br>
<div class="pol">
<div class="row">
    @foreach($projects as $project)
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(images/projects/{{$project->path}});"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">{{$project->area}}</span> <br>
        				<a href="/page/{{$project->id}}"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal41">View Project</button></a>

        				</div>
        		</div>
        	</div>
    @endforeach

        </div>
			</div>

</div>



</div>

</div>




<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title">Modal </h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>









  </div>
</div>
@endsection
