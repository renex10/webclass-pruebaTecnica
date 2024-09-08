<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

      // Relación con el colegio
      public function school()
      {
          return $this->belongsTo(School::class);
      }

      // Asignación masiva habilitada
  /*     protected $fillable = ['topic', 'date', 'type']; */
      protected $fillable = [
        'topic',
        'date', 
        'type',
        'school_id'
    ];

      // Relación muchos a muchos con Student
      public function students()
      {
          return $this->belongsToMany(Student::class);
      }
  
      // Relación muchos a muchos con Teacher
      public function teachers()
      {
          return $this->belongsToMany(Teacher::class);
      }


       /**
     * Relación con el modelo Attendance
     */
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
