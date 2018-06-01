<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
        	'name' => 'Marcos',
        	'email' => 'marcos.chabolla@gmail.com',
        	'password' => bcrypt('chabolla4'),
        	'admin' => 1
        ]);

        App\Profile::create([
        	'user_id' => $user->id,
        	'avatar' => 'uploads/avatars/user.png',
        	'about' => 'Lorem ipsum dolor sit amet, consectetur',
        	'facebook' => 'facebook.com',
        	'youtube' => 'youtube.com'	
        ]);
    }
}
