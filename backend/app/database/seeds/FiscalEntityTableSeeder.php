<?php

class FiscalEntityTableSeeder extends Seeder {

	public function run()
	{
			FiscalEntity::create([
				'name' => 'Humapedia'
			]);
			FiscalEntity::create([
				'name' => 'Prestadora'
			]);
			FiscalEntity::create([
				'name' => 'Facturas'
			]);
	}

}