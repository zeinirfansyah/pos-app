<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchases_detail', function (Blueprint $table) {
            $table->increments('purchase_detail_id');
            $table->integer('purchase_id');
            $table->integer('product_id');
            $table->integer('purchase_detail_price');
            $table->integer('purchase_detail_qty');
            $table->integer('purchase_detail_subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases_detail');
    }
};
