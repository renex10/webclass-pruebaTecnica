<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
      // Asignación masiva habilitada
      protected $fillable = ['first_name', 'middle_name', 'first_surname', 'second_surname', 'user_id'];

      // Relación inversa con User
      public function user()
      {
          return $this->belongsTo(User::class);
      }
}
