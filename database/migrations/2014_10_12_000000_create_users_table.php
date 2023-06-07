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
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('name');// اسم الطالب
            $table->string('last_name');//كنية الطالب
            $table->string('email')->unique();// ايميل الطالب
            $table->string('photo_profile')->nullable();// صورة البروفايل للطالب
            $table->Integer('momile_phone');// رقم هاتف الطالب
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
