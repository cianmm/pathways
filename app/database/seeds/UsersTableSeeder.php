<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	    // first let's remove everything out of the users table
	    User::truncate();
        
        // now let's throw some users in there
        User::create([
            'email' => 'cianmm@gmail.com',
            
            'password' => '1234',
            
            'first_name' => 'Cian',
            
            'second_name' => 'Mac mahon',
            
            'current_position' => 'Support Engineer'
        ]);
        
        User::create([
            'email' => 'ian@iangoode.com',
            
            'password' => 'IanRocks',
            
            'first_name' => 'ian',
            
            'second_name' => 'goode',
            
            'current_position' => 'Front-end Developer'
        ]);

        User::create([
            'email' => 'dodomcfrodo@gmail.com',
            
            'password' => 'Brian Is Great',
            
            'first_name' => 'Brian',
            
            'second_name' => 'Doherty',
            
            'current_position' => 'Back End Genius'
        ]);

	}

}
