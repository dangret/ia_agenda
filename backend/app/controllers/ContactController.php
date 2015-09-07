<?php

class ContactController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /contact
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Contact::all();
		return Response::json($data);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /contact
	 *
	 * @return Response
	 */
	public function store()
	{
		$contact = Input::all();
		$_contact = Contact::create($contact);
		if (isset($_contact['photo']) && strpos($_contact['photo'], public_path('uploads/temp')) === false){
			$_contact['photo'] = ContactController::saveAvatar($_contact);
			$_contact->save();
		}
		return Response::json($_contact);
	}

	/**
	 * Display the specified resource.
	 * GET /contact/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = Contact::find($id);
		return Response::json($data);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /contact/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$contact = Input::all();
		$_contact = Contact::find($contact['id'])->update($contact);
		if (isset($_contact['photo']) && strpos($_contact['photo'], public_path('uploads/temp')) === false){
			$_contact['photo'] = ContactController::saveAvatar($_contact);
			$_contact->save();
		}
		return Response::json($_contact);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /contact/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Contact::find($id)->delete();
		return Response::json('ok');
	}

	public function fieldExists($field=null, $id=null){
		$id = $id ? $id : $id = Input::get('id');
		$field = $field ? $field : Input::get('field');
		$value = Input::get('value');

		$exists = Contact::where($field, $value);
		if ($id) $exists->where('id','<>',$id);
		$exists = $exists->first() ? true : false;

		return Response::json(['status' => 'success', 'isValid' => !$exists]);
	}

	public static function saveAvatar($contact){
		$name = last(explode('/',$contact['photo']));
		$path = 'uploads/contacts/'.$contact['id'];
		Util::make_path($path);
		copy(public_path($contact['photo']), public_path($path.'/'.$name));
		$contact['photo'] = $path.'/'.$name;
		return $contact['photo'];
	}

}
