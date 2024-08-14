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
        Schema::create('loan_cycle', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('Cycle_Number');
            $table->double('Min_Amount');
            $table->double('Max_Amount');

            #DINHI DAPIT ANG CONSTRAINT SA FOREIGN KEY


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_cycle');
    }
};
