<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentInfo extends Model
{
    use HasFactory;
    protected $table = 'department_info';

    public function Subcategory(){
        return $this->belongsTo(FacultySubcategory::class,'faculty_subcat_id');
    }
}
