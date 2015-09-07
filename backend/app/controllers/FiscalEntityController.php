<?php

class FiscalEntityController extends \BaseController {
	public function getIndex(){
	 	$fiscalEntities = FiscalEntity::all();
		return Response::json(['status' => 'success', 'data' => $fiscalEntities]);
	}
}