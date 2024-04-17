<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();

        return view('estudiantes')->with(['students' => $students]); //take a closer look here
    }
    


    public function create()
    {
    return view('studentsForm');
    }


    public function store(Request $request)
{
    $student = new Student;
    $student->first_name = $request->input('first_name');
    $student->last_name = $request->last_name;
    $student->birthdate = $request->input('birthdate');
    $student->dni = $request->input('dni_number');
    $student->group_id = $request->input('group');
    $student->save();

    return redirect()->back()->with('success', 'Thanks for subscribing!');
}


}
