<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
     // Asignación masiva habilitada
     protected $fillable = ['number', 'user_id'];

     // Relación inversa con User
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
