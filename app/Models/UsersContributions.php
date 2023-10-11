<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaymentEndpoints;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UsersContributions extends Model
{
    use HasFactory;

    public function paymentEndpoint(): BelongsTo
    {
        return $this->belongsTo(PaymentEndpoints::class);
    }
    
}
