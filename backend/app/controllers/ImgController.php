<?php

class ImgController extends \BaseController {
	
	function getTemp(){
		return Response::json(Input::all(),204);
	}

	function postTemp(){
		$file = Input::file('file');
		$ratio = Input::get('ratio');
		$size = Input::get('size'); //array: lxa || number: lxl 
		$rules = array(
			'file' => 'image|max:3000',
			);

		$validation = Validator::make(Input::all(), $rules);
		
		if ($validation->fails()){
			return Response::json(array(
				'state' => "error",
				'msg' => "The file must be an image and weigh less than 3 MB"
				));
		}

		$extension = $file->getClientOriginalExtension();
		
		try{
			$img = Image::make($file);
			$canvas = Image::canvas(200,200);
			$img->resize(200,200, function($constraint){
				$constraint->aspectRatio();
			});
			$canvas->insert($img, 'center');
		}
		catch (Exception $e){
			return Response::json(array(
				// Si falla, revisar la libreria GD de php, es dependencia de Image/Intervention
				'state' => "error",
				'msg' => "Could not treat the file",
				"e" => $e
				));

		}
		
		$name = Util::milliseconds();
		$relative_path = 'uploads/temp/'.$name.'.'.$extension;
		$img->save(public_path('uploads/temp/'.$name.'.'.$extension));
		
		return Response::json([
			'status' => 'success', 
			'msg' => 'listo', 
			'url' => $relative_path, 
			'data' => Input::all()
			]);
	}
}