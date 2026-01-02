<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id,$email)
    {
        return response()->json([
        'method' => $request->method(),
        'name' => $request->query('name'),
        'all' => $request->all(),
    ]);
    }
}
