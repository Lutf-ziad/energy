<?php

namespace App\Http\Controllers\Admins\Admin;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admins\Admin\PrizeIndex;
use App\Http\Requests\Admins\Admin\StorePrizeRequest;
use App\Http\Requests\Admins\Admin\UpdatePrizeRequest;
use App\Models\Achievements_prizes;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Achievements_prizesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return App::call(PrizeIndex::class);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.admin.prize.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrizeRequest $request)
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
             if (Achievements_prizes::create($data)) {
                return successMessage('تم الاضافه');
            } else {
                return errorMessage('لم يتم الاضافه');
            }
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievements_prizes $prize)
    {
        // $prize->load('categorie');
        try {
            return view('admins.admin.prize.show', compact('prize') );
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function edit(Achievements_prizes $prize)
    {

        return view('admins.admin.prize.edit', compact('prize'));
    }

    public function update(UpdatePrizeRequest $request, Achievements_prizes $prize)
    {

        try {

            if ($prize->update($request->validated())) {
                return to_route('prizes.index')->with('message', ['type' => 'success', 'text' => 'تم التعديل بنجاح']);
            } else {
                return errorMessage('لم يتم التعديل');
            }
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function destroy(Achievements_prizes $prize)
    {
        try {
            $prize->delete();

            return successMessage('تم الحذف بنجاح');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function forceDelete(Achievements_prizes $prize)
    {
        try {
            $prize->forceDelete();

            return successMessage('Force Delete Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }
    public function restore(Achievements_prizes $prize)
    {
        try {
            $prize->restore();

            return successMessage('Restore Product Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function changeActive(Achievements_prizes $prize)
    {
        try {
            $prize->active = $prize->active ? 0 : 1;
            $prize->save();

            return successMessage('تم التعديل بنجاح');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }
}
