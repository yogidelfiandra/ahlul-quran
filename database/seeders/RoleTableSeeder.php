<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		Role::create(['name' => 'admin1']);
		Role::create(['name' => 'admin2']);
		Role::create(['name' => 'admin3']);
		Role::create(['name' => 'admin4']);
		Role::create(['name' => 'user']);
	}
}
