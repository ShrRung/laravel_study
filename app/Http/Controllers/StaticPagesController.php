<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/home', ['name' => 'James123']);
//        return '主页';
    }

    public function help()
    {
        return view('static_pages.home', ['name' => 'James']);
//        return view('static_pages/home')->with('name', 'Victoria');
    }

    public function about()
    {
        return view('static_pages.about');
    }
}
