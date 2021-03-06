<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \HttpOz\Roles\Models\Role::create([
	        'name' => 'Admin',
    	    'slug' => 'admin',
        	'description' => 'Administrator', // optional
        	'group' => 'admin' // optional, set as 'default' by default
	    ]);

	    \HttpOz\Roles\Models\Role::create([
        	'name' => 'Forum Moderator',
        	'slug' => 'sitemods',
        	'description' => 'Moderator',
        	'group' => 'mods'
    	]);

	    \HttpOz\Roles\Models\Role::create([
        	'name' => 'User',
        	'slug' => 'user',
        	'description' => 'General User',
        	'group' => 'user'
    	]);
    }
}
