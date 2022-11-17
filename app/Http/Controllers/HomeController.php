<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $title = "Home";
        return view('index')->with('title', $title);
    }
}
