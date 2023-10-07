<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class AtmCardDetail extends Model
{
    use HasFactory;


    protected $fillable = [
        'card_name',
        'card_holders_name',
        'card_number',
        'card_expiry_date',
        'card_cvv',
        'card_pin',
        'card_balance',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function getFormattedCardExpiryDateAttribute()
    {
        $date = Carbon::createFromFormat('m/y', $this->card_expiry_date);
        return $date->format('m/y');
    }
}
