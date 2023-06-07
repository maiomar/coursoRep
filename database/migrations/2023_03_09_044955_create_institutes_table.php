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
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('institute_name');//اسم المعهد
            $table->string('email')->unique();//ايميل المعهد
            $table->string('account facbok');//حساب المعهد على فيس بوك
            $table->string('institute_image');//صورة المعهد
            $table->string('location_institute');//موقع المعهد
            $table->string('About the institute');//نبذة عن المعهد
            $table->Integer('phone');//رقم هاتف المعهد
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
        Schema::dropIfExists('institutes');
    }
};
