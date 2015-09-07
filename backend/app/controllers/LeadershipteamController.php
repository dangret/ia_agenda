<?php

class LeadershipteamController extends \BaseController {
	public function getIndex(){
	 	$data = Leadershipteam::all();
		return Response::json(['status' => 'success', 'data' => $data]);
	}
}