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
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('middleName');
            $table->string('dateOfBirth');
            $table->string('age');
            $table->string('placeOfBirth');
            $table->string('mobileNumber');
            $table->string('telephoneNumber');
            $table->string('countryCode');
            $table->string('country');
            $table->string('region');
            $table->string('province');
            $table->string('municipality');
            $table->string('completeAddress');
            $table->string('zipCode');
            $table->string('email');
            $table->string('nationality');
            $table->string('civilStatus');
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
        Schema::dropIfExists('student_profiles');
    }
};
