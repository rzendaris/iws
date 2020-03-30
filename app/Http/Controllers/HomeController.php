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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application after login.
     *
     * @return redirect to @url(`under-construction`)
     */
    public function main()
    {
        return redirect('under-construction');
    }

    /**
     * Show the application under construction.
     *
     * @return view(`under-construction`)
     */
    public function underConstruction()
    {
        return view('under-construction');
    }
}
