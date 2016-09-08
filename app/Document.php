<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DocumentController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:30:45am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Document extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'documents';

	
	public function purpose()
	{
		return $this->belongsTo('App\Purpose','purpose_id');
	}

	
}
