<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Clients
 *
 * @author  The scaffold-interface created at 2016-09-08 07:18:11am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('clients',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('eid');
        
        $table->String('name');
        
        $table->String('mobile');
        
        $table->String('email');
        
        $table->String('department_id');
        
        $table->String('position_id');
        
        $table->String('user_id');
        
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
        Schema::drop('clients');
    }
}
