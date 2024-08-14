<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('disbursement', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('Client_Id');
            $table->unsignedBigInteger('Loan_Id');
            $table->date('Disbursement_Date');
            $table->double('Amount');
            $table->string('Disbursed_By');
            $table->string('Approved_By');
            $table->date('Approved_Date');


            #DINHI DAPIT ANG FOREIGN KEY CONSTRAINT


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disbursement');
    }
};
