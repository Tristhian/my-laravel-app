<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return Teacher::all();
    }

    public function add()
    {
        $item = new Teacher();
        $item->name = 'John Doe';
        $item->email = 'john@example.com';
        $item->save();

        return 'added';
    }

    public function show($id)
    {
        $item = Teacher::findOrFail($id);
        return $item;
    }

    public function update($id)
    {
        $item = Teacher::findOrFail($id);
        $item->name = 'Updated Name';
        $item->email = 'updated@example.com';
        $item->update();

        return 'updated Successfully';

    }

    public function delete($id)
    {
        $item = Teacher::findOrFail($id);
        $item->delete();

        return 'deleted Successfully';
    }
}
