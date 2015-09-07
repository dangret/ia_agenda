<?php

class SubareaController extends \BaseController {
	public function getIndex(){
	 	$data = Subarea::all();
		return Response::json(['status' => 'success', 'data' => $data]);
	}
}