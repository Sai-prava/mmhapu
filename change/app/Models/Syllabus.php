<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    use HasFactory;
    protected $table = 'syllabuses';

    public function getTitle(){
        return $this->belongsTo(SyllabusTitle::class,'title_id');
    }
}
