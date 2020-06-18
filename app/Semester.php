<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $fillable = [
     'semester',
  ];
  //many techer many sesmester
  public function teachers()
 {
     return $this->belongsToMany('App\Teacher');
 }
}
