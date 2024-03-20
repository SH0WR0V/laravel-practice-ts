<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
