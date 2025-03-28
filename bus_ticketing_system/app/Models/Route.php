<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_location',
        'end_location',
        'stops',
    ];

    protected $casts = [
        'stops' => 'array', // since you're using JSON in your migration
    ];

    // Relationships
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function fares()
    {
        return $this->hasMany(Fare::class);
    }
}
