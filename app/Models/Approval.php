<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    protected $fillable = ['Encoded_By', 'Date_Encoded', 'CI_BY', 'CI_Remarks', 'Approved_By', 'Date_Approved', 'IsActive'];
}
