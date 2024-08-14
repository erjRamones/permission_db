<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan_Cycle extends Model
{
    use HasFactory;

    protected $fillable = ['Cycle_Number', 'Min_Amount', 'Max_Amount'];
}
