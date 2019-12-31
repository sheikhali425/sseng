@extends('layout')
@section('content')

<div class="container">
<div class="Back">
            <i class="fa fa-arrow-left" onclick="Back()"></i>
        </div>
        <p class="h2 text-center">Form</p>
        <form action="/createproject" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="preview text-center">
                <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" width="200" height="200"/>
                <div class="browse-button">
                    <i class="fa fa-pencil-alt"></i>
                    <!-- <input class="browse-input" name="myFile" type="file"  id="myFile"/> -->
                    <input type="file" name="myFile">
                </div>

            </div>
            <div class="form-group">
                <label>Area Name:</label>
                <input class="form-control" type="text" name="areaname" required placeholder="Enter Full area name"/>

            </div>
            <div class="form-group">
                <label>Equipment:</label>
                <input class="form-control" type="text" name="equipment"/>

            </div>
            <div class="form-group">
                <label>Service:</label>
                <input class="form-control" type="text" name="service" required placeholder="Enter Service"/>

            </div>
            <div class="form-group">
                <label>Capacity:</label>
                <input class="form-control" type="text" name="capacity" required placeholder="Enter Capacity"/>

            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
            </div>
        </form>
    </div>
</div>

@endsection
