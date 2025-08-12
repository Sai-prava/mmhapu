<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IqaceventTitle extends Model
{
    use HasFactory;
    protected $table = 'iqac_event_title';

    public function year(){
        return $this->belongsTo(Year::class,'year_id');
    }
}
