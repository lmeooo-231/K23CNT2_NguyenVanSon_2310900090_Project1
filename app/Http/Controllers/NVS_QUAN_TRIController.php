<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nvs_Quan_TriController extends Controller
{
    public function nvsLogin()
    {
        return view('nvsLogin.nvs-login');
    }
    public function nvsLoginSubmit(Request $request)
    {
        return view('nvsLogin.nvs-login');
    }
}