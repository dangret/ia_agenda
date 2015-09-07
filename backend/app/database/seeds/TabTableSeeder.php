<?php

class TabTableSeeder extends Seeder {

	public function run()
	{

		Tab::create([
			'name' => '1'
			]);
		Tab::create([
			'name' => '2'
			]);
		Tab::create([
			'name' => '3'
			]);
		Tab::create([
			'name' => 'DF'
			]);
		Tab::create([
			'name' => 'GDL'
			]);
		Tab::create([
			'name' => 'MTY'
			]);
		Tab::create([
			'name' => 'QRO'
			]);
		Tab::create([
			'name' => 'PUE'
			]);
	}

}