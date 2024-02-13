<?php

namespace App\Http\Controllers;

use App\Models\Service;

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
        $services = Service::all();
        // dd($services);
        // return;

        return view('home', compact('services'));
    }
}
