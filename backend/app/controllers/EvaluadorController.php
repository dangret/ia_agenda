<?php

class EvaluadorController extends BaseController {
	public function getIndex(){
	 		$evaluador=Input::get('evaluador.id');

	 		 $data=User::whereNotNull('rhdata_id')->whereNotNull('loandata_id')->where('active',1);

	 		if($evaluador){
	 			$data->where('id','<>',$evaluador);
	 		}

	 		 $data2=User::select('id','name','last_name')->whereNotNull('rhdata_id')->whereNotNull('loandata_id')->where('active',1)
	 		 ->whereNotExists(function($query){
	 		 	$query->select('user_evaluador_id')
	 		 		 ->from('relations')
	 		 		 ->whereRaw('users.id = relations.user_evaluador_id');
	 		 })

	 		 ->get();
	 		



		return Response::json(['status' => 'success', 'data' => $data->get(),'lista'=>$data2]);
	}
	public function postSave(){
		$evaluador=Input::get('evaluador.id');
		$evaluados=Input::get('evaluado');

		Relation::where('user_evaluador_id',$evaluador)->delete();
		
		foreach ($evaluados as $evaluado) {
			$evalua= new Relation();
			$evalua->user_evaluador_id 		=$evaluador;
			$evalua->user_evaluado_id 		=intval($evaluado[0]);
			$evalua->kpi 					=floatval($evaluado[1]);
			$evalua->save();
		}

		return 'ok';



	}
	public function getEvaluadores(){

		$data=User::with('evaluadores')
		->whereExists(function($query){
	 		 	$query->select('user_evaluador_id')
	 		 		 ->from('relations')
	 		 		 ->whereRaw('users.id = relations.user_evaluador_id');
	 		 })
		->get();

		return Response::json(['status' => 'success', 'data' => $data]);

	}

}