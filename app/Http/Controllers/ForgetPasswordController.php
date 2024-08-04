<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    public function create()
    {
        return view('password.forget');
    }
}
