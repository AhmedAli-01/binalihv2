<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GuestDocument extends Model
{
    /** @use HasFactory<\Database\Factories\GuestDocumentFactory> */
    use HasFactory;
    protected $fillable = ['guest_id', 'type', 'document_number', 'issue_country', 'expiry_date', 'attachment_path'];

    public function guest(): BelongsTo
    {
        return $this->belongsTo(related: Guest::class);
    }

    // Pro Tip: Helper method to check if document is valid
    public function isExpired(): bool
    {
        return $this->expiry_date->isPast();
    }
}
