<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GatewayDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_name',
        'merchant_id',
        'merchant_sub_id',
        'encryption_key',
        'encryption_iv',
        'sign_key',
        'secret_password_hash',
        'token_generate_url',
        'txn_initiation_url',
        'tnx_status_url',
        'user_id',
        'type',
        'key_id',
        'key_secret',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
