<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function agency(){
        return $this->belongsToMany('App\Models\Agency');
    }

    public function particular(){
        return $this->belongsToMany('App\Models\Particular');
    }

    public function hotel(){
        return $this->belongsTo('App\Models\Hotel');
    }
}
