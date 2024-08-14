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
        Schema::create('guarantor', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('Client_Id');
            $table->string('Relationship');


            #DINHI DAPIT ANG FOREIGN KEY CONSTRAINT


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guarantor');
    }
};
