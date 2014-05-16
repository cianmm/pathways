<?php

class GoalsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	    // first let's remove everything out of the goals table
	    Goal::truncate();
        
        // now let's throw some goals in there
        Goal::create([
            'user_id' => '1',
            
            'goal_title' => 'Cases Closed',
            
            'goal_description' => 'Close 2000 cases',
            
            'goal_value' => '500',
            
            'goal_complete' => '2000'
        ]);
        
        Goal::create([
            'user_id' => '1',
            
            'goal_title' => 'NPS',
            
            'goal_description' => 'Get to 65 NPS in the last month',
            
            'goal_value' => '50',
            
            'goal_complete' => '65'
        ]);

        Goal::create([
            'user_id' => '1',
            
            'goal_title' => 'AM Calls',
            
            'goal_description' => 'Listen to 4 hours of AM calls',
            
            'goal_value' => '1',
            
            'goal_complete' => '4'
        ]);
        Goal::create([
            'user_id' => '1',
            
            'goal_title' => 'Sales Calls',
            
            'goal_description' => 'Listen to 4 hours of Sales calls',
            
            'goal_value' => '4',
            
            'goal_complete' => '4'
        ]);
        
        Goal::create([
            'user_id' => '1',
            
            'goal_title' => 'Self Training',
            
            'goal_description' => 'Complete all self-training documentation available on the training portal',
            
            'goal_value' => '0',
            
            'goal_complete' => '25'
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
            
            'goal_title' => 'Staying Alive',
            
            'goal_description' => 'Don\'t die',
            
            'goal_value' => '1',
            
            'goal_complete' => '1'
        ]);

        Goal::create([
            'user_id' => '3',
            
            'goal_title' => 'Refactor database',
            
            'goal_description' => 'I don\'t even care this is ridiculous',
            
            'goal_value' => '0',
            
            'goal_complete' => '3'
        ]);

	}

}
