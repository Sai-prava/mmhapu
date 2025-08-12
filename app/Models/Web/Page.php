<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id', 'title', 'slug', 'description', 'meta_title', 'meta_description', 'attach', 'status', 'is_footer',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
}
