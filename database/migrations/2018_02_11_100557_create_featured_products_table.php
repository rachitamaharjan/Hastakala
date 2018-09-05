<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_products', function (Blueprint $table) {
	$table->increments('id');
	$table->string('name');
	$table->string('image1')->nullable();
	$table->string('image2')->nullable();
	$table->string('image3')->nullable();
	$table->string('dimension');
	$table->string('weight');
	$table->longtext('materialUsed');
	$table->longtext('description');
	$table->string('price');
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
        Schema::dropIfExists('featured_products');
    }
}
