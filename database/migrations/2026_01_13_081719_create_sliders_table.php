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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
    
            // English Content
            $table->string('en_title')->nullable();
            $table->string('en_sub_title')->nullable();
            $table->string('en_btn_text')->nullable();
            $table->text('en_description')->nullable();
    
            // German Content
            $table->string('gn_title')->nullable();
            $table->string('gn_sub_title')->nullable();
            $table->string('gn_btn_text')->nullable();
            $table->text('gn_description')->nullable();

            // Button Link & Image
            $table->string('btn_link')->nullable();
            $table->string('image')->nullable();
    
            $table->enum('status', ['active', 'inactive'])->default('active');
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
