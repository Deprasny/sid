<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('street_address');
            $table->bigInteger('phone_number');
            $table->string('district');
            $table->string('province');
            $table->string('country');
            $table->bigInteger('zip');
            $table->string('education');
            $table->date('start_year');
            $table->date('end_year');
            $table->unsignedBigInteger('education_id');
            $table->string('job_name');
            $table->string('institution');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('street_address_job');
            $table->string('ditrict_job');
            $table->string('province_job');
            $table->string('country_job');
            $table->string('zip_job');
            $table->string('phone_job');
            $table->string('email_job');
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
        Schema::dropIfExists('biodatas');
    }
}
