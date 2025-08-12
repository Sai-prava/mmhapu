<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elearning extends Model
{
    use HasFactory;
    protected $table = 'elearning';

    public function titles(){
        return $this->belongsTo(ElearningTitle::class,'title_id');
    }
}
