<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viewnewspaper extends Model
{
    use HasFactory;
    protected $table = 'view_newspaper';

    public function newspaperTitle(){
        return $this->belongsTo(News::class,'newspaper_id');
    }
}
