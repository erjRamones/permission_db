<?php

// app/Models/FactorRate.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factor_Rate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'payment_frequency_id',
        'payment_duration_id',
        'description',
        'value',
        'notes',
    ];

    /**
     * Get the payment frequency that owns the factor rate.
     */
    public function paymentFrequency()
    {
        return $this->belongsTo(Payment_Frequency::class);
    }

    /**
     * Get the payment duration that owns the factor rate.
     */
    public function paymentDuration()
    {
        return $this->belongsTo(Payment_Duration::class);
    }
}
