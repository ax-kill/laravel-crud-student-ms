<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Student\StudentLoginController;
use App\Http\Controllers\Student\StudentDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


    Route::get('/',[LoginController::class,'login'])->name('login');

    Route::name('admin.')->group(function(){
    Route::post('admin/do-login',[LoginController::class,'doLogin'])->name('do.login');
    Route::get('admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('admin/logout',[LoginController::class,'logout'])->name('logout');
    Route::get('admin/courses',[CourseController::class,'index'])->name('courses');
    Route::get('admin/new-course',[CourseController::class,'newCourse'])->name('new.course');
    Route::post('admin/add-course',[CourseController::class,'addCourse'])->name('add.course');
    Route::get('admin/edit-course/{id}',[CourseController::class,'editCourse'])->name('edit.course');
    Route::post('admin/update-course',[CourseController::class,'updateCourse'])->name('update.course');
    Route::get('admin/delete-course/{id}',[CourseController::class,'deleteCourse'])->name('delete.course');
    Route::get('admin/students',[StudentController::class,'index'])->name('students');
    Route::get('admin/new-student',[StudentController::class,'newStudent'])->name('new.student');
    Route::post('admin/add-student',[StudentController::class,'addStudent'])->name('add.student');
    Route::get('admin/edit-student/{id}',[StudentController::class,'editStudent'])->name('edit.student');
    Route::post('admin/update-student',[StudentController::class,'updateStudent'])->name('update.student');
    Route::get('admin/delete-student/{id}',[StudentController::class,'deleteStudent'])->name('delete.student');
});
    Route::name('student.')->group(function(){
        Route::get('student/login',[StudentLoginController::class,'studentlogin'])->name('login');
        Route::post('student/do-login',[StudentLoginController::class,'studentdoLogin'])->name('do.login');
        Route::get('student/dashboard',[StudentDashboardController::class,'studentdashboard'])->name('dashboard');
        Route::get('student/logout',[StudentLoginController::class,'studentlogout'])->name('logout');
    });

