<?php

namespace App\Http\Controllers\Admins\Admin;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admins\Admin\BlogIndex;
use App\Http\Requests\Admins\Admin\StoreBlogRequest;
use App\Http\Requests\Admins\Admin\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Level;
 use Exception;
use Illuminate\Support\Facades\App;

class BlogController extends Controller
{
    public function index()
    {
        return App::call(BlogIndex::class);
    }

    public function create()
    {
        try {

            return view('admins.admin.Blog.create');
        } catch (Exception $e) {
            return handleErrors($e);
        }

    }

    public function store(StoreBlogRequest $request)
    {
        try {
            if ($request->has('image')) {
                $picture = setStorage('blog', $request->image);
                $data = array_merge($request->validated(), [
                    'picture' => $picture,
                ]);
            } else {
                $data = $request->validated();
            }
            if (Blog::create($data)) {
                return successMessage('Create Blog Successfuly');
            } else {
                deleteStorage("Car/$picture");

                return errorMessage('Create Blog has not be completed');
            }
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function show(Blog $Blog)
    {
        try {

            return view('admins.admin.Blog.show', compact('Blog'));
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function edit(Blog $Blog)
    {
        try {

            return view('admins.admin.Blog.edit', compact('Blog',));
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function update(UpdateBlogRequest $request, Blog $Blog)
    {
        try {
                $data = $request->validated();

            if ($Blog->update($data)) {
                return to_route('Blogs.index')->with('message', ['type' => 'success', 'text' => 'Update Blog Successfuly']);
            } else {
                // deleteStorage("Blog/$picture");

                return errorMessage('Update Blog has not be completed');
            }

        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function destroy(Blog $Blog)
    {
        try {
            $Blog->delete();
            return successMessage('Delete Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function forceDelete(Blog $Blog)
    {
        try {
            $Blog->forceDelete();

            return successMessage('Force Delete Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function restore(Blog $Blog)
    {
        try {
            $Blog->restore();

            return successMessage('Restore Blog Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }

    }

    public function changeActive(Blog $Blog)
    {
        try {
            $Blog->active = $Blog->active ? 0 : 1;
            $Blog->save();
            return successMessage('Change Active Blog Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }

    }
}
