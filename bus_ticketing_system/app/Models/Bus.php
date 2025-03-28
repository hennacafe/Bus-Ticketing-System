<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'plate_number',
        'capacity',
        'status',
        'driver_id',
    ];

    // Relationships
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
