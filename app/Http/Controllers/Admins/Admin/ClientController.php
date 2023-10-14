<?php

namespace App\Http\Controllers\Admins\Admin;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admins\Admin\ClientIndex;
use App\Http\Requests\Admins\Admin\StoreClientRequest;
use App\Http\Requests\Admins\Admin\UpdateClientRequest;
 use App\Models\Admin;
use Exception;
use Illuminate\Support\Facades\App;

class ClientController extends Controller
{
    public function index()
    {
        return App::call(ClientIndex::class);
    }

    public function create()
    {
        return view('admins.admin.client.create');
    }

    public function store( $request)
    {
        try {
            if ($request->has('image')) {
                $picture = setStorage('Admin', $request->image);
                $data = array_merge($request->validated(), [
                    'picture' => $picture,
                ]);
            } else {
                $data = $request->validated();
            }
            if (Admin::create($data)) {
                return successMessage('Create Client Successfuly');
            } else {
                deleteStorage("Admin/$picture");

                return errorMessage('Create client has not be completed');
            }
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function show(Admin $client)
    {
        try {
            return view('admins.admin.client.show', compact('client'));
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function edit(Admin $client)
    {
        return view('admins.admin.client.edit', compact('client'));
    }

    public function update(UpdateClientRequest $request, Admin $client)
    {
        try {
            if ($request->has('image')) {
                deleteStorage($client->picture);
                $picture = setStorage('Admin', $request->image);
                $data = array_merge($request->validated(), [
                    'picture' => $picture,
                ]);
            } else {
                $data = $request->validated();
            }
            if ($request->password != null) {
                $data['password'] = bcrypt($request->password);
            }
            if ($client->update($data)) {
                return to_route('clients.index')->with('message', ['type' => 'success', 'text' => 'Update Client Successfuly']);
            } else {
                deleteStorage("Admin/$picture");

                return errorMessage('Update client has not be completed');
            }
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function destroy(Admin $client)
    {
        try {
            $client->delete();

            return successMessage('Delete Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function forceDelete(Admin $client)
    {
        try {
            $client->forceDelete();

            return successMessage('Force Delete Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function restore(Admin $client)
    {
        try {
            $client->restore();

            return successMessage('Restore Client Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }

    public function changeActive(Admin $client)
    {
        try {
            $client->active = $client->active ? 0 : 1;
            $client->save();

            return successMessage('Change Active Client Successfuly');
        } catch (Exception $e) {
            return handleErrors($e);
        }
    }
}
