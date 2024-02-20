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
        Schema::create('dish_allergen', function (Blueprint $table) {
            $table->unsignedBigInteger("dish_id");
            $table->foreign("dish_id")->references("id")->on("dishes")->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger("allergen_id");
            $table->foreign("allergen_id")->references("id")->on("allergens")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish_allergen');
    }
};
