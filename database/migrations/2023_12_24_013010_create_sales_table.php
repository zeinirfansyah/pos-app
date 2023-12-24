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
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('sale_id');
            $table->integer('member_id');
            $table->integer('sale_total_item');
            $table->integer('sale_total_price');
            $table->string('sale_discount')->default(0);
            $table->string('sale_payment')->default(0);
            $table->string('sale_change')->default(0);
            $table->string('sale_note')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
