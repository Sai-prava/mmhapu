<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    public function getCourseCat(){
        return $this->belongsTo(CourseCategory::class,'category_id');
    }
}
