<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthoritiesTitle extends Model
{
    use HasFactory;

    public function positions()
    {
        return $this->hasMany(Position::class, 'title_id');
    }
}
