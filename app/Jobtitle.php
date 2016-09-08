<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobtitleController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:14:47am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Jobtitle extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'jobtitles';

	
}
