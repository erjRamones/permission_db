<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amortization extends Model
{
    use HasFactory;

    protected $fillable = ['Amount', 'Date_Due', 'Balance', 'Total_Amount_Pay', 'Collected_By', 'Amount_Balance'];
}
