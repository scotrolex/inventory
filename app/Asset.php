<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
    	'asset','description','location_id','office_id','number', 'user_id',
    ];

      public function user(){
	    	return $this->belongsTo(User::class);
   	}

   	public function location(){
	    	return $this->belongsTo(Location::class);
   	} 

   	public function office()
   	{
   		return $this->belongsTo(Office::class);
   	}
}
