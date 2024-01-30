@extends('admin.base')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3 mt-3 items-center">
            <h2>Manage Courses</h2>

            <a href="{{ route('admin.insert.course') }}" class="btn btn-primary "> <i class="fas fa-plus"></i> Add New
                Course</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>CATEGORY ID</th>
                        <th>DURATION</th>
                        <th>INSTRUCTOR</th>
                        <th>FEES</th>
                        <th>DISCOUNTED FEES</th>
                        <th>LANGUAGE</th>
                        <th>IMAGE</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Data - Replace with dynamic data from your system -->
                    <tr>
                        <td>1</td>
                        <td>Amit Jha</td>
                        <td>2</td>
                        <td>4</td>
                        <td>KSLKS</td>
                        <td>500</td>
                        <td>100</td>
                        <td>hindi</td>
                        <td>photo</td>
                        <td>Advanced mathematics course.</td>
                        <td>
                            <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
