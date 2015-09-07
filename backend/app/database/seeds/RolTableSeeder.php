<?php

class RolTableSeeder extends Seeder {

	public function run()
	{
		Rol::create([
			"name" => "RH",
			"abbr" => 'RH',
			"active" => true,
			]);

		Rol::create([
			"name" => "PRESTADORA",
			"abbr" => 'PRES',
			"active" => true,
			]);
		
		Rol::create([
			"name" => "ADMINISTRACIÓN",
			"abbr" => 'ADM',
			"active" => true,
			]);
		
		
		Rol::create([
			"name" => "EMPLEADO",
			"abbr" => 'EMP',
			"active" => true,
			]);
	}

}