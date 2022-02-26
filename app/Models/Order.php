<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Order extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'id',
        'site_id',
        'order_id',
        'order_date',
        'order_status',
        'Processing_date',
        'Shipped_date',
        'Delivered_date',
        'Customer_id',
        'Order_info_id',
        'Pay_Method',
        'order_count',
        'Deliver_city',
        'Deliver_address',
        'Deliver_boy',
        'Deliver_boy_contact_number',
        'Deliver_boy_chat',
        'Deliver_by',
        'phone_number',
        'email',
        'order_items',
        'order_items_count',
        'order_items_total_amount',
        'order_message',
    ];

    public function customers()
    {
        return $this->belongsTo(Customer::class,'Customer_id','id');
    }


}
