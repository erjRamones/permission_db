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
        Schema::create('client', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('MiddleName');
            $table->unique(['FirstName', 'LastName', 'MiddleName']);
            $table->string('BirthPlace');
            $table->date('Date_of_Birth');
            $table->string('Civil_Status');
            $table->string('Gender');
            $table->string('Occupation');
            $table->string('Address');
            $table->string('Contact_Number');
            $table->date('Membership_Date');
            $table->date('Date_Registered');
            $table->string('status');
            $table->string('Reference');


            #DINHI DAPIT TONG CONSTRAINT SA MGA FOREIGN KEY


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
