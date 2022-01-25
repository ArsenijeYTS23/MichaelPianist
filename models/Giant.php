<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giant extends Model
{
    function program(){
        return $this->belongsTo(Program::class);
    }
     function giantBlog(){
         return $this->hasMany(GiantBlog::class);
    }
     function giantVideoTask(){
         return $this->hasMany(GiantVideoTask::class);
    }
}
