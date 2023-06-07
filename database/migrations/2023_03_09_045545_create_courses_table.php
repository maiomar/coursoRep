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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');//اسم الدورة
            $table->unsignedBigInteger('institute_id');
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('cascade');
            $table->Integer('cost1')->nullable();//كلفة الدورة المأجورة
            $table->Integer('cost2')->nullable();//كلفة الدورة بعد الحسم
            $table->date('rejistration_startdate');//تاريخ بدء التسجيل
            $table->date('rejistration_enddate');//تاريخ انتهاء التسجيل
            $table->string('image_path');//صورة الدورة
            $table->date('course_startdate');//تاريخ بدء الدورة
            $table->date('course_enddate');//تاريخ انتهاء الدورة
            $table->Integer('number_hourse');//عدد ساعات الدورة
           // $table->Integer('course_hourse');//ساعات الدورة (الساعة الخامسة مسائا)
          //  $table->string('course_days');//ايام الدورة
            $table->string('course_type');//نوع الدورة (مأجورة ,مجانية , حسم)
            $table->string('course_classification');//تصنيف الدورة (طبية, تكنولوجيا)
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
        Schema::dropIfExists('courses');
    }
};
