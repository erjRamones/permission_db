<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['Payment_Schedule', 'Date_Of_Payment', 'Amount'];
}
