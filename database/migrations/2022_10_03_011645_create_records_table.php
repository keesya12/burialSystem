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
            $table->id('Reference Number');
            $table->date('Date');
            $table->string('Name');
            $table->string('City');
            $table->string('Province');
            $table->string('Name of Deceased');
            $table->string('Nationality');
            $table->integer('Age');
            $table->string('Sex');
            $table->date('Date of Death');
            $table->string('Cause of Death');
            $table->string('Name of Cemetery');
            $table->string('Infectious/Non-Infectious');
            $table->string('Body Embalmed/Not Embalmned');
            $table->string('Disposition of Remains');
            $table->integer('Amount');
            $table->string('Collecting Officer');
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
