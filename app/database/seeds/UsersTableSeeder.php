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
            
            'second_name' => 'Mac Mahon',
            
            'current_position' => 'Support Engineer'
        ]);
        
        User::create([
            'email' => 'ian@iangoode.com',
            
            'password' => 'IanRocks',
            
            'first_name' => 'Ian',
            
            'second_name' => 'Goode',
            
            'current_position' => 'Front-end Developer'
        ]);

        User::create([
            'email' => 'dodomcfrodo@gmail.com',
            
            'password' => 'Brian Is Great',
            
            'first_name' => 'Brian',
            
            'second_name' => 'Doherty',
            
            'current_position' => 'Back End Genius'
        ]);
        
        Goal::create([
            'user_id' => '2',
            
            'goal_title' => 'Client work',
            
            'goal_description' => 'Meet 30 clients',
            
            'goal_value' => '2',
            
            'goal_complete' => '30'
        ]);
        
        Goal::create([
            'user_id' => '2',
            
            'goal_title' => 'Dying',
            
            'goal_description' => 'Don\'t die',
            
            'goal_value' => '1',
            
            'goal_complete' => '1'
        ]);

        Goal::create([
            'user_id' => '3',
            
            'goal_title' => 'Refactor database',
            
            'goal_description' => 'I don\t even care this is ridiculous',
            
            'goal_value' => '1',
            
            'goal_complete' => '0'
        ]);


	}

}
