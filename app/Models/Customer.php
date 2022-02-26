<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Customer extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'site_id',
        'customer_id',
        'customer_name',
        'customer_city',
        'customer_address',
        'customer_phone',
        'customer_email',
        'customer_password',
        'country',
        'last_login',
    ];

}
