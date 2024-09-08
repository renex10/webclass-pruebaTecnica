<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

      // Asignación masiva habilitada
      protected $fillable = ['user_id', 'subject'];

      // Relación inversa con User
      public function user()
      {
          return $this->belongsTo(User::class);
      }
  
      // Relación muchos a muchos con Training
      public function trainings()
      {
          return $this->belongsToMany(Training::class);
      }
}
