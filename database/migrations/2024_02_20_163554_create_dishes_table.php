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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("restaurant_id");
            $table->string("name");
            $table->string("picture")->nullable();
            $table->text("description");
            $table->string("ingredients");
            $table->decimal("price", 5, 2);
            $table->boolean("visible");
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('dishes', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
