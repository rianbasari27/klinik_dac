<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $title = "Dashboard";
        $user = User::all();
        return view('index')->with([
            'title' => $title,
            'user' => $user
        ]);
    }
}
