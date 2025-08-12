<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamCenterRegistration extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','contact_person','contact_no','max_candidate_allowed'];
}
