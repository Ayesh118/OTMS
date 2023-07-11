<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
       return view('teacher.home.index');
    }
    public function create(Request $request)
    {
        Teacher::newTeacher($request);
        return back()->with('message',"Teacher Added Successfully");
    }
    public function manage()
    {
        Teacher::all();
        return view('teacher.manage');
    }
}
