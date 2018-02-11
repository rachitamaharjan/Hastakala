<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('authors')->insert(array(
	'name'=>'Dachita',
	'bio'=>'blah',
	'biotry'=>'blanckjnjkh',
	'created_at'=>date('Y-m-d H:m:s'),
	'updated_at'=>date('Y-m-d H:m:s')
	));

	DB::table('authors')->insert(array(
	'name'=>'Daman',
	'bio'=>'blanckjnjkh',
	'biotry'=>'blanckjnjkh',
	'created_at'=>date('Y-m-d H:m:s'),
	'updated_at'=>date('Y-m-d H:m:s')
	));

	DB::table('authors')->insert(array(
	'name'=>'Dushreena',
	'bio'=>'blanckjnjkh',
	'biotry'=>'blanckjnjkh',
	'created_at'=>date('Y-m-d H:m:s'),
	'updated_at'=>date('Y-m-d H:m:s')
	));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('authors')->where('name','=','Dachita')->delete();
	 DB::table('authors')->where('name','=','Daman')->delete();
	 DB::table('authors')->where('name','=','Dushreena')->delete();
    }
}
