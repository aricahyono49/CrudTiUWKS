<?php

namespace App\Http\Controllers\AuthH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AuthH extends Controller
{
    function login(){
        return view(AuthH.login);
    }
}
