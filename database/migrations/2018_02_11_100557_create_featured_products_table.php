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
	$table->string('image');
	$table->string('dimension');
	$table->string('weight');
	$table->text('materialUsed');
	$table->text('description');
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
