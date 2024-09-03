<?php

// app/Models/LoanApplicationComaker.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan_Application_Comaker extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'loan_application_id',
        'customer_id',
        'encoding_order',
    ];

    /**
     * Get the loan application that owns the comaker.
     */
    public function loanApplication()
    {
        return $this->belongsTo(Loan_Application::class, 'loan_application_id', 'id');
    }

    /**
     * Get the customer that owns the comaker.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
