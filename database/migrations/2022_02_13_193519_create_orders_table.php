<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('site_id')->nullable();
            $table->string('order_id')->nullable();
            $table->dateTime('order_date')->useCurrent();
            $table->enum('order_status',['Processing','Shipped','Delivered','Canceled'])->default('Processing');
            $table->dateTime('Processing_date')->nullable();
            $table->dateTime('Shipped_date')->nullable();
            $table->dateTime('Delivered_date')->nullable();
            $table->dateTime('Canceled_date')->nullable();
            $table->string('Customer_id')->nullable();
            $table->string('Order_info_id')->nullable();
            $table->string('Pay_Method')->nullable();
            $table->string('order_count')->nullable();
            $table->string('Deliver_city')->nullable();
            $table->longText('Deliver_address')->nullable();
            $table->longText('Deliver_boy')->nullable();
            $table->longText('Deliver_boy_contact_number')->nullable();
            $table->longText('Deliver_boy_chat')->nullable();
            $table->longText('Deliver_by')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->longText('order_items')->nullable();
            $table->longText('order_items_count')->nullable();
            $table->longText('order_items_total_amount')->nullable();
            $table->longText('order_message')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
