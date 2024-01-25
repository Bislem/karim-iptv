<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function index()
    {
        $services = getServices();

        return view('home', compact('services'));
    }
}
