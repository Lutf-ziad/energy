<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guarded = [];

    use HasFactory,SoftDeletes;


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function scopeActive($query)
    {
        $query->where('active', 1);
    }

    public function scopeSearch($query, $key)
    {
        $query->where($this->getTable().'.name', 'like', '%'.$key.'%')
            ->orWhere($this->getTable().'.email', 'like', '%'.$key.'%')
            ->orWhere($this->getTable().'.phone', 'like', '%'.$key.'%');
    }
    public function packages()
    {
        return $this->belongsToMany(Shop::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
