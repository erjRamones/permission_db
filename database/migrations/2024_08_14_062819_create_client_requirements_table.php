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
        Schema::create('client_requirements', function (Blueprint $table) {
            $table->id()->primary(); #MAO NING PRIMARY KEY NA COLUMN
            $table->string('Barangay_Clearance');
            $table->string('Proof_Of_Income');
            $table->string('PSA');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_requirements');
    }
};
