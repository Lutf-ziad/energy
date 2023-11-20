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
use Exception;
use Illuminate\Support\Facades\App;

class PrizeController extends Controller
{
    public function index()
    {
        $prize = Achievements_prizes::query()->get();
        return view('site.prize',compact('prize'));
    }
    public function  ditels($id){
        $products = Achievements_prizes::where('id', $id)->get();
         return view('site.offer-detail',compact('products'));
   }
}
