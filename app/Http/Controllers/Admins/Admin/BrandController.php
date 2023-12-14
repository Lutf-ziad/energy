<?php

namespace App\Http\Controllers\Admins\Admin;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admins\Admin\BrandIndex;
use App\Http\Livewire\Admins\Admin\ProductIndex;
use App\Http\Requests\Admins\Admin\StoreBlogRequest;
use App\Http\Requests\Admins\Admin\StoreBrandRequest;
use App\Http\Requests\Admins\Admin\StoreProductRequest;
use App\Http\Requests\Admins\Admin\UpdateBlogRequest;
use App\Http\Requests\Admins\Admin\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use Exception;
use Illuminate\Support\Facades\App;

class BrandController extends Controller
{
    public function index()
    {
        return App::call(BrandIndex::class);
    }
    public function create()
    {
        return view('admins.admin.brand.create');
    }

    public function store(StoreBrandRequest $request)
    {
           try {
            if ($request->has('image')) {
                $picture = setStorage('Blog', $request->image);
                $data = array_merge($request->validated(), [
                    'picture' => $picture,
                ]);
            } else {
                $data = $request->validated();
            }
             if (Category::create($data)) {
                return successMessage('تم الاضافه');
            } else {
                return errorMessage('لم يتم الاضافه');
            }
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function show(Category $brand)
    {
        // $product->load('categorie');
        try {
            return view('admins.admin.brand.show', compact('brand') );
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function edit(Category $brand)
    {
        return view('admins.admin.brand.edit', compact('brand'));
    }

    public function update(UpdateBlogRequest $request, Category $product)
    {

        try {

            if ($product->update($request->validated())) {
                return to_route('brands.index')->with('message', ['type' => 'success', 'text' => 'Update Product Successfuly']);
            } else {
                return errorMessage('Update product has not be completed');
            }
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function destroy(Category $product)
    {
        try {
            $product->delete();

            return successMessage('Delete Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function forceDelete(Category $product)
    {
        try {
            $product->forceDelete();

            return successMessage('Force Delete Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }
    public function restore(Product $product)
    {
        try {
            $product->restore();

            return successMessage('Restore Product Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function changeActive(Product $product)
    {
        try {
            $product->active = $product->active ? 0 : 1;
            $product->save();

            return successMessage('Change Active Product Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }
}
