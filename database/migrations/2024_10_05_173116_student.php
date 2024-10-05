<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('student', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users');
        $table->integer('status'); // 0: Inativo, 1: Ativo, 2: Em andamento
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
