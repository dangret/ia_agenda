<?php

class SectionTableSeeder extends Seeder {

	public function run()
	{
		Section::create([
			'name' => 'Comercial'
			]);
		Section::create([
			'name' => 'Corporativo'
			]);
	}
}