<?php

namespace App;

trait HasRoles
{

	// A user may have multiple roles
    public function roles()
    {
    	return $this->belongsToMany(Role::class);
    }

    // Assign the given role to the user
    public function assignRole($role)
    {
    	return $this->role()->save(
    		Role::whereTitle($role)->firstOrFail()
		);
    }

    // Determine if the user has the given role
    public function hasRole($role)
    {
    	if (is_string($role)) {
    		return $this->roles->contains('title', $role);
    	}

    	return !! $role->intersect($this->roles)->count();
    }

    // Determine if the user may perform the given permission
    public function hasPermission(Permission $permission)
    {
    	return $this->hasRole($permission->roles);
    }
}
