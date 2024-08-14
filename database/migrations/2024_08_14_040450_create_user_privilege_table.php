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
        Schema::create('user_privilege', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('user_id');
            $table->unsignedTinyInteger('canCreate');
            $table->unsignedTinyInteger('canRead');
            $table->unsignedTinyInteger('canUpdate');
            $table->unsignedTinyInteger('canDelete');

            #DINHI DAPIT ANG MGA CONSTRAINT SA FOREGIN KEY
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_privilege');
    }
};
