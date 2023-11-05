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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // If you want to associate carts with users
            $table->unsignedBigInteger('item_id');
            $table->integer('quantity');
            $table->decimal('total', 8, 2); // Total price for this item in the cart
            $table->timestamps();

            // Define foreign key constraints if you're associating carts with users
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('item_id')->references('id')->on('menu_items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
