<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_clubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('address')->nullable();
            $table->string('company')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('passport_exp')->nullable();
            $table->string('birth')->nullable();
            $table->string('type')->nullable();
            $table->string('lastTravel_country')->nullable();
            $table->string('lastTravel_date')->nullable();
            $table->string('issu_name')->nullable();
            $table->text('note')->nullable();
            $table->string('avatar')->nullable()->default('images/default.jpg');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('all_clubs');
    }
}
