<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('Home',['skills'=> Skills::latest()->limit(3)->get()]);
    }
}
