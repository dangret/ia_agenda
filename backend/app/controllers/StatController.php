<?php

class StatController extends \BaseController {
	function getByDate(){
		$period = Input::get('period');
		$resource = Input::get('resource');

		$year = intval(date('Y'));
		$month = intval(date('m'));
		$day = intval(date('d'));

		$data = Stat::where('resource', $resource);
		
		if ($period == 'dialy'){
			$data->whereRaw('day(created_at) = ?',[$day]);
			$x = 'hour(created_at)';
		}
		
		if ($period == 'dialy' || $period == 'monthly' ){
			$data->whereRaw('month(created_at) = ?',[$month]);
			if ($period == 'monthly' )
				$x = 'week(created_at)';
		}

		$data->whereRaw('year(created_at) = ?',[$year]);
		if ($period == 'yearly' )
			$x = 'month(created_at)';

		$data->groupBy(DB::raw($x), 'method');
		$data->select(DB::raw('count(*) as times'),
			'method', 
			DB::raw($x.' as x'));

		return Response::json([
			'data' => $data->get(),
			]);
	}
}