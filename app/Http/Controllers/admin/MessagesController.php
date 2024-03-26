<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    public function index(){
        return view('admin.messages');
    }
}
