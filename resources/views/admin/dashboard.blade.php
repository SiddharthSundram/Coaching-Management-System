@extends('admin.base')

@section('content')
    
<div class="container-fluid">
    <!-- Page content goes here -->
    <h2>Welcome to Coaching Management System Admin Panel</h2>

    <!-- Example Cards -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Students</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{route('admin.manage.student')}}" class="btn btn-primary">View Student</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{route("admin.manage.course")}}" class="btn btn-primary">View Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Example Cards -->

</div>
@endsection