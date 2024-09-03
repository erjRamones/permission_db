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
        Schema::create('personality', function (Blueprint $table) {
            $table->bigIncrements('id'); #primary key
            $table->dateTime('datetime_created');
            $table->dateTime('datetime_last_modified');
            $table->dateTime('datetime_registered');
            $table->string('name_type_code');
            $table->string('family_name');
            $table->string('middle_name');
            $table->string('first_name');
            $table->string('description');
            $table->date('birthday');
            $table->string('civil_status');
            $table->string('gender_code');
            $table->string('house_street');
            $table->string('purok_zone');
            $table->string('postal_code');
            $table->string('telephone_no');
            $table->string('email_address');
            $table->string('cellphone_no');

            #foregin key
            $table->unsignedBigInteger('personality_status_code'); #foregin key
            $table->unsignedBigInteger('branch_id'); #foregin key
            $table->unsignedBigInteger('barangay_id'); #foregin key
            $table->unsignedBigInteger('city_id'); #foregin key
            $table->unsignedBigInteger('country_id'); #foregin key
            $table->unsignedBigInteger('province_id'); #foregin key
            $table->unsignedBigInteger('spouse_id'); #foregin key
            $table->unsignedBigInteger('credit_status_id'); #foregin key


            $table->foreign('personality_status_code')->references('id')->on('personality_status_map')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branch')->onDelete('cascade');
            $table->foreign('barangay_id')->references('id')->on('barangay')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('city')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('country')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('province')->onDelete('cascade');
            $table->foreign('spouse_id')->references('id')->on('spouse')->onDelete('cascade');
            $table->foreign('credit_status_id')->references('id')->on('credit_status')->onDelete('cascade');
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personality');
    }
};
