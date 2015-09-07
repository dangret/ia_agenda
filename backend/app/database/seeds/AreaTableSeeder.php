<?php

class AreaTableSeeder extends Seeder {

	public function run()
	{
		Area::create([
			'name' => 'Administración'
			]);
		Area::create([
			'name' => 'BIS'
			]);
		Area::create([
			'name' => 'Comercial'
			]);
		Area::create([
			'name' => 'Marketing'
			]);
		Area::create([
			'name' => 'Negociaciones'
			]);
		Area::create([
			'name' => 'Operaciones'
			]);
		Area::create([
			'name' => 'PE'
			]);
		Area::create([
			'name' => 'Recursos Humanos'
			]);
	}
}