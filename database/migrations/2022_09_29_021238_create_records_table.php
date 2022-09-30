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
            $table->integer('refNum');
            $table->date('date');
            $table->string('payer');
            $table->string('city');
            $table->string('prov');
            $table->string('nameOfdead');
            $table->string('nat');
            $table->integer('age');
            $table->string('sex');
            $table->date('dateofdeath');
            $table->string('causeofdeath');
            $table->string('nameofcemetery');
            $table->string('infect');
            $table->string('embalm');
            $table->string('disposition');
            $table->integer('amt');
            $table->string('colOfficer');
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
        Schema::dropIfExists('records');
    }
};
