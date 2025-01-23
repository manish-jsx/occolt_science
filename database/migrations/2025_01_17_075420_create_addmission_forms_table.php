<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddmissionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmission_forms', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('subcourse');
            $table->string('name');
            $table->string('guardians');
            $table->string('guardians_name');
            $table->text('correspondence_address')->nullable();
            $table->string('phone');
            $table->string('Whatsapp_number');
            $table->string('alternate_phone');
            $table->string('date_of_birth');
            $table->string('email');
            $table->string('education_qualification');
            $table->string('adhar_card_front');
            $table->string('adhar_card_back');
            $table->string('photo');
            $table->string('signature');
            $table->string('terms_and_conditions')->nullable();
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
        Schema::dropIfExists('addmission_forms');
    }
}
