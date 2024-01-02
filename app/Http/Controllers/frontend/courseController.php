<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;

class CourseController extends Controller
{
    public function index()

    {
        $courses= Courses::all();
        return view("courses",['courses'=>$courses]);
    }
}
