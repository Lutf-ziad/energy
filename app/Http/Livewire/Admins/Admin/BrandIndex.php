<?php

namespace App\Http\Livewire\Admins\Admin;

use App\Classes\FilterClass;
use App\Models\Category;
use App\Models\Product;
use App\Models\Catgry;
use Livewire\Component;
use Livewire\WithPagination;

class BrandIndex extends Component
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
    public $byCatgry = 'all';

    public function mount()
    {
        $this->date1 = date('Y-m-d');
        $this->date2 = date('Y-m-d');
        $this->columns = FilterClass::getTableColumns(new Category);
    }

    public function render()
    {
        $query = Category::query();
        if ($this->byCatgry != null && $this->byCatgry != 'all') {
            $query->where('name', $this->byCatgry);
        }
        $brands = FilterClass::result($query, $this->records, $this->orderBy, $this->sortAs, $this->key, $this->byDate, $this->date1, $this->date2);

        return view('admins.admin.brand.brand-index', compact('brands'))->extends('layouts.admin');
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
        $this->byCatgry = 'all';
    }
}
