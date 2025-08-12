<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommittesCell extends Model
{
    use HasFactory;
    protected $table = 'committees_cells';

    public function getTitle(){
        return $this->belongsTo(CommitteesCellsTitle::class,'title_id');
    }
}
