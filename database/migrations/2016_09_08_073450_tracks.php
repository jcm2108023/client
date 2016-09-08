<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Tracks
 *
 * @author  The scaffold-interface created at 2016-09-08 07:34:50am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Tracks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('tracks',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('document_id');
        
        $table->String('fromdepartment');
        
        $table->String('fromemployee');
        
        $table->String('todepartment');
        
        $table->String('toemployee');
        
        $table->String('state');
        
        $table->String('remarks');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
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
        Schema::drop('tracks');
    }
}
