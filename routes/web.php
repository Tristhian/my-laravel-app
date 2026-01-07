<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestingController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('aboutpage', [
//         'name' => 'thian'
//     ]);
// });

Route::get('/contact/{id}', function ($id) {
    return view('contactus', [
        'id' => $id
    ]);
});

Route::get('/test/{name}/{email}', function ($name, $email) {
    // return view('test', [
    //     'name' => 'thian',
    //     'email' => 'thian@example.com'
    // ]);
    return view('test',[
        'name' => $name,
        'email' => $email
    ]);
});

Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' =>[
            'Laravel Developer',
            'Vue.js Developer',
            'React Developer',
            'Django Developer'
        ]
    ]);
});

Route::get('/home', function () {
    return view('home');
});

// Route::controller(JobsController::class)->group(function () {
//     Route::get('/jobsList', 'index');
//     Route::get('/aboutUs/{id}/{name}', 'about');
// });
Route::get('/aboutUs/{id}/{name}', [JobsController::class, 'about']);

Route::get('/invoke/{name}/{email}', [TestController::class,'__invoke']);
Route::get('/students/{id}/{name}', [StudentController::class, 'index']);
Route::resource('/testing', TestingController::class)->name('index', 'testing.index');

// Route::get('/teachers', function () {
//     return Teacher::all();
// });
Route::get('/teachers',[TeacherController::class,'index']);
Route::post('/teachers/add',[TeacherController::class,'add']);
Route::get('/teachers/{id}',[TeacherController::class,'show']);
Route::get('/teachers/update/{id}',[TeacherController::class,'update']);
Route::get('/teachers/delete/{id}',[TeacherController::class,'delete']);
