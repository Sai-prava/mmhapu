<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viewgallery extends Model
{
    use HasFactory;
    protected $table = 'view_galleries';

    public function getGalleryTitle(){
        return $this->belongsTo(Gallery::class,'galleries_id');
    }
}
