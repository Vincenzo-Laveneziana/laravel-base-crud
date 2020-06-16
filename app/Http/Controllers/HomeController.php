<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    public function index() {

        //Ottieni tutti i record da una tebella
        $students = Student::all();
        //dd($students);


        return view('welcome', compact('students'));
    }
}
