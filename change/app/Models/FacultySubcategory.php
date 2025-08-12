<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultySubcategory extends Model
{
    use HasFactory;

    public function FacultyCategory(){
        return $this->belongsTo(FacultyCategory::class,'faculty_id');
    }
}
