<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('password');//كلمة السر للطالب
            $table->unsignedBigInteger('role_id')->default(2);
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('first_name');// اسم الطالب
            $table->string('last_name');//كنية الطالب
            $table->string('email')->unique();// ايميل الطالب
            $table->string('photo_profile')->nullable();// صورة البروفايل للطالب
            $table->Integer('mobile');// رقم هاتف الطالب
            $table->date('birth_date')->nullable();// تاريخ الميلاد
            $table->string('gender')->nullable();// جنس الطالب
            $table->string('Address')->nullable();// عنوان الطالب
            $table->string('nationality')->nullable();// جنسية الطالب
            $table->string('social_situation')->nullable();// وضع الجتماعي
            $table->string('educcational_attainment')->nullable();// المستوى العلمي

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');


    }
};
