<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherTraining extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'teacher_training'; // Nombre de la tabla

    protected $fillable = [
        'teacher_id',
        'training_id',
    ];
}
