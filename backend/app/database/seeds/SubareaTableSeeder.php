<?php


class SubareaTableSeeder extends Seeder {

	public function run()
	{
		Subarea::create([
			'name' => 'Administración' 
			]);
		Subarea::create([
			'name' => 'Calidad y análisis' 
			]);
		Subarea::create([
			'name' => 'Call Center' 
			]);
		Subarea::create([
			'name' => 'Comercial' 
			]);
		Subarea::create([
			'name' => 'Compras' 
			]);
		Subarea::create([
			'name' => 'Desarrollo' 
			]);
		Subarea::create([
			'name' => 'Diseño' 
			]);
		Subarea::create([
			'name' => 'Logística' 
			]);
		Subarea::create([
			'name' => 'Marketing' 
			]);
		Subarea::create([
			'name' => 'Negociaciones' 
			]);
		Subarea::create([
			'name' => 'Operaciones' 
			]);
		Subarea::create([
			'name' => 'PE' 
			]);
		Subarea::create([
			'name' => 'Procesos' 
			]);
		Subarea::create([
			'name' => 'Producción' 
			]);
		Subarea::create([
			'name' => 'proyectos' 
			]);
		Subarea::create([
			'name' => 'Recursos Humanos' 
			]);
		Subarea::create([
			'name' => 'Soporte y servicios' 
			]);
	}
}