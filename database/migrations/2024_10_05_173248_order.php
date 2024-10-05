<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('order', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users');
        $table->integer('status'); // 0: Pendente, 1: Concluído, 2: Cancelado
        $table->decimal('total_price', 10, 2);
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
