<?php


namespace App\Http\Controllers\Student;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentLoginController
{
    public function studentlogin(){
        return view('student.login');
    }
    public function studentdoLogin(Request $request){
        $input=[
            'username'=>request('username'),
            'password'=>request('password'),

        ];
        $remember = $request->has('remember');

        if(auth()->guard('student')->attempt($input,$remember)){
            $student = Student::where('username', $request->username)->first();

            return redirect()->route('student.dashboard',['student' => $student]);

        }else{
            return "login failed";
        }

}
    public function studentlogout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
