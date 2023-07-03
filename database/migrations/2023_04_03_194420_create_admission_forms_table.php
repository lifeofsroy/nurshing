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
        Schema::create('admission_forms', function (Blueprint $table) {
            $table->id();
            $table->string('course')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('blood')->nullable();
            $table->string('caste')->nullable();
            $table->string('religion')->nullable();
            $table->string('tongue')->nullable();
            $table->string('aadhaar')->nullable();
            $table->string('activity')->nullable();
            $table->string('is_disable')->nullable();
            $table->string('vill')->nullable();
            $table->string('po')->nullable();
            $table->string('ps')->nullable();
            $table->string('dist')->nullable();
            $table->string('state')->nullable();
            $table->string('pin')->nullable();
            $table->boolean('addr_same')->default(false);
            $table->text('parma_addr')->nullable();
            $table->string('ft_name')->nullable();
            $table->string('ft_occup')->nullable();
            $table->string('mt_name')->nullable();
            $table->string('mt_occup')->nullable();
            $table->text('guar_addr')->nullable();
            $table->string('guar_pin')->nullable();
            $table->string('guar_ph')->nullable();
            $table->string('quali1')->nullable();
            $table->string('board1')->nullable();
            $table->string('sub1')->nullable();
            $table->string('percent1')->nullable();
            $table->string('passing1')->nullable();
            $table->string('remark1')->nullable();
            $table->string('quali2')->nullable();
            $table->string('board2')->nullable();
            $table->string('sub2')->nullable();
            $table->string('percent2')->nullable();
            $table->string('passing2')->nullable();
            $table->string('remark2')->nullable();
            $table->string('quali3')->nullable();
            $table->string('board3')->nullable();
            $table->string('sub3')->nullable();
            $table->string('percent3')->nullable();
            $table->string('passing3')->nullable();
            $table->string('remark3')->nullable();
            $table->string('quali4')->nullable();
            $table->string('board4')->nullable();
            $table->string('sub4')->nullable();
            $table->string('percent4')->nullable();
            $table->string('passing4')->nullable();
            $table->string('remark4')->nullable();
            $table->boolean('is_pay')->default(false);
            $table->string('tc_photo')->nullable();
            $table->string('usr_photo')->nullable();
            $table->string('sgn_photo')->nullable();
            $table->string('adr_photo')->nullable();
            $table->string('cer_photo')->nullable();
            $table->string('m10_photo')->nullable();
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
        Schema::dropIfExists('admission_forms');
    }
};
