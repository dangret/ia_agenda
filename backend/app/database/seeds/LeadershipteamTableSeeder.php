<?php

class LeadershipteamTableSeeder extends Seeder {

	public function run()
	{
		Leadershipteam::create([
			'name' => 'MID'
			]);
		Leadershipteam::create([
			'name' => 'BACK'
			]);
		Leadershipteam::create([
			'name' => 'FRONT'
			]);
	}

}