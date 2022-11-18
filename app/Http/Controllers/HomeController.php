<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('HomeLayout');
    }
    public function creator()
    {
        return view('pages.creator');
    }
    public function Contact()
    {
        return view('pages.FormContact');
    }
}
