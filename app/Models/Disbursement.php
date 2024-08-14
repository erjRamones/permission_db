<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disbursement extends Model
{
    use HasFactory;

    protected $fillable = ['Disbursement_Date', 'Amount', 'Disbursed_By', 'Approved_By', 'Approved_Date'];
}
