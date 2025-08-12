<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'certificate_id',
        'amount',
        'transation_date',
        'transaction_number',
        'method',
        'currency',
        'order_id',
        'json_response'
    ];
}
