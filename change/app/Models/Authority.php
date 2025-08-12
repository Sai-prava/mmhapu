<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
    use HasFactory;

    // public function getPosition(){
    //     return $this->belongsTo(Position::class,'position_id');
    // }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
    public function getTitle(){
        return $this->belongsTo(AuthoritiesTitle::class, 'title_id');
    }
}
