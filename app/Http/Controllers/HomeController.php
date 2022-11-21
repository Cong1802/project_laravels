<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.HomePage');
    }
    public function creator()
    {
        return view('home.creator');
    }
    public function Contact()
    {
        return view('home.FormContact');
    }
    public function test()
    {
        return view('test');
    }
}
