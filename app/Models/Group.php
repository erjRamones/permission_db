<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['Group_Name'];

    #KINI NA MODEL NAA NIY FOREIGN KEY TAN AWA ANG DATABASE SCHEMA NATOH FOR MORE INFO
    #PLEASE PAKI DUNGAG KO UG CODE PARA SA FOREGIN KEY KUNG WALA PA DINHI
}
