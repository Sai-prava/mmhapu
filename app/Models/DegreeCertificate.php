<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DegreeCertificate extends Model
{
    use HasFactory;

    public function getDocument()
    {
        $documentIds = json_decode($this->document_id, true) ?? [];
        return Document::whereIn('id', $documentIds)->get();
    }

    public function degree()
    {
        return $this->belongsTo(Degree::class, 'degree_id');
    }
    
   
}
