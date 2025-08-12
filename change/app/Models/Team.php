<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'team';

    public function FacultyCategory(){
        return $this->belongsTo(FacultyCategory::class,'faculty_cat_id');
    }
    public function FacultySubcategory(){
        return $this->belongsTo(FacultySubcategory::class,'faculty_subcat_id');
    }
}
