<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index($id, $name)
    {
        return view('student', [
            'id' => $id,
            'name' => $name
        ]);
    }
}
