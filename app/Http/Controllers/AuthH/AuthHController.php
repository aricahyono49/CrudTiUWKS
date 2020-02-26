<?php

namespace App\Http\Controllers\AuthH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AuthHController extends Controller
{
    function login(){
        return view("AuthH.login");
    }
}
