<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Jobtitles
 *
 * @author  The scaffold-interface created at 2016-09-08 07:14:47am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Jobtitles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('jobtitles',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('jobtitle');
        
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
        Schema::drop('jobtitles');
    }
}
