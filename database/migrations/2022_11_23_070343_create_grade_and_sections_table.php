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
        Schema::create('grade_and_sections', function (Blueprint $table) {
            $table->id();
            $table->string('sectionID');
            $table->string('sectionName');
            $table->string('gradeLevel');
            $table->string('faculty');
            $table->string('subject');
            $table->string('subjectID');
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
        Schema::dropIfExists('grade_and_sections');
    }
};
