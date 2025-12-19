<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   protected $guarded = [''  ];
   public function degrees()
   {
       return $this->hasMany(StudentDegree::class);
   }
   public function teacher()
   {
       return $this->hasMany(Teacher::class);
   }
}
