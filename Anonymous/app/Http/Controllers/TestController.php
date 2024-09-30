<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $name = Test::where('name', 'Miss Jazmin Dibbert')->first();
        return view('test.index' , compact('name'));
    }
}
