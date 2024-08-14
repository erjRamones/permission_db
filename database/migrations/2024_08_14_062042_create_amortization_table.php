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
        Schema::create('amortization', function (Blueprint $table) {
            $table->id()->primary(); #MAO NING PRIMARY KEY NA COLUMN
            $table->unsignedBigInteger('Disbursement_Id'); #MAO NING FOREIGN KEY NA COLUMN
            $table->double('Amount');
            $table->date('Date_Due');
            $table->double('Balance');
            $table->double('Total_Amount_Pay');
            $table->string('Collected_By');
            $table->double('Amount_Balance');

            #DINHI DAPIT ANG CONSTRAINT SA FOREIGN KEY


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amortization');
    }
};
