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
        Schema::create('product_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('suppliers_id')->nullable();
            $table->string('name');
            $table->string('version')->default("1.0.0");
            $table->integer('price');
            $table->string('updated_user');
            $table->timestamps();
            $table->unique(['product_id', 'version']);
            $table->unique(['name', 'suppliers_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_history');
    }
};
