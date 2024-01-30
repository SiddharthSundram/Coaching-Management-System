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
                <tbody id="callingcourse">
                  
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>


     <script>
        $(document).ready(function() {
            let callingcourse = () => {
                $.ajax({
                    type: "get",
                    url: "{{ route('course.index') }}",
                    success: function(response) {


                        let table = $("#callingcourse");
                        table.empty();
                        let data = response.data;
                        //counting courses
                        let len = data.length;
                        $("#counting").html(len)
                        data.forEach((course) => {
                            table.append(`
                                <tr>
                                    <td>${course.id}</td> 
                                    <td>${course.name}</td>
                                    <td>${course.category.cat_title}</td> 
                                    <td>${course.duration}</td>  
                                    <td>${course.instructor}</td> 
                                    <td>${course.fees}</td> 
                                    <td>${course.discount_fees}</td> 
                                    <td>${course.lang}</td> 
                                    <td> <img src="/course_image/${course.featured_image}" width="80px" height="50px" alt=""></td> 
                                    <td>${course.description}</td> 
    
                                    <td>
                                        <button type="button" class="btn btn-danger" id=${"btn"+course.id}>X</button>
                                        <button type="button" class="btn btn-info" data-id="${course.id}">edit</button>
                                    </td>
                                </tr>
                            `);

                            
                            //delete Operation 
                            $("#btn" + course.id).click(function() {
                                $.ajax({
                                    type: "DELETE",
                                    url: `/api/course/${course.id}`, 
                                    success: function(response) {
                                        alert(response.msg);
                                        callingcourse();
                                    },
                                    error: function(error) {
                                        console.error('Error:', error);
                                    }
                                });
                            });


                        });
                    }
                });
            }

            callingcourse();
        });
    </script>
@endsection