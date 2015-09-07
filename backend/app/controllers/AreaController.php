<?php

class AreaController extends \BaseController {
	public function getIndex(){
	 	$data = Area::all();
		return Response::json(['status' => 'success', 'data' => $data]);
	}
}