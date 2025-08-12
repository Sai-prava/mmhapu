<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IqacEvent extends Model
{
    use HasFactory;
    protected $table = 'iqac_event';

    public function IqacTitle(){
        return $this->belongsTo(IqaceventTitle::class, 'title_id');
    }
}
