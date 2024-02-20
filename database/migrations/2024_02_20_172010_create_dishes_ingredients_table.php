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
        Schema::create('dishes_ingredients', function (Blueprint $table) {
            $table->unsignedBigInteger("dish_id");
            $table->foreign("dish_id")->references("id")->on("dishes")->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger("ingredient_id");
            $table->foreign("ingredient_id")->references("id")->on("ingredients")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes_ingredients');
    }
};