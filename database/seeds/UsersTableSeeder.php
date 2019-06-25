<?php

use App\Progress;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'surname' => 'Admin',
        	'name' => 'Admin',
			'email' => 'admin@example.com',
			'password' => Hash::make('admin'),
			'is_admin' => 1,
		]);
		Progress::create([
			'user_id' => $user->id,
			'progress1' => 10,
			'progress2' => 10,
			'progress3' => 10,
			'progress4' => 10,
			'progress5' => 10,
		]);
    }
}
