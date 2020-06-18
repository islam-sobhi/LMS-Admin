<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
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
