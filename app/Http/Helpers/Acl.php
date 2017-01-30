<?php

namespace App\Http\Helpers;

use Illuminate\Support\Facades\Gate;

class Acl 
{
	public function allows($permission)
	{
		if (! Gate::allows($permission)) {
            return abort(401);
        }
	}
}