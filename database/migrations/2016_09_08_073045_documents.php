<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Documents
 *
 * @author  The scaffold-interface created at 2016-09-08 07:30:45am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Documents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('documents',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('din');
        
        $table->String('title');
        
        $table->String('description');
        
        $table->String('priority');
        
        $table->String('type');
        
        $table->String('due');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('purpose_id')->unsigned()->nullable();
        $table->foreign('purpose_id')->references('id')->on('purposes')->onDelete('cascade');
        
        
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
        Schema::drop('documents');
    }
}
