@extends('admin.base')

@section('content')
{{-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content"> --}}
    <!-- Page content goes here -->
    <div class="d-flex justify-content-between mt-3 items-center">
        <h2>Manage Students ()</h2>
        <a href="" class="btn btn-primary disabled" >  <i class="fas fa-plus"></i> Add New Student</a>
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Sample Data - Replace with dynamic data from your system -->
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>john.doe@example.com</td>
            <td>
              <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jane Smith</td>
            <td>jane.smith@example.com</td>
            <td>
              <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
            </td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>
@endsection