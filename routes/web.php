<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/h', function () {
    return view('welcome');
});

Route::get('/', [StudentController::class, 'showStudent'])->name('view.student');
Route::get('showsingleStudent/{id}', [StudentController::class, 'showSingleStudent'])->name('singleStudent');
Route::post('addStudent', [StudentController::class, 'addStudent'])->name('add.student');
Route::put('updateStudent/{id}', [StudentController::class, 'updateStudent'])->name('update.student');
Route::get('updateStudentdetail/{id}', [StudentController::class, 'updatestudentdetails'])->name('updatestudentdetails');
Route::get('deleteStudent/{id}', [StudentController::class, 'deleteStudent'])->name('delete.student');

Route::view('/newStudent', 'addstudent')->name('open.newstudent');

Route::get('/db', function () {
    return view('db');
});
