<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomInventory extends Model
{
    protected $fillable = ['room_type_id', 'calendar_date', 'total_inventory', 'sold_count', 'blocked_count'];

    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }
}
