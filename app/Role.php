<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['title'];
    
    public function permissions()
    {
    	return $this->belongsToMany(Permission::class);
    }

    public static function boot()
    {
        parent::boot();
        Role::observe(new \App\Observers\UserActionsObserver);
    }

    public function givePermissionTo(Permission $permissions)
    {
    	return $this->permissions()->save($permissions);
    }
}
