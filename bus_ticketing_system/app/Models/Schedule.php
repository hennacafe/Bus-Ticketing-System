<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_id',
        'route_id',
        'terminal_id',
        'departure_time',
        'arrival_time',
    ];

    protected $dates = [
        'departure_time',
        'arrival_time',
    ];

    // Relationships
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function terminal()
    {
        return $this->belongsTo(Terminal::class);
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
