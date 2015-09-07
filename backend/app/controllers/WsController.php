<?php

class WsController extends BaseController {

	public function Server(){
		require_once("../app/lib/nusoap.php");

		$url='http://remuneracion-dev.adventa-bs.com/ws/server';

		$namespace = $url."?wsdl";
		$server = new nusoap_server;
		$server->configureWSDL('Remuneracion', $url, $url );
		$server->wsdl->schemaTargetNamespace = $namespace;
		$server->register(
			'registroUsuario',
			array(
				"numero_rh"       		=> 'xsd:int',
				"sap_venta" 			=> 'xsd:int',
				"usuario" 				=> 'xsd:string',
				"password" 				=> 'xsd:string',
				"first_name" 			=> 'xsd:string',
				"last_name" 			=> 'xsd:string',
				"email" 				=> 'xsd:string',
				"rol" 					=> 'xsd:string',
				"sucursal" 				=> 'xsd:string',
				'activo'				=> 'xsd:int'
				),
			array(
				'return' => 'xsd:string'
				),
			$namespace,
			$url,
			'rpc',
			'encoded',
			'ws Dedica ala agregacion de usuarios'
			);

		function registroUsuario($numero_rh, $sap_venta,$usuario,$password,$first_name,$last_name,$email,$rol,$sucursal,$activo){
			$usuario_query=User::withTrashed()->where('id_rh',$numero_rh)->first();

				if(count($usuario_query)==0){
					$rol2=Rol::where('name',$rol)->first();
					$sucursal2=Businessunit::where('abbr',$sucursal)->first();

					$usuario2= new User();
					$usuario2->id_rh 						=$numero_rh;
					$usuario2->id_vta 						=$sap_venta;
					$usuario2->login 						=$usuario;
					$usuario2->encryptpass 					=Hash::make($password);
					$usuario2->pass 						=$password;
					$usuario2->name 						=$first_name;
					$usuario2->last_name 					=$last_name;
					$usuario2->email 						=$email;
					if($rol!='inactivo'){
						$usuario2->rol_id 					=$rol2->id;	
					}
					$usuario2->businessunit_id 				=$sucursal2->id;
					$usuario2->deleted_at 					=$activo ?  null : date('Y-m-d H:m:s');
					$usuario2->save(); 
					
					return "1";
					
				}else{

					$rol2=Rol::where('name',$rol)->first();
					$sucursal2=Businessunit::where('abbr',$sucursal)->first();
					$usuario_query->id_rh 						=$numero_rh;
					$usuario_query->id_vta 						=$sap_venta;
					$usuario_query->login 						=$usuario;
					$usuario_query->encryptpass 				=Hash::make($password);
					$usuario_query->pass 						=$password;
					$usuario_query->name 						=$first_name;
					$usuario_query->last_name 					=$last_name;
					$usuario_query->email 						=$email;
					if($rol!='inactivo'){
						$usuario_query->rol_id 						=$rol2->id;
					}
					$usuario_query->businessunit_id 				=$sucursal2->id;
					$usuario_query->deleted_at 						=$activo ? null: date('Y-m-d H:m:s');
					//$usuario_query->deleted_at 						=$activo ? null: time();
					$usuario_query->save();

					return "1";
				}

		}
		$rawPostData = file_get_contents("php://input");
		return Response::make($server->service($rawPostData), 200, array('Content-Type' => 'text/xml', 'charset' => 'UTF-8'));


	}


}