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
            $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
            $table->foreignId('tag_id')->nullable()->constrained('tags')->onDelete('cascade');
            // $table->foreignId('product_tag_id')->nullable()->constrained('product_tags')->onDelete('cascade');
    
            // English Data
            $table->string('en_name');
            $table->string('en_slug')->unique();
            $table->text('en_about')->nullable();
            $table->longText('en_description')->nullable();
            $table->text('en_shippingreturn')->nullable();
            $table->text('en_additionalinformation')->nullable();

            // German Data (fr_ prefix used in your form)
            $table->string('gn_name')->nullable();
            $table->text('gn_about')->nullable();
            $table->longText('gn_description')->nullable();
            $table->text('gn_shippingreturn')->nullable();
            $table->text('gn_additionalinformation')->nullable();

            // Product Common Info 
            $table->integer('qty')->default(0);
            $table->decimal('price', 15, 2);
            $table->integer('discount')->default(0);
            $table->decimal('discount_price', 15, 2)->nullable();

            // Images
            $table->string('primary_image')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('image_four')->nullable();
            $table->string('image_five')->nullable();

            // Status & Flags (Checkboxes)
            $table->boolean('status')->default(0);
            $table->boolean('feature')->default(0);
            $table->boolean('best_sale')->default(0);
            $table->boolean('on_sale')->default(0);
            $table->boolean('on_arrival')->default(0);

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
