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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char("name", 50);
            $table->char("email", 50);
            $table->text("address");
            $table->decimal("total", 6,2);
            $table->datetime("date");
            $table->unsignedBigInteger("restaurant_id");
            $table->foreign("restaurant_id")->references("id")->on("restaurants")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
