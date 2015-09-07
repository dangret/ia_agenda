<?php

class RolController extends \BaseController {

	public function getIndex()
	{
		$params = Input::all();
		$rols = Rol::where('id','>',0);

		foreach ($params as $key => $value) {
			if (!$key == "_")
				$rols->where($key,$value);	
		}

		return Response::json(["status" => "success", "data" => $rols->get()]);
	}

	public function postSave(){
		$data = Input::all();
		$rol = null;

		if (isset($data["id"]))
			$rol = Rol::find($data['id'])->update($data);
		else
			$rol = Rol::create($data);

		return Response::json(["status" => "success", "data" => $rol]);
	}

	public function postDelete(){
		Rol::find(Input::get('id'))->delete();
	}

	public function postActive(){
		$params = Input::all();
		Rol::find($params["id"])->update(["active" => $params["active"]]);
	}

	public function postValid(){
		$value = Input::get('value');
		$response = true;

		if (Rol::where("name",$value)->count() > 0){
			$response = false;
		}

		return Response::json (["isValid" => $response]);
	}
}