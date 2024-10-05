<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'curso_id',
        'points',
        'frequency',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
