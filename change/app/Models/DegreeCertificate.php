<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DegreeCertificate extends Model
{
    use HasFactory;
    protected $fillable = ['degree_id', 'price'];

    public function degree()
    {
        return $this->belongsTo(Degree::class, 'degree_id');
    }
}