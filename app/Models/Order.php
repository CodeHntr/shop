<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public const STATUS_NEW = 1;

    public const STATUS_IN_PROGRESS = 2;

    public const STATUS_READY = 3;

    protected $fillable = [
        'user_id',
        'status',
    ];

    protected $hidden = [

    ];
}
