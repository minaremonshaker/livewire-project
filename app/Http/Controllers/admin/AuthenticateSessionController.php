<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class AuthenticateSessionController extends Controller
{
    public function create()
    {
        return view('admin.login');
    }
}
