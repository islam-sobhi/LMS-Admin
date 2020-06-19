<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
      protected $fillable = [
     'teacher_id',
  ];

    public function teacher()
    {
         return $this->belongsTo('App\Teacher');
    }



}
