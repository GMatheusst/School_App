<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('cart_product', function (Blueprint $table) {
        $table->id();
        $table->foreignId('curso_id')->constrained('cursos');
        $table->foreignId('cart_id')->constrained('cart');
        $table->integer('quantity');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('cart_product');
    }
};
