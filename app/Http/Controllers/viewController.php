<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Http;

class viewController extends Controller
{
    public function dashboard()
    {
        $review = json_decode(Http::withOptions(['verify' => false])
            ->get("https://sidana.usu.ac.id/api/reviews")->body());

        return view('dashboard', compact('review'));
    }

    public function apidocs()
    {
        return view('apidocs');
    }

    public function about()
    {
        return view('welcome');
    }
}
