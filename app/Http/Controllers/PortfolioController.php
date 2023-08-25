<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function projects()
    {
        return view('projects');
    }

    public function resume()
    {
        return view('resume');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactForm(Request $request)
    {
        return view('contact', ['data' => $request]);
    }
}
