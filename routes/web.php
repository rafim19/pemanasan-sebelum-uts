<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\MajorController;
use App\Models\Dosen;
use App\Models\Faculty;
use App\Models\Major;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $dosens = Dosen::count();
    $faculties = Faculty::count();
    $majors = Major::count();

    return view('index', [
        'dosens' => $dosens,
        'faculties' => $faculties,
        'majors' => $majors,
    ]);
})->name('index');

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/{dosen_id}', [DosenController::class, 'show'])->name('dosen.show');

Route::get('/major', [MajorController::class, 'index'])->name('major.index');

Route::get('/faculty', [FacultyController::class, 'index'])->name('faculty.index');

Route::get('/test', function () {
    $test = Faculty::find(1);
    echo $test->name;
});


