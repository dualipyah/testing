<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		  
		/*DB::table('users')->insert(
			['name' => str_random(10),
			 'email' => str_random(10).'@gmail.com',
			 'password' => bcrypt('secret')
			]
		);
		
		factory('App\User::class,2')->create();
    }*/
	
		factory(App\User::class,2)
		 ->create()
		 ->each(function($user)
		 {
			 $user->profile()->save(factory(App\Profile::class)->make());
		 }
		);
	}
}
