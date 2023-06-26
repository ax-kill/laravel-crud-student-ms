<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController
{
    public function index(){
        $courses=Course::all();
        return view('admin.courses', ['courses' => $courses]);
    }
   public function newCourse(){
    return view('admin.new');
   }
   public function addCourse(Request $request){
    $course = new Course();
    $course->name = $request->input('coursename');
    $course->save();
    return redirect()->route('admin.courses')->with('message','Course successfully added');
    }
    public function editCourse($id){
        $course=Course::find($id);
        return view('admin.edit',compact('course'));
       }
       public function updateCourse(Request $request){
        $course=Course::find($request->course_id);
        $course->update([
            'name' => $request->course_name,
        ]);
 return redirect()->route('admin.courses')->with('message2','Updated successfully');
       }
       public function deleteCourse($id){
        $course=Course::find($id);
        $course->delete();
        return redirect()->route('admin.courses')->with('message3','Course deleted successfully');
       }

}
