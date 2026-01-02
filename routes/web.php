<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('aboutpage', [
        'name' => 'thian'
    ]);
});

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

Route::controller(JobsController::class)->group(function () {
    Route::get('/jobsList', 'index');
    Route::get('/aboutUs/{id}/{name}', 'about');
});
