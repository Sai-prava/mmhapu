<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuicklinkTitle extends Model
{
    use HasFactory;
    protected $table = 'quick_link_titles';

    public function Menus(){
        return $this->belongsTo(Menu::class,'title');
    }
}
