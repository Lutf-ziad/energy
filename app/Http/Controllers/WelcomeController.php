<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class WelcomeController extends Controller
{

    public function index()
    {
        $newsArticles = Blog::orderBy('created_at', 'desc')->get();
        return view('site.index', ['newsArticles' => $newsArticles]);
    }
    public function show($id)
{
    $newsArticle = Blog::find($id);
     return view('site.detiles.detilesNew', compact('newsArticle'));
}

}
