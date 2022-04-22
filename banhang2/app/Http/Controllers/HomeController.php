<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    public function home()
    {
        return view('index');
    }
}
