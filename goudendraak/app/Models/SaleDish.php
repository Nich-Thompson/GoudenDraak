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
}
