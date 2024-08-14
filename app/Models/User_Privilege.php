<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class user_privilege extends Model
{
    use HasFactory;

    protected $fillable = ['canCreate', 'canRead', 'canUpdate', 'canDelete'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
