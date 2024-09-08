<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

       // Asignación masiva habilitada
       protected $fillable = ['user_id', 'degree_id', 'school_id'];

       // Relación inversa con User
       public function user()
       {
           return $this->belongsTo(User::class);
       }
   
       // Relación muchos a muchos con Training (capacitaciones)
       public function trainings()
       {
           return $this->belongsToMany(Training::class);
       }
   
       // Relación uno a muchos con Attendance
       public function attendances()
       {
           return $this->hasMany(Attendance::class);
       }
}
