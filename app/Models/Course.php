<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
protected $table = 'course';
    public function getCourseCategory(){
        return $this->belongsTo(CourseCategory::class, 'couse_category_id');
    }
}
