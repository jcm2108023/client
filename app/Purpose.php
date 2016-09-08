<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PurposeController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:21:36am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Purpose extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'purposes';

	
}
