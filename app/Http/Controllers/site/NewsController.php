<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admins\Admin\ProductIndex;
use App\Http\Requests\Admins\Admin\StoreBlogRequest;
use App\Http\Requests\Admins\Admin\StoreProductRequest;
use App\Http\Requests\Admins\Admin\UpdateProductRequest;
use App\Models\Achievements_prizes;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use Exception;
use Illuminate\Support\Facades\App;

class NewsController extends Controller
{
    public function index()
    {
        $News = Blog::query()->first();
        $New = Blog::query()->get();
         return view('site.news',compact('News','New'));
    }
    public function  ditels($id){
        $prize = Achievements_prizes::where('id', $id)->get();
         return view('site.new-detail',compact('prize'));
   }
}
