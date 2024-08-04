<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductGallery;
use App\Models\ProductSize;
use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // xóa dữ liệu cũ trước khi thực hiện
        Schema::disableForeignKeyConstraints();
        ProductVariant::query()->truncate();
        ProductGallery::query()->truncate();
        Product::query()->truncate();
        ProductSize::query()->truncate();
        ProductColor::query()->truncate();

        // Thêm size
        foreach (['S', 'M', 'L', 'XL', 'XXL'] as $item) {
            ProductSize::query()->create([
                'name' => $item
            ]);
        }

        // Thêm màu
        foreach (['Trắng', 'Đen', 'Vàng', 'Đỏ'] as $item) {
            ProductColor::query()->create([
                'name' => $item
            ]);
        }

        // thêm product
        for ($i = 0; $i < 50; $i++) {
            $name = fake()->text(40);
            Product::query()->create([
                'category_id' => rand(1, 5),
                'name' => $name,
                'slug' => Str::slug($name). Str::random(8),
                'sku' => Str::random(8). $i,
                'image_thumb' => 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75',
                'price' => 100000,
                'price_sale' => 69000,
                'description' => fake()->text(100),
                'material' => fake()->text(100),
                'use_manual' => fake()->text(100),
            ]);
        }

        // thêm product gallery
        for ($i = 1; $i < 51; $i++) {
            ProductGallery::query()->insert([
                [
                    'product_id' => $i,
                    'image' => 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75',
                ],
                [
                    'product_id' => $i,
                    'image' => 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17206620449287719.jpg&w=1920&q=75'
                ],
            ]);
        }
    }
}
