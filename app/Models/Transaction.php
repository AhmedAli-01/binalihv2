<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = [
        'folio_id',
        'user_id',
        'type',
        'description',
        'amount',
    ];

    public function folio(): BelongsTo
    {
        return $this->belongsTo(Folio::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
