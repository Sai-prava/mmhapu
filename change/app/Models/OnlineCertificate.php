<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineCertificate extends Model
{
    use HasFactory;

    public function getPayment(){
        return $this->hasOne(Payment::class, 'certificate_id', 'id');
    }
}