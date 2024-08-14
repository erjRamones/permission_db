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
        Schema::create('loan_application', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('Client_Id');
            $table->unsignedBigInteger('Guarantor_id');
            $table->unsignedBigInteger('Group_Id');
            $table->unsignedBigInteger('Loan_Cycle_Id');
            $table->string('Purpose');
            $table->double('Amount');
            $table->date('Date_Applied');
            $table->string('Encoded_By');
            $table->string('Approved_By');
            $table->date('Review_date');
            $table->unsignedSmallInteger('Group_Amount');
            $table->double('Interest');
            $table->unsignedBigInteger('Term');
            $table->string('Status');


            #DIN HI TONG CONSTRAINT WHERE MAG ASSIGN UG FOREIGN KEY SA DATABASE

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_application');
    }
};
