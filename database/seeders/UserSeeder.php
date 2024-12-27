<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$pwd = 'Test@Password123#';
		$pwd_hash = Hash::make($pwd);
		
        User::factory()
        ->count(1)
        ->sequence(
            ['name' => 'developer','email'=>'admin@g.com','password'=>$pwd_hash]
        )
        ->create();
    }
}
