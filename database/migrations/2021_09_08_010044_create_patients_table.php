<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dpi');
            $table->char('gender');
            $table->date('day_of_birth');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('phone');
            $table->longText('sick');
            $table->longText('medicaments');
            $table->longText('alergy');
            $table->enum('is_active',[1,2]);       
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
        Schema::dropIfExists('patients');
    }
}
