<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['First_Name', 'Last_Name', 'Middle_Name', 'Birthplace', 'Date_of_Birth', 'Civil_Status', 'Gender', 'Occupation', 'Address', 'Contact_Num', 'Membership_Date', 'Date_Registered', 'Status', 'Reference'];
}
