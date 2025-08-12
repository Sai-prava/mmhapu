<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrgentMode extends Model
{
    use HasFactory;

    protected $table = 'urgent_mode';

    protected $fillable = ['degree_certificate_id', 'amount'];

    
}
