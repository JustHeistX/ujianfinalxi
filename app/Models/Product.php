<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'images',
        'title',
        'stock',
        'product_code',
        'description',
        'expired_date', 
        'jenis_satuan',

    ];
}
