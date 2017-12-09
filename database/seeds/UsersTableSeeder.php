<?php

use Illuminate\Database\Seeder;

use App\User; 

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
        	'name'=>'manager1',
        	'email'=>'manager@yopmail.com',
        	'mobile_number'=>'0176506362',
        	'address'=>'No 31, Jalan USJ 3/1 Subang Jaya',
        	'emergency_number'=>'0192729606',
        	'password'=>bcrypt('asdf123'),
        ]);

        /* Attach first user as manager */
        $user->roles()->sync([1]);

    }
}
