<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($name)
    {
        $data = $name;

        return view('first', ['data' => $data]);
    }

    public function loop($num, $name)
    {

        return view('first', compact('num', 'name'));
    }
}
