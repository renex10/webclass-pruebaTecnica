<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
      // Asignación masiva habilitada
      protected $fillable = ['student_id', 'training_id', 'attended'];

      // Relación inversa con Student
      public function student()
      {
          return $this->belongsTo(Student::class);
      }
  
      // Relación inversa con Training
      public function training()
      {
          return $this->belongsTo(Training::class);
      }
}
