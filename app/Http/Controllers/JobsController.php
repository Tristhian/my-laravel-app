<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index() {
        return 'Hello from JobsController';
    }

     public function about($id, $name) {
        return 'Id: ' . $id . ' Name: ' . $name;
    }
}
   

