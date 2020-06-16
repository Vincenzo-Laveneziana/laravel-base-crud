<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    public function index() {

        //Ottieni tutti i record da una tebella

        //$students = Student::all();
        //dd($students);

        //where
        //$students = Student::where('id', 3)->get();
        /* $students = Student::where('id', '<>', 1)
            ->orderBy('name', 'asc')
            ->limit(2)
            ->get(); 
        */

        //first
        //$students = Student::where('id', 1)->first();
        //dd($students->name);
        //$students[] = Student::where('id', 1)->first();

        //find students
        //$students[] = Student::find(2);
        $students = Student::all();
        $student = $students->find(2);
        //dd($student->name);


        return view('welcome', compact('students'));
    }
}
