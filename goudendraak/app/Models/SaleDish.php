<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDish extends Model
{
    use HasFactory;

    protected $fillable = [
        'sales_id',
        'dishes_id',
        'comment',
    ];

    public function dishes()
    {
        return $this->hasMany('App\Models\Dish', 'id', 'dishes_id');
    }

    public function sales()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'sales_id');
    }
}
