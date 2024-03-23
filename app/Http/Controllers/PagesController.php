<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class PagesController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    public function myProfile()
    {
        $name = 'Shahriar';
        $id = '19-39596-1';
        $students = array('Rahim', 'Karim', 'Salam');
        return view('myProfile')->with('name', $name)->with('id', $id)->with('students', $students);
    }
    public function list()
    {
        for ($i = 1; $i <= 10; $i++) {
            $student = [$i];
            $students[] = (object)$student;
        }
        return var_dump($student);
    }
    public function registration()
    {
        return view('registration');
    }
    public function registration_submit(Request $req)
    {
        $req->validate(
            [
                's_name' => 'required',
                's_id' => 'required|min:10|max:10',
                's_dept' => 'required'
            ],
            [
                's_name.required' => 'Please provide your name'
            ]
        );
        $st = new Student();
        $st->s_name = $req->s_name;
        $st->s_id = $req->s_id;
        $st->s_dept = $req->s_dept;
        $st->save();
        return view('registration');
    }
}
