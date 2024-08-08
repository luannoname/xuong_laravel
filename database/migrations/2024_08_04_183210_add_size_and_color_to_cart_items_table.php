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
        Schema::table('cart_items', function (Blueprint $table) {
            $table->unsignedBigInteger('product_size_id')->nullable();
            $table->unsignedBigInteger('product_color_id')->nullable();
            
            // Nếu bạn có các bảng liên quan như product_sizes, product_colors, bạn cần thêm khóa ngoại
            $table->foreign('product_size_id')->references('id')->on('product_sizes')->onDelete('set null');
            $table->foreign('product_color_id')->references('id')->on('product_colors')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cart_items', function (Blueprint $table) {
            $table->dropForeign(['product_size_id']);
            $table->dropForeign(['product_color_id']);
            $table->dropColumn(['product_size_id', 'product_color_id']);
        });
    }
};
