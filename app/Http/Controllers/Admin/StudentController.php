<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController
{
    public function index(){
        $students=Student::all();
return view('admin.student',compact('students'));
    }
    public function newStudent(){
        $courses = Course::all();
        return view('admin.newstudent', compact('courses'));
    }
    public function addStudent(Request $request){

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'username'=>'required',
            'password'=>'required',
            'phone_number' => 'required',
            'course' => 'required',
            'attendance' => 'required',
        ]);
        $student = new Student();
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->email = $request->input('email');
        $student->username = $request->input('username');
        $student->password = bcrypt($request->input('password'));
        $student->phone = $request->input('phone_number');
        $student->course = $request->input('course');
        $student->attendance = $request->input('attendance');
        $student->save();

        return redirect()->route('admin.students')->with('added','Successfully Added');
    }
    public function editStudent($id){
        $courses = Course::all();
        $student=Student::find($id);
        return view('admin.editstudent',compact('student','courses'));
       }
       public function updateStudent(Request $request){
        $student=Student::find($request->student_id);
        $student->update([
            'first_name' => $request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>$request->password,
            'phone'=>$request->phone_number,
            'course'=>$request->course,
            'attendance'=>$request->attendance,
        ]);
        return redirect()->route('admin.students')->with('updated','successfully updated');
    }
    public function deleteStudent($id){
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('admin.students')->with('deleted','student deleted successfully');
}
}
