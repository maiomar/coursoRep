<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *course_name
     * @return void
     */
    public function up()
    {
        Schema::create('rejistrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->date('date_rejistration')->default(DB::raw('CURRENT_TIMESTAMP'));//تاريخ التسجيل على الدورة
            $table->boolean('accepted');//قبول بالدورة
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
        Schema::dropIfExists('rejistrations');
    }
};
