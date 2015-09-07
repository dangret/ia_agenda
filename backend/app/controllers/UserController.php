<?php

class UserController extends \BaseController {

	public function getIndex(){
		
		$params = json_decode(Input::get('params'), true);
		$filter = json_decode(Input::get('filter'));
		$tabSelected = Input::get('tabSelected');
		$relations = Input::get('relations');
		$users = User::where('id','>',0);
		if ($params){
			foreach ($params as $key => $value) {
				if ($key != "_")
					$users->where($key,$value);	
			}
		}

		// filtros personalizados de tabla
		if ($filter){
			if ($filter->name){
				$users->where(function($w) use($filter){
					$w->orWhere('name','like','%'.$filter->name.'%')
					->orWhere('last_name','like','%'.$filter->name.'%');
				});
			}
		}

		if (count($relations)) $users->with($relations);

		if (isset($tabSelected)){
			if ($tabSelected == 'Pendiente')
				$users->where('rhdata_id',null);
			if ($tabSelected == 'Pendiente prestador'){
				$users->where('loandata_id',null);
				$users->whereNotNull('rhdata_id');
			}
			if ($tabSelected == 'Activos')
				$users->whereNotNull('loandata_id');
		}

		return Response::json(["status" => "success", "data" => $users->get()]);
	}

	public function postSave(){
		
		$data = Input::all();
		$user = null;
		if (isset($data["pass"])) $data["encryptpass"] = Hash::make($data["pass"]); 

		if (isset($user['photo']) && strpos($user['photo'], public_path('uploads/temp')) !== false)
			$user['photo'] = App::make('TransactionController')->checkTasksByStatusType($_transaction);
		
		if (isset($data["id"]))
			$user = User::find($data['id'])->update($data);
		else
			$user = User::create($data);

		return Response::json(["status" => "success", "data" => $user]);
	}

	public function postDelete(){
		return Response::json(User::find(Input::get('id'))->delete());
	}

	public function postActive(){
		$params = Input::all();
		User::find($params["id"])->update(["active" => $params["active"]]);
		return Response::json(['status' => 'success']);
	}

	// Recibe la ruta de un archivo en temporal y lo escribe guarda en su lugar correspondiente
	// retornando la nueva ruta del archivo donde quedará registrado permanentemente
	public static function saveAvatar($user){
		$name = last(explode('/',$user['photo']));
		$path = 'uploads/contacts/'.$user['id'].'/'.$name;
		Util::make_path($path);
		copy(public_path($user['photo']), public_path($path));
		$user['photo'] = $path;
		return $user['photo'];
	}

}
