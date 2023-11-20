<?php

namespace App\Http\Controllers\Admins\Admin;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admins\Admin\TemeIndex;
use App\Http\Requests\Admins\Admin\TemeRequest;
use App\Http\Requests\Admins\Admin\UpdateTemeRequest;
use App\Models\Mangment_tem;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Management_team extends Controller
{
    public function index()
    {
        return App::call(TemeIndex::class);
    }
    public function create()
    {
         return view('admins.admin.Teme.create',);
    }

    public function store(TemeRequest $request)
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
             if (Mangment_tem::create($data)) {
                return successMessage('تم الاضافه');
            } else {
                return errorMessage('لم يتم الاضافه');
            }
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function show($teme)
    {
        $teme = Mangment_tem::find($teme);
         try {
            return view('admins.admin.Teme.show', compact('teme') );
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function edit( $teme)
    {
        $teme = Mangment_tem::find($teme);
        return view('admins.admin.Teme.edit', compact('teme'));
    }

    public function update(UpdateTemeRequest $request, Mangment_tem $teme)
    {

        try {

            if ($teme->update($request->validated())) {
                return to_route('team.index')->with('message', ['type' => 'success', 'text' => 'تم التعديل بنجاح']);
            } else {
                return errorMessage('لم يتم التعديل');
            }
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function destroy(Mangment_tem $teme)
    {
        try {
            $teme->delete();

            return successMessage('تم الحذف بنجاح');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function forceDelete(Mangment_tem $teme)
    {
        try {
            $teme->forceDelete();

            return successMessage('استرجاع نجاح');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }
    public function restore(Mangment_tem $product)
    {
        try {
            $product->restore();

            return successMessage('Restore Product Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function changeActive(Mangment_tem $teme)
    {
        try {
            $teme->active = $teme->active ? 0 : 1;
            $teme->save();

            return successMessage('Change Active   Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }
}
