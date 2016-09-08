<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Departments
 *
 * @author  The scaffold-interface created at 2016-09-08 07:13:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Departments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('departments',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('department');
        
        $table->String('hotline');
        
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
        Schema::drop('departments');
    }
}
