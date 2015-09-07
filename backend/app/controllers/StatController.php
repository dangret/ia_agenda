<?php

class StatController extends \BaseController {
	function getByDate(){
		$period = Input::get('period');
		$resource = Input::get('resource');

		$year = explode('-',date('Y'));
		$month = explode('-',date('m'));
		$day = explode('-',date('d'));

		$stats = Stat::where('resource', $resource);
		$data = Stat::where('resource', $resource);
		
		if ($period == 'dialy'){
			$stats->whereRaw('day(created_at) = ?',[$month]);
			$data->whereRaw('day(created_at) = ?',[$month]);
		}
		if ($period == 'dialy' || $period == 'monthly' ){
			$stats->whereRaw('month(created_at) = ?',[$month]);
			$data->whereRaw('month(created_at) = ?',[$month]);
		}
		if (!$period){
			$stats->whereRaw('year(created_at) = ?',[$year]);
			$data->whereRaw('year(created_at) = ?',[$year]);
		}

		$stats->groupBy('method');
		$stats->select(DB::raw('count(*) as times'),'method');

		// $data->groupBy(DB::raw('month(created_at)'));
		$data->groupBy(DB::raw('day(created_at)'),'method');
		if ($period == 'dialy'){
			
		}
		$data->select(DB::raw('count(*) as times'),
			'method', 
			DB::raw('day(created_at) as x'));

		return Response::json(['stats' => $stats->get(), 'data' => $data->get()]);
	}
}