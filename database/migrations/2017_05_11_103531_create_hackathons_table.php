<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHackathonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackathon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email');
            $table->string('phone');
            $table->string('jobtitle');
            $table->string('organisation');
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
        Schema::dropIfExists('hackathon');
    }
}
