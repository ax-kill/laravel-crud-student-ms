<?php

namespace App\Http\Controllers\Student;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentDashboardController
{
        public function studentdashboard(Student $student){
            if (auth()->guard('student')->check()) {
                $student = auth()->guard('student')->user();
                return view('student.dashboard', compact('student'));
            }else{
                return redirect()->route('login');
            }


        }
}
