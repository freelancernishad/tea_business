<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Order_info extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = [
        'site_id',
        'order_id',
        'Shipping',
        'payment_method',
        'status',
    ];
}
