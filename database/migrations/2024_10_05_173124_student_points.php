<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('student_points', function (Blueprint $table) {
        $table->id();
        $table->foreignId('student_id')->constrained('student');
        $table->foreignId('curso_id')->constrained('cursos');
        $table->decimal('points', 10, 2);
        $table->integer('frequency');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('student_points');
    }
};
