<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client_Requirements extends Model
{
    use HasFactory;

    protected $fillable = ['Barangay_Clearance', 'Proof_Of_Income', 'PSA'];
}
