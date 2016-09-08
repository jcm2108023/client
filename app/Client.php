<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ClientController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:18:11am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Client extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'clients';

	
}
