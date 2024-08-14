<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_Details extends Model
{
    use HasFactory;

    protected $fillable = ['Date_Group_Created', 'IsActive'];
}
