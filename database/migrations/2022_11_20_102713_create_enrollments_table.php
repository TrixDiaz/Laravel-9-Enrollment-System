<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('middleName');
            $table->string('mobileNumber');
            $table->string('gender');
            $table->string('studentOccupation');
            $table->string('dateOfBirth');
            $table->string('placeOfBirth');
            $table->string('age');
            $table->string('track');
            $table->string('grade');
            $table->string('houseNumber');
            $table->string('streetName');
            $table->string('baranggay');
            $table->string('city');
            $table->string('province');
            $table->string('zipCode');
            $table->string('motherName');
            $table->string('motherOccupation');
            $table->string('motherContactNumber');
            $table->string('fatherName');
            $table->string('fatherOccupation');
            $table->string('fatherContactNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
};
