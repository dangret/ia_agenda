<?php

class PositionController extends \BaseController {
	public function getIndex(){
	 	$data = Position::all();
		return Response::json(['status' => 'success', 'data' => $data]);
	}
}