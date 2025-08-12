<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grievance extends Model
{
    use HasFactory;

    public function getState(){
        return $this->belongsTo(State::class,'present_state');
    }

    public function permanentState(){
        return $this->belongsTo(State::class,'permanent_state');
    }
}
