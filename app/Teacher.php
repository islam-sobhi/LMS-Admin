<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{


           protected $fillable = [
     'teach_name','phone_number','teacher_email','degree','address',
  ];
    public function semester()
{
   return $this->belongsToMany('App\Semester');
}

}
