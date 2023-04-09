<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Major::with('faculty')->get();
        return view('major.index')->with(compact('majors'));
    }
}
