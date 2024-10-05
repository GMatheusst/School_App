<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id')->constrained('cursos');
            $table->string('work', 255);
            $table->decimal('value', 10, 2);
            $table->dateTime('valid_until');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
