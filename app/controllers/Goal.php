<?php

class GoalController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$goals = Goal::with('exercise')->get();

		return Response::make($goals->toJson(), 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validator = Validator::make($input, Goal::$rules);

		if ($validator->passes())
		{
			$goal = new Goal;
			$goal->fill($input);
			$goal->save();

			return Response::make($goal->toJson(), 200);
		}

		return Response::make($validator->messages(), 400);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$goal = Goal::find($id);

		return Response::make($goal->toJson(), 200);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validator = Validator::make($input, Goal::$rules);

		if ($validator->passes())
		{
			$goal = Goal::find($id);
			$goal->update($input);

			return Response::make($goal->toJson(), 200);
		}

		return Response::make($validator->messages(), 400);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Goal::find($id)->delete();

		return Response::make('', 204);
	}

}
