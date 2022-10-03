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
            $table->id('RefNum');
            $table->date('Date');
            $table->string('Name');
            $table->string('City');
            $table->string('Province');
            $table->string('NameOfDeceased');
            $table->string('Nationality');
            $table->integer('Age');
            $table->string('Sex');
            $table->date('DateOfDeath');
            $table->string('CauseOfDeath');
            $table->string('NameOfCemetery');
            $table->string('Infectious');
            $table->string('Embalmed');
            $table->string('DispositionOfRemains');
            $table->integer('Amount');
            $table->string('CollectingOfficer');
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
