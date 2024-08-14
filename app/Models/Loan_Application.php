<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan_Application extends Model
{
    use HasFactory;

    protected $fillable = ['Purpose', 'Amount', 'Date_Applied', 'Encoded_By', 'Approved_By', 'Review_Date', 'Group_Amount', 'Interest', 'Term', 'Status'];
}
