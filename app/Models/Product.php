<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = [
        'site_id',
        'product_title',
        'Product_id',
        'Color',
        'Size',
        'Brand',
        'Images',
        'F_images',
        'description',
        'Price',
        'Status',
        'Tags',
        'Categories',
    ];

}
