<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PositionTableSeeder extends Seeder {

	public function run()
	{
		Position::create([
			'name' => 'Soporte comercial'
			]);
		Position::create([
			'name' => 'Líder de Proyectos'
			]);
		Position::create([
			'name' => 'Gerente de Proyectos'
			]);
		Position::create([
			'name' => 'Diseñador Creativo'
			]);
		Position::create([
			'name' => 'Jefe de Diseño Creativo'
			]);
		Position::create([
			'name' => 'Ejecutivo Marketing'
			]);
		Position::create([
			'name' => 'Gerente Marketing'
			]);
		Position::create([
			'name' => 'Coordinador de Marketing Corporativo'
			]);
		Position::create([
			'name' => 'Coordinador de Línea de Negocio'
			]);
		Position::create([
			'name' => 'Gerente de Línea de Negocio'
			]);
		Position::create([
			'name' => 'Coordinador de Ventas'
			]);
		Position::create([
			'name' => 'Gerente de Desarrollo de Negocios'
			]);
		Position::create([
			'name' => 'Gerente Regional'
			]);
		Position::create([
			'name' => 'Gerente de Marketing Corporativo'
			]);
	}

}