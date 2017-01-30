<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Administrator (can create other users)',],
            ['id' => 2, 'title' => 'Simple user',],
            ['id' => 3, 'title' => 'NTS',],
        ];

        $permissions = [
            ['id' => 1, 'title' => 'user_management_access', ],

            ['id' => 2, 'title' => 'role_access'],
            ['id' => 3, 'title' => 'role_create'],
            ['id' => 4, 'title' => 'role_edit'],
            ['id' => 5, 'title' => 'role_view'],
            ['id' => 6, 'title' => 'role_delete'],

            ['id' => 7, 'title' => 'user_access'],
            ['id' => 8, 'title' => 'user_create'],
            ['id' => 9, 'title' => 'user_edit'],
            ['id' => 10, 'title' => 'user_view'],
            ['id' => 11, 'title' => 'user_delete'],

            ['id' => 12, 'title' => 'permission_access'],
            ['id' => 13, 'title' => 'permission_create'],
            ['id' => 14, 'title' => 'permission_edit'],
            ['id' => 15, 'title' => 'permission_view'],
            ['id' => 16, 'title' => 'permission_delete'],
        ];

        

        foreach ($permissions as $permission) {
            $perm = new \App\Permission; 
            $perm->create($permission);
        }

        foreach ($items as $item) {
            $role = new \App\Role;
            $role->create($item);
        }

        DB::table('permission_role')->delete();
        $role_has_permissions = [
            ['permission_id' => 1, 'role_id' => 1],

            ['permission_id' => 2, 'role_id' => 1],
            ['permission_id' => 3, 'role_id' => 1],
            ['permission_id' => 4, 'role_id' => 1],
            ['permission_id' => 5, 'role_id' => 1],
            ['permission_id' => 6, 'role_id' => 1],

            ['permission_id' => 7, 'role_id' => 1],
            ['permission_id' => 8, 'role_id' => 1],
            ['permission_id' => 9, 'role_id' => 1],
            ['permission_id' => 10, 'role_id' => 1],
            ['permission_id' => 11, 'role_id' => 1],

            ['permission_id' => 12, 'role_id' => 1],
            ['permission_id' => 13, 'role_id' => 1],
            ['permission_id' => 14, 'role_id' => 1],
            ['permission_id' => 15, 'role_id' => 1],
            ['permission_id' => 16, 'role_id' => 1],
        ];
        DB::table('permission_role')->insert($role_has_permissions);
    }
}
