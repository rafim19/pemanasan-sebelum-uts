<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::with('major', 'ortu')->get();
        $dosens->map(function($q){
            $q->age = Carbon::parse($q->dob)->age;
            return true;
        });
        return view('dosen.index')->with(compact('dosens'));
    }
}
