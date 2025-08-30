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
        Schema::create('custom_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('order_number')->unique();
            $table->enum('size_type', ['standard', 'custom'])->default('standard');
            $table->enum('standard_size', ['S', 'M', 'L', 'XL'])->nullable();
            $table->string('color');
            $table->string('quality');
            $table->decimal('price', 10, 2);
            $table->text('special_instructions')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('city');
            $table->string('postal_code');
            $table->enum('status', ['pending', 'confirmed', 'cutting', 'stitching', 'finishing', 'quality_check', 'ready', 'shipped', 'delivered'])->default('pending');
            $table->datetime('estimated_delivery');
            $table->datetime('actual_delivery')->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_orders');
    }
};
