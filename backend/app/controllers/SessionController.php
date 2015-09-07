<?php

class SessionController extends Controller {

	function postLogin() {
		$username = Input::get('username');
		$password = Input::get('password');
		//$user = User::where('login', '=', $username)->get();
		$user = User::with('Rol')
			->where('login', $username)->get();
		if ($username == "" || $password == ""){ 
			return Redirect::to('login')->withErrors(array("Favor de completar todos los campos"));
		}
		if (count($user) != 0) {
			if($user[0]->active && $user[0]->rol->active) {
				if (Hash::check($password, $user[0]->encryptpass)) {
					Auth::loginUsingId($user[0]->id);
					return Redirect::to('/');
				} else {
					return Redirect::to('login')->withErrors(array("Usuario o contraseña incorrecto"));
				}
			} else {
				return Redirect::to('login')->withErrors(array("El usuario se encuentra deshabilitado, favor de contactar al administrador"));
			}
		} else {
			return Redirect::to('login')->withErrors(array("Usuario o contraseña incorrecto"));
		}
		return Redirect::to("/");
	}

	function getAuth() {
		if (Auth::check())
			return Response::json([
				"user" => User::where('id',Auth::user()->id)->with('rol')->get()[0],
				"rol" => Auth::user()->rol,
				]);
		else return Response::json(Auth::check());
	}

	function getLogout() {
		Auth::logout();
		return Redirect::to("/");
	}
}
