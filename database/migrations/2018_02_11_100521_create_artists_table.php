<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
	$table->increments('id');
	$table->string('name');
	$table->string('profilepic')->nullable();
	//$table->string('coverpic')->nullable();
	$table->longtext('description');
	$table->text('thingsimake');
	$table->string('link')->nullable();
	$table->string('email');
	$table->string('phone')->nullable();
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
        Schema::dropIfExists('artists');
    }
}
