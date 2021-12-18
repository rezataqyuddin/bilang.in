<?php

namespace App\Http\Controllers;

use App\Models\Review as ModelsReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $testimony = new ModelsReview();
        $testimony->comments = $request->comments;
        $testimony->save();
        return redirect("/")->with("message", "Terima kasih, review anda sangat bermanfaat untuk USU");
    }
}
