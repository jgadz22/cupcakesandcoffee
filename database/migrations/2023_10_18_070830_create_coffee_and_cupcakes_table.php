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
        Schema::create('coffee_and_cupcakes', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('productName');
            $table->string('productPhoto')->nullable();
            $table->float('priceBefore');
            $table->float('priceNow');
            $table->string('size');
            $table->string('flavors');
            $table->longText('productIngredients');
            $table->longtext('productDescription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffee_and_cupcakes');
    }
};
