<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoomType extends Model
{
    /** @use HasFactory<\Database\Factories\RoomTypeFactory> */
    use HasFactory;

    protected $fillable = ['name', 'code', 'base_price', 'max_occupancy', 'description', 'is_active'];

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

}
