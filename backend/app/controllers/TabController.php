<?php

class TabController extends \BaseController {
	public function getIndex(){
	 	$data = Tab::all();
		return Response::json(['status' => 'success', 'data' => $data]);
	}
}