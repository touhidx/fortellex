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
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->bigInteger('views')->default(0);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('gallery')->nullable();
            $table->decimal('price' , 10 , 2)->default(0);
            $table->decimal('compare_at_price' , 10 , 2)->nullable();
            $table->decimal('cost_per_item' , 10 , 2)->nullable();
            $table->boolean('track_quantity')->default(true);
            $table->boolean('has_varients')->default(false);
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->decimal('weight' , 8 , 2)->nullable();
            $table->decimal('height' , 8 , 2)->nullable();
            $table->decimal('width' , 8 , 2 )->nullable();
            $table->decimal('length', 8 , 2 )->nullable();
            $table->integer('stock')->default(0);
            $table->enum('status' , ['draft','active','archived'])->default('draft');
            $table->timestamp('published_at')->nullable();
            $table->json('tags')->default(json_encode([]));
            $table->json('options')->nullable();
            $table->json('variants')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
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