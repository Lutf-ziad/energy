<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mangment_tem extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function scopeActive($query)
    {
        $query->where('active', 1);
    }

    public function scopeSearch($query, $key)
    {
        $query->where($this->getTable().'.name', 'like', '%'.$key.'%');
    }
}
