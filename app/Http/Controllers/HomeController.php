<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('temp.index');
    }
    public function about()
    {
        return view('temp.about');
    }
    public function service()
    {
        return view('temp.service');
    }
    public function faq()
    {
        return view('temp.faq');
    }
    public function contact()
    {
        return view('temp.contact');
    }
    public function dashboard()
    {
        return view('admin.home');
    }
}
