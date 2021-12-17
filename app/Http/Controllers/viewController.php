<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    //
    public function dashboard()
    {
        return view('dashboad');
    }

    public function apidocs()
    {
        return view('apidocs');
    }
}
