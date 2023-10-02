<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptocurrencyWalletDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'coin_image',
        'coin_name',
        'coin_wallet_address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

