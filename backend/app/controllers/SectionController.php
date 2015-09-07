<?php

class SectionController extends \BaseController {
	public function getIndex(){
	 	$data = Section::all();
		return Response::json(['status' => 'success', 'data' => $data]);
	}
}