<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TrackController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:34:50am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Track extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'tracks';

	
}
