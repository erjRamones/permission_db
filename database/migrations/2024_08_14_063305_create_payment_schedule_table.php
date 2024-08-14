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
        Schema::create('payment_schedule', function (Blueprint $table) {
            $table->id()->primary(); #MAO NING PRIMARY KEY NA COLUMN
            $table->date('Payment_Schedule');
            $table->date('Date_Of_Payment');
            $table->double('Amount');
            $table->unsignedBigInteger('Disbursement_Id'); #MAO NING FOREIGN KEY NA COLUMN

            #DINHI DAPIT ANG FOREIGN KEY CONSTRAINT


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_schedule');
    }
};
