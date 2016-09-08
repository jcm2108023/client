<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DepartmentController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:13:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Department extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'departments';

	
}
