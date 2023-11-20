<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admins\Admin\ProductIndex;
use App\Http\Requests\Admins\Admin\StoreBlogRequest;
use App\Http\Requests\Admins\Admin\StoreProductRequest;
use App\Http\Requests\Admins\Admin\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use Exception;
use Illuminate\Support\Facades\App;

class OffersController extends Controller
{
    public function index()
    {
        $products = Product::query()->with('categorie')->get();
        return view('site.offers',compact('products'));
    }
    public function  ditels($id){
        $products = Product::where('id', $id)->get();
         return view('site.offer-detail',compact('products'));
   }
}
