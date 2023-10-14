<?php

namespace App\Http\Livewire\Admins\Admin;

use App\Classes\FilterClass;
 use App\Models\Admin;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class AdminIndex extends Component
{
    // start for all livewire
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $records = 'without-trashed';

    public $columns;

    public $orderBy = 'created_at';

    public $sortAs = 'asc';

    public $key;

    public $byDate = 'all';

    public $date1;

    public $date2;

    protected $queryString = ['records', 'orderBy', 'sortAs', 'byDate', 'date1', 'date2', 'key'];

    // end for all livewire
    public $AdminId;

    public $name;
    public $password;
    public $phone;
    public $email;

    public $active = 1;

    public $created_at;

    public $updated_at;

    public $mode = 'create';

    public function mount()
    {
        $this->date1 = date('Y-m-d');
        $this->date2 = date('Y-m-d');
        $this->columns = FilterClass::getTableColumns(new Admin);
    }

    public function render()
    {
        $query = Admin::query();
        $Admins = FilterClass::result($query, $this->records, $this->orderBy, $this->sortAs, $this->key, $this->byDate, $this->date1, $this->date2);

        return view('livewire.admins.admin.admin-index', compact('Admins'))->extends('admins.admin.app');
    }

    public function resetDefault()
    {
        $this->key = '';
        $this->records = 'without-trashed';
        $this->orderBy = 'orderBy';
        $this->sortAs = 'asc';
        $this->byDate = 'all';
        $this->orderBy = 'created_at';
        $this->date1 = date('Y-m-d');
        $this->date2 = date('Y-m-d');
    }

    public function updatedActive($value)
    {
        $this->active = $value ? 1 : 0;
    }

    public function create()
    {
        $this->mode = 'create';
        $this->resetInputFields();
        $this->openModal(true);
    }

    public function edit($AdminId)
    {
        $Admin = Admin::findOrFail($AdminId);

        $this->AdminId = $AdminId;
        $this->name = $Admin->name;
        $this->phone = $Admin->phone;
        $this->email = $Admin->email;
        $this->active = $Admin->active;
        $this->mode = 'edit';
        $this->openModal(true);
    }

    public function show($AdminId)
    {
        $Admin = Admin::withTrashed()->findOrFail($AdminId);
        $this->AdminId = $AdminId;
        $this->name = $Admin->name;
        $this->active = $Admin->active;
        $this->phone = $Admin->phone;
        $this->email = $Admin->email;
        $this->created_at = $Admin->created_at;
        $this->updated_at = $Admin->updated_at;
        $this->mode = 'show';
        $this->openModal(true);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'active' => 'required',
        ]);
        Admin::updateOrCreate(['id' => $this->AdminId], [
            'name' => $this->name,
            'password' => $this->password,
            'phone' => $this->phone,
            'email' => $this->email,
            'active' => $this->active,
        ]);
        session()->flash('message',
            ['text' => $this->AdminId ? 'Admin updated successfully!' : 'Admin created successfully!', 'type' => 'success']);
        $this->openModal(false);
        $this->resetInputFields();
    }

    public function delete($AdminId)
    {
        $Admin = Admin::withTrashed()->findOrFail($AdminId);
        if ($Admin->deleted_at == null) {
            $Admin->delete();
            session()->flash('message', ['text' => 'Admin deleted successfully!', 'type' => 'success']);
        } else {
            session()->flash('message', ['text' => 'This field has already been moved to the trash', 'type' => 'warning']);
        }
    }

    public function forceDelete($AdminId)
    {
        try {
            Admin::withTrashed()->findOrFail($AdminId)->forceDelete();
            session()->flash('message', ['text' => 'Admin force deleted successfully!', 'type' => 'success']);
        } catch (Exception $e) {
            session()->flash('message', ['type' => 'danger', 'text' => handleErrors($e, 'msg')]);
        }
    }

    public function restore($AdminId)
    {
        Admin::onlyTrashed()->findOrFail($AdminId)->restore();
        session()->flash('message', ['text' => 'Admin force deleted successfully!', 'type' => 'success']);
    }

    public function resetInputFields()
    {
        $this->AdminId = null;
        $this->name = '';
        $this->active = 1;
        $this->created_at = null;
        $this->updated_at = null;
    }

    public function openModal($status = true)
    {
        $this->emit('form-modal', $status);
    }
}
