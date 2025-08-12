<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quicklink extends Model
{
    use HasFactory;
    protected $table = 'quick_links';

    // static public function getQuicklink(){
    //     return Quicklink::select('quick_links.*')
    //         ->join('quick_link_titles', 'quick_links.title_id', '=', 'quick_link_titles.id')
    //         ->get();
    // }

}
