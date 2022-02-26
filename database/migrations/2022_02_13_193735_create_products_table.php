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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('site_id')->nullable();
            $table->string('product_title')->nullable();
            $table->string('Product_id')->nullable();
            $table->longText('Color')->nullable();
            $table->longText('Size')->nullable();
            $table->string('Brand')->nullable();
            $table->longText('Images')->nullable();
            $table->longText('F_images')->nullable();
            $table->longText('description')->nullable();
            $table->string('Price')->nullable();
            $table->string('Status')->nullable();
            $table->longText('Tags')->nullable();
            $table->longText('Categories')->nullable();
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
        Schema::dropIfExists('products');
    }
};
