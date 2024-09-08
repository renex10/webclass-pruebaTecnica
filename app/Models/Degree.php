<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;
       // Asignación masiva habilitada
       protected $fillable = ['name'];

       // Relación uno a muchos con Student
       public function students()
       {
           return $this->hasMany(Student::class);
       }
}
