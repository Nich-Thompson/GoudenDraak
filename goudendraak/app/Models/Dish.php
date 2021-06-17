<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'number_addition',
        'name',
        'description',
        'price',
        'category_id',
        'spiciness',
        'deliverable',
    ];

    public function allergies()
    {
        return $this->hasMany('App\Models\DishAllergy', 'dish_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany('App\Models\Category', 'id', 'category_id');
    }
}
