<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentCategoryEntranceFee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function documentCategory(){
        return $this->belongsTo(DocumentCategory::class,'document_category_id');
    }
}
