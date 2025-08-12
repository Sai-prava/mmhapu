<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityAdministration extends Model
{
    use HasFactory;
    public function getTitle(){
        return $this->belongsTo(UniversityAdministrationTitle::class, 'title_id');
    }
}
