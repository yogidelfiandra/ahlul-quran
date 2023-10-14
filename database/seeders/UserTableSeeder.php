<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$admin1 = User::create([
			'name' => 'Admin1',
			'email' => 'admin@yayasanaq.com',
			'password' => bcrypt('password'),
		]);
		$admin1->assignRole('admin1');
	}
}
