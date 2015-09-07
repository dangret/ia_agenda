<?php

class EmployeeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /employer
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return Response::json([
			'status' => 'success',
			'data' => [
			'id_rh' => 1,
			'id_vta' => 1,
			'id_rfc' => 1,
			'id_nombre' => 1,
			'id_puesto' => 1,
			'id_sucursal' => 1,
			]]);
	}

	public function postSave()
	{
		$employee = User::find(Input::get('employee.id'));
		$rhdata = Input::get('employee.rhdata');
		$loandata = Input::get('employee.loandata');
		DB::beginTransaction();
		
		if ($rhdata){
			$_rhdata = isset($rhdata['id']) ? Rhdata::find($rhdata['id']) : new Rhdata($rhdata);  
			if ($_rhdata->id) $_rhdata->update($rhdata);
			$_rhdata->fiscal_entity()->associate(FiscalEntity::find(Input::get('employee.rhdata.fiscal_entity.id')));
			$_rhdata->fiscal_regime()->associate(FiscalRegime::find(Input::get('employee.rhdata.fiscal_regime.id')));
			$_rhdata->leadership_team()->associate(Leadershipteam::find(Input::get('employee.rhdata.leadership_team.id')));
			$_rhdata->section()->associate(Section::find(Input::get('employee.rhdata.section.id')));
			$_rhdata->area()->associate(Area::find(Input::get('employee.rhdata.area.id')));
			$_rhdata->subarea()->associate(Subarea::find(Input::get('employee.rhdata.subarea.id')));
			$_rhdata->subarea()->associate(Subarea::find(Input::get('employee.rhdata.subarea.id')));

			if (Input::get('employee.rhdata.position.id')) $_rhdata->position()->associate(Position::find(Input::get('employee.rhdata.position.id')));
			if (Input::get('employee.rhdata.tab.id')) $_rhdata->tab()->associate(Tab::find(Input::get('employee.rhdata.tab.id')));

			$_rhdata->save();
			$_rhdata->bosses()->sync([Input::get('employee.rhdata.boss.id')]);
			$employee->rhdata()->associate($_rhdata);
		}

		if ($loandata){
			$_loandata = isset($loandata['id']) ? Loandata::find($loandata['id']) : new Loandata($loandata);  
			if ($_loandata->id) $_loandata->update($loandata);
			$_loandata->save();
			$employee->loandata()->associate($_loandata);
		}

		$employee->save();

		DB::commit();

		return Response::json(['status' => 'success']);
	}
}
