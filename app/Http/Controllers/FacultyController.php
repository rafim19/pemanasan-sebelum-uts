<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        return view('faculty.index', ['faculties' => Faculty::all()]);
    }
}
