<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HousekeepingTask extends Model
{
    /** @use HasFactory<\Database\Factories\HousekeepingTaskFactory> */
    use HasFactory;
    protected $fillable = [
        'room_id',
        'user_id',
        'status',
        'remarks',
    ];
    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
