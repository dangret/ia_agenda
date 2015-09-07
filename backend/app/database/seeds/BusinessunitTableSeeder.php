<?php

class BusinessunitTableSeeder extends Seeder {

	public function run()
	{

		Businessunit::create([
			"name" => "Guadalajara",
			"abbr" => "GDL",
			]);
		Businessunit::create([
			"name" => "Mexico",
			"abbr" => "DF",
			]);
		Businessunit::create([
			"name" => "Monterrey",
			"abbr" => "MTY",
			]);
		Businessunit::create([
			"name" => "Puebla",
			"abbr" => "PUE",
			]);
		Businessunit::create([
			"name" => "Queretaro",
			"abbr" => "QRO",
			]);
		Businessunit::create([
			"name" => "Direccion",
			"abbr" => "DIR",
			]);
		Businessunit::create([
			"name" => "Power",
			"abbr" => "PB",
			]);
		Businessunit::create([
			"name" => "Corporacion",
			"abbr" => "CORP",
			]);

	}

}