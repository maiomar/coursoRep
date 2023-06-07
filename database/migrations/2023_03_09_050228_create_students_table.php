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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name_stedent');// اسم الطالب
            $table->string('last_name');//كنية الطالب
            $table->date('birth_date')->nullable();// تاريخ الميلاد
            $table->Integer('momile_phone');// رقم هاتف الطالب
            $table->string('gender')->nullable();// جنس الطالب
            $table->string('email')->unique();// ايميل الطالب
            $table->string('Address')->nullable();// عنوان الطالب
            $table->string('nationality')->nullable();// جنسية الطالب
            $table->string('social_situation')->nullable();// وضع الجتماعي
            $table->string('educcational_attainment')->nullable();// المستوى العلمي
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
        Schema::dropIfExists('students');
    }
};
