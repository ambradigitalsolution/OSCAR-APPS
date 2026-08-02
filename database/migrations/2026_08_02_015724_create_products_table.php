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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('price_max')->nullable();
            $table->integer('stock')->default(0);
            $table->string('status')->default('Aktif');
            $table->integer('sales')->default(0);
            $table->integer('views')->default(0);
            $table->integer('variants')->default(1);
            $table->string('warehouse')->nullable();
            $table->string('sku')->nullable();
            $table->string('date')->nullable();
            $table->string('image')->nullable();
            $table->decimal('rating', 3, 1)->nullable();
            $table->string('discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
