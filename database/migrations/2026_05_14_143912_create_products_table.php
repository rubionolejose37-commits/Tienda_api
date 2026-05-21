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
            $table->foreignId('Categories_Id')->constrained('Categories')->onDelete('cascade');
            $table->foreignId('Orders_Id')->constrained('Orders')->onDelete('cascade');
            $table->string('name');
            $table->text('descripcion')->nullable();
            $table->decimal('price',10,2);
            $table->unsignedInteger('stock');
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
