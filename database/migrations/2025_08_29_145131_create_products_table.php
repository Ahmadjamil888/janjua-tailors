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
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('brand')->nullable();
            $table->enum('category', ['unstitched', 'accessories', 'fabric']);
            $table->json('colors')->nullable(); // Store available colors as JSON
            $table->json('images')->nullable(); // Store image paths as JSON
            $table->integer('stock_quantity')->default(0);
            $table->boolean('is_active')->default(true);
            $table->string('sku')->unique();
            $table->decimal('weight', 8, 2)->nullable();
            $table->string('material')->nullable();
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
