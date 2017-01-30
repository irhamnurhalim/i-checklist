<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$units = [
	    	['id' => 1, 'name' => 'Admin'],
    		['id' => 2, 'name' => 'NTS'],
    		['id' => 3, 'name' => 'OPR'],
    		['id' => 4, 'name' => 'PPIP'],
    		['id' => 5, 'name' => 'NCC'],
    		['id' => 6, 'name' => 'SWAS'],
    		['id' => 7, 'name' => 'ITB'],
    	];
    	$unit_admin = \App\Unit::insertGetId(['name' => 'Admin']);
    	$unit_nts = \App\Unit::insertGetId(['name' => 'NTS']);
    	$unit_itb = \App\Unit::insertGetId(['name' => 'ITB']);
    	$unit_opr = \App\Unit::insertGetId(['name' => 'OPR']);
    	$unit_ppip = \App\Unit::insertGetId(['name' => 'PPIP']);
    	$unit_ncc = \App\Unit::insertGetId(['name' => 'NCC']);
    	$unit_swas = \App\Unit::insertGetId(['name' => 'SWAS']);

        $items = [
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'username' => 'admin',  'password' => bcrypt('password'), 'remember_token' => '', 'unit_id' => $unit_admin],
            ['id' => 2, 'name' => 'Irham Nurhalim', 'email' => 'irham.nurhalim@idx.co.id', 'username' => 'irham', 'password' => bcrypt('password'), 'remember_token' => null, 'unit_id' => $unit_nts ],

        ];
        foreach ($items as $item) {
            \App\User::create($item);
        }

        // User has Role
        DB::table('role_user')->delete();
        $role_user = [
            ['user_id' => 1, 'role_id' => 1],
            ['user_id' => 2, 'role_id' => 1],
        ];
        DB::table('role_user')->insert($role_user);
    }
}
