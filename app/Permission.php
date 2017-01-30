<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
 	use SoftDeletes;
    protected $dates = ['deleted_at'];
	/**
	 * A permission can be applied to roles.
	 * 
	 * @return BelongsToMany
	 */
    public function roles()
    {
    	return $this->belongsToMany(Role::class);
    }
}
