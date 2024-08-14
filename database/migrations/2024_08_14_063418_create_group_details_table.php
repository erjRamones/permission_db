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
        Schema::create('group_details', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('Group_Id');
            $table->unsignedBigInteger('Client_Id');
            $table->date('Date_Group_Created');
            $table->string('IsActive');

            #DINHI DAPIT TONG CONSTRAINTS SA FOREGIN KEY


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_details');
    }
};
