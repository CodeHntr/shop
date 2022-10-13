<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'count',
        'price',
        'limit',
    ];

    protected $hidden = [

    ];

    public function orderProduct()
    {
        return $this->hasOne(OrderProduct::class);
    }
}
