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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('site_id');
            $table->string('customer_id');
            $table->string('customer_name');
            $table->string('customer_city');
            $table->string('customer_address');
            $table->string('customer_phone');
            $table->string('customer_email');
            $table->string('customer_password');
            $table->string('country');
            $table->string('last_login');
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
        Schema::dropIfExists('customers');
    }
};
