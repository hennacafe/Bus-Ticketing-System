<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'passenger_id',
        'schedule_id',
        'fare_id',
        'voucher_id',
        'status',
        'final_price',
    ];

    // Relationships
    public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function fare()
    {
        return $this->belongsTo(Fare::class);
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }
}
