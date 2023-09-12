<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {

        $data = [
            "title" => "Register",
            "active" => "register",
        ];

        return view('register.index', $data);
    }
}
