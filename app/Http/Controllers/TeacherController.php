<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();
        dd($teacher);
        //return view ('teacher', compact('teacher'));
    }

    public function create()
    {
        return view ('teacher.create');
    }

    public function store(Request $request)
    {
        $teacher = $request->all();
        Teacher::create($teacher);
        dd($teacher);
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function show()
    {

    }

}
