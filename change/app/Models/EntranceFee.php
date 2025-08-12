<?php

namespace App\Models;

use App\Models\Web\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntranceFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'exam_fee',
        'download_start_date',
        'download_end_date',
        'exam_status',
        'exam_date'
    ];

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
    public function documentCategories(){
        return $this->hasMany(DocumentCategoryEntranceFee::class,'entrance_fee_id');
    }
}
