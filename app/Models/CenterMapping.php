<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenterMapping extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'center_id',
        'entrance_fee_id',
        'exam_date',
        'exam_time',
        'shift_id',
    ];
    
    public function center()
    {
        return $this->belongsTo(ExamCenterRegistration::class,'center_id');
    }
    public function shift()
    {
        return $this->belongsTo(Shift::class,'shift_id');
    }
}
