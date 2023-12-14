<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Achievements_prizes;
use Illuminate\Http\Request;

class Aboat extends Controller
{
    public function index(){
         $newsArticles = Achievements_prizes::orderBy('created_at', 'desc')->take(3)->get();
        return view('site.about', ['newsArticles' => $newsArticles]);
    }
}
