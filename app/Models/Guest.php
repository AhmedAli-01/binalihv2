<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guest extends Model
{
    /** @use HasFactory<\Database\Factories\GuestFactory> */
    use HasFactory;
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'display_name',
        'email',
        'phone',
        'nationality',
        'gender',
        'date_of_birth',
        'notes',
    ];
    public function documents(): HasMany
    {
        return $this->hasMany(GuestDocument::class);
    }
}
