<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        return view('news', [
            "title" => "All News",
            "games" => News::all()
        ]);
    }
}
