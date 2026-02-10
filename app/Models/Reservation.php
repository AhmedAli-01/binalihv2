<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;
    protected $fillable = ['guest_id', 'room_type_id', 'check_in_date', 'check_out_date', 'status', 'total_price'];

    public function guest(): BelongsTo
    {
        return $this->belongsTo(Guest::class);
    }
    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }
    public function folio(): HasOne
    {
        return $this->hasOne(Folio::class);
    }
    public function dailyRates(): HasMany
    {
        return $this->hasMany(ReservationDailyRate::class);
    }
    public function assignment(): HasOne
    {
        return $this->hasOne(RoomAssignment::class);
    }
}
