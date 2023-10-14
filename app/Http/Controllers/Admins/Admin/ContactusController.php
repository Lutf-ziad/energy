<?php

namespace App\Http\Controllers\Admins\Admin;

use App\Http\Controllers\Controller;
 use App\Http\Livewire\Admins\Admin\ContactusIndex;
use App\Http\Requests\Admins\Admin\StoreContactuRequest;
use App\Http\Requests\Admins\Admin\StoreShopRequest;
use App\Models\Blog;
use App\Models\Contactu;
use App\Models\Contacut;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return App::call(ContactusIndex::class);
    }
    public function create()
    {
        return view('admins.admin.Contactus.create');
    }

    public function store(StoreContactuRequest $request)
    {
        try {

                $data = $request->validated();
            if (Contacut::create($data)) {
                return successMessage('Create Contactu Successfuly');
            } else {

                return errorMessage('Create Contactu has not be completed');
            }
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function show(Contacut $Contactu)
    {
        try {
            return view('admins.admin.Contactus.show', compact('Contactu'));
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function edit(Contacut $Contactu)
    {
        return view('admins.admin.Contactus.edit', compact('Contactu'));
    }

    public function update(StoreContactuRequest $request, Contacut $Contactu)
    {
        // try {

                $data = $request->validated();
            if ($Contactu->update($data)) {
                return to_route('Contactu.index')->with('message', ['type' => 'success', 'text' => 'Update Contactu Successfuly']);
            } else {

                return errorMessage('Update Contactu has not be completed');
            }
        // } catch (Exception $e) {
        //     return handleErrors($e);
        // }
    }

    public function destroy(Contacut $Contactu)
    {
        try {
            $Contactu->delete();

            return successMessage('Delete Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function forceDelete(Contacut $Contactu)
    {
        try {
            $Contactu->forceDelete();

            return successMessage('Force Delete Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function restore(Contacut $Contactu)
    {
        try {
            $Contactu->restore();

            return successMessage('Restore Contactu Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function changeActive(Contacut $Contactu)
    {
        try {
            $Contactu->active = $Contactu->active ? 0 : 1;
            $Contactu->save();

            return successMessage('Change Active Contactu Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }
}
