<?php

class FiscalRegimeTableSeeder extends Seeder {

	public function run()
	{
			FiscalRegime::create([
				'fiscal_entity_id' => 1,
				'name' => 'Colaboradores'
			]);
			FiscalRegime::create([
				'fiscal_entity_id' => 2,
				'name' => 'PPP'
			]);
			FiscalRegime::create([
				'fiscal_entity_id' => 2,
				'name' => 'Dividendos'
			]);
			FiscalRegime::create([
				'fiscal_entity_id' => 3,
				'name' => 'Honorarios'
			]);
			
	}

}