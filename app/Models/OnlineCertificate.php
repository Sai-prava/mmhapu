<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineCertificate extends Model
{
    use HasFactory;

    public function getPayment(){
        return $this->hasOne(Payment::class, 'certificate_id', 'id');
    }

    public function degree(){
        return $this->belongsTo(Degree::class, 'certificate', 'id');
    }

    // public function getCourseCategory(){
    //     return $this->belongsTo(CourseCategory::class, 'course_category_id');
    // }
}
