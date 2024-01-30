<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::controller(HomeController::class)->group(function (){
    Route::get('/','index')->name('home');
    Route::get('/course/{id}','viewCourse')->name('viewCourse');
});


Route::prefix('admin')->group(function(){

    Route::controller(AdminController::class)->group(function (){
        Route::view('/', 'admin.dashboard')->name('admin.index');
        Route::view('/student', 'admin.manageStudent')->name('admin.manage.student');
        Route::view('/course', 'admin.manageCourse')->name('admin.manage.course');
        Route::view('/course/insert', 'admin.insertCourse')->name('admin.insert.course');
        Route::view('/category/insert', 'admin.insertCategory')->name('admin.insert.category');
        Route::view('/category/manage', 'admin.manageCategory')->name('admin.manage.category');
        // Route::view('/course/nam', 'admin.nam')->name('admin.nam.course');
    });
});


Route::prefix('student')->group(function(){

    Route::controller(StudentController::class)->group(function (){

    });
});


Route::prefix('manager')->group(function(){

    Route::controller(ManagerController::class)->group(function (){
        
    });
});