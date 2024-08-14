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
        Schema::create('approval', function (Blueprint $table) {
            $table->id()->primary(); #MAO NING PRIMARY KEY NA COLUMN
            $table->string('Encoded_By');
            $table->date('Date_Encoded');
            $table->string('CI_BY');
            $table->string('CI_REMARKS');
            $table->string('Approved_By');
            $table->date('Date_Approved');
            $table->unsignedTinyInteger('IsActive');

            #DINHI DAPIT ANG ATONG CONSTRAINT SA FOREIGN KEY

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approval');
    }
};
