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
        Schema::create('suggestions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('suggested_course');//الدورة المقترحة
            $table->date('suggested_date')->default(DB::raw('CURRENT_TIMESTAMP'));//تاريخ الاقتراح
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * +++
     * ++
     */
    public function down()
    {
        Schema::dropIfExists('suggestions');
    }
};
