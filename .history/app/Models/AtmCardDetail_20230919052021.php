<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'card_image_front',
        'card_image_back'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
