<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'client_id',
        'vehicle_id',
        'start_date',
        'end_date',
        'total_amount',
        'daily_rent',
        'number_of_days',
        'status',
        'description',
        'payment_type',
        'morphMany',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer',
        'vehicle_id' => 'integer',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'total_amount' => 'float',
        'daily_rent' => 'float',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }
}
