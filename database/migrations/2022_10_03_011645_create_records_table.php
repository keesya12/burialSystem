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
        Schema::create('records', function (Blueprint $table) {
            $table->id('Reference_Number');
            $table->date('Date');
            $table->string('Name');
            $table->string('City');
            $table->string('Province');
            $table->string('Name_of_Deceased');
            $table->string('Nationality');
            $table->integer('Age');
            $table->string('Sex');
            $table->date('Date_of_Death');
            $table->string('Cause_of_Death');
            $table->string('Name_of_Cemetery');
            $table->string('Infectious/Non-Infectious');
            $table->string('Body_Embalmed/Not_Embalmned');
            $table->string('Disposition_of_Remains');
            $table->integer('Amount');
            $table->string('Collecting_Officer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
};
