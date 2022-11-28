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
        Schema::create('faculties', function (Blueprint $table) {
                $table->id();
                $table->string('facultyID')->unique();
                $table->string('firstName');
                $table->string('lastName');
                $table->string('middleName');
                $table->string('gender');
                $table->string('username')->unique();
                $table->string('password');
                $table->string('department');
                // $table->string('section')->unique();
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
        Schema::dropIfExists('faculties');
    }
};
