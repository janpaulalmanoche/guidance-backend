<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationWhereDoYouStaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information_where_do_you_stays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('personal_information_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('landlord_name')->nullable();
            $table->integer('place_staying_in_gensan_id')->nullable();
            $table->string('contact_number')->nullable();
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
        Schema::dropIfExists('personal_information_where_do_you_stays');
    }
}
