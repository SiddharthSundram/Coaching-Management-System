@extends('admin.base')

@section('content')
<a href="{{route("admin.manage.course")}}" class="btn btn-dark float-end">Back</a>

    <!-- Page content goes here -->
    <div class="form-container mt-5 col-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h2>Insert New Course </h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="courseName" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="courseName" name="courseName" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="duration" name="duration" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="instructor" class="form-label">Instructor</label>
                        <input type="text" class="form-control" id="instructor" name="instructor" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="fees" class="form-label">Fees</label>
                        <input type="text" class="form-control" id="fees" name="fees" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="discountFees" class="form-label">Discounted Fees</label>
                        <input type="text" class="form-control" id="discountFees" name="discountFees" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="lang" class="form-label">Language</label>
                        <select class="form-select" id="lang" name="lang" required>
                            <option value="en">English</option>
                            <option value="hi">Hindi</option>
                        </select>
                    </div>
        
                    <div class="mb-3">
                        <label for="categoryId" class="form-label">Category</label>
                        <select class="form-select" id="categoryId" name="categoryId" required>
                            <!-- Populate with actual category data from your system -->
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                        </select>
                    </div>
        
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
        
                    <div class="mb-3">
                        <label for="featuredImage" class="form-label">Featured Image</label>
                        <input type="file" class="form-control" id="featuredImage" name="featuredImage" required>
                    </div>
        
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
       
    @endsection
