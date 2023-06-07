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
        Schema::create('course_syllabi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cours_id');
            $table->foreign('cours_id')->references('id')->on('courses')->onDelete('cascade');
            $table->text('course_subject');//موضوع محور الدورة
            $table->text('course_content');//محاور الدورة 
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
        Schema::dropIfExists('course_syllabi');
    }
};
