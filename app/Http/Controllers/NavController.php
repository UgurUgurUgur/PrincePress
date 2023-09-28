<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function series()
    {
        return view('series');
    }

    public function shortstories()
    {
        return view('short-stories');
    }

    public function aboutus()
    {
        return view('about-us');
    }

    public function contactus()
    {
        return view('contact-us');
    }

}
