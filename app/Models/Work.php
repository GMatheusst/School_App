<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso_id',
        'work',
        'value',
        'valid_until',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
