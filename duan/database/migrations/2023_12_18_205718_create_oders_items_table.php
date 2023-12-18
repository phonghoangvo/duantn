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
        Schema::create('oders_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orders')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('quantity');
            $table->double('price', 10, 2);
            $table->double('total', 10, 2);
            $table->timestamps();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oders_items');
    }
};
