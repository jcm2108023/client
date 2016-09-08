<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Purposes
 *
 * @author  The scaffold-interface created at 2016-09-08 07:21:36am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Purposes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('purposes',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('purpose');
        
        $table->String('description');
        
        /**
         * Foreignkeys section
         */
        
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('purposes');
    }
}
