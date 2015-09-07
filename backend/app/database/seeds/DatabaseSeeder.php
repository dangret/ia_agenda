<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('RolTableSeeder');
		$this->call('BusinessunitTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('FiscalEntityTableSeeder');
		$this->call('FiscalRegimeTableSeeder');
		$this->call('LeadershipteamTableSeeder');
		$this->call('SectionTableSeeder');
		$this->call('AreaTableSeeder');
		$this->call('SubareaTableSeeder');
		$this->call('PositionTableSeeder');
		$this->call('TabTableSeeder');
	}

}
