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
use App\Models\Mangment_tem;
use Exception;
use Illuminate\Support\Facades\App;

class TemeController extends Controller
{
    public function index()
    {
        $teme = Mangment_tem::query()->get();
        return view('site.Teme',compact('teme'));
    }

}
