<?php

class FiscalRegimeController extends \BaseController {
	public function getIndex(){
	 	$fiscalRegime = FiscalRegime::all();
		return Response::json(['status' => 'success', 'data' => $fiscalRegime]);
	}
}