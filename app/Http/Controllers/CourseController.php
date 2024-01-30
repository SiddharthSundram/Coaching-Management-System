<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(["data" => Course::with("category")->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //image work
        $filename = time() . "." . $request->featured_image->extension();
        $request->featured_image->move(public_path("course_image"),$filename);

        $course = new Course();
        $course->name = $request->name;
        $course->category_id = $request->category_id;
        $course->duration = $request->duration;
        $course->instructor = $request->instructor;
        $course->fees  = $request->fees;
        $course->discount_fees  = $request->discount_fees;
        $course->lang  = $request->lang;
        $course->featured_image = $filename;  
        $course->description = $request->description;
        $course->save();

        return response()->json(["data" => $course,"success" => true,"msg" =>"Course inserted successfully"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        
        $course->name = $request->name;
        $course->category_id = $request->category_id;
        $course->duration = $request->duration;
        $course->instructor = $request->instructor;
        $course->fees  = $request->fees;
        $course->discount_fees  = $request->discount_fees;
        $course->lang  = $request->lang;
        $course->description = $request->description;
        $course->save();

        return response()->json(["data" => $course,"success" => true,"msg" =>"Course updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return response()->json(["data" =>$course,"success" =>true,"msg" =>"Course deleted successfully"]);
    }
}
