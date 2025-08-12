<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    public function getTitle(){
        return $this->belongsTo(AuthoritiesTitle::class,'title_id');
    }

    public function authorities(){
        return $this->hasMany(Authority::class, 'position_id');
    }

    public function title(){
        return $this->belongsTo(AuthoritiesTitle::class, 'title_id');
    }
}
